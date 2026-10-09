/**
 * Site motion. Small, dependency-free behaviours that give every page the same feel:
 *
 *  - reveal: elements marked .reveal fade and rise into place as they enter the viewport;
 *    a [data-stagger] container does this for each of its children in sequence.
 *  - counters: a [data-count] number ("2,000+", "4.8", "12+") counts up from zero the first
 *    time it is seen, keeping its own prefix, suffix, decimals and thousands separators.
 *  - parallax: a [data-parallax] image drifts a few percent against the scroll while on screen.
 *  - accordions: <details> inside [data-accordion] open and close with an animated height
 *    (the browser gives none), and only one stays open per group.
 *  - page transitions: the page eases in on load, and same-site links fade it out before
 *    navigating, so moving between pages feels like one continuous surface.
 *  - forms: hints and errors are linked to their fields for screen readers, invalid fields are
 *    flagged and the first one is focused, and submit buttons show a busy state so nobody
 *    double-submits while the server is working.
 *
 * Everything respects prefers-reduced-motion and costs nothing when the element is off screen.
 */

const reduced = matchMedia('(prefers-reduced-motion: reduce)').matches;
const EASE = 'cubic-bezier(.2, .65, .25, 1)';

export function mountMotion() {
    forms();
    stagger();
    reveal();
    counters();
    accordions();
    if (reduced) return;
    parallax();
    pageTransitions();
}

/** Children of [data-stagger] become .reveal items with a growing transition delay. */
function stagger() {
    document.querySelectorAll('[data-stagger]').forEach((group) => {
        [...group.children].forEach((child, i) => {
            child.classList.add('reveal');
            child.style.transitionDelay = `${Math.min(i, 9) * 70}ms`;
        });
    });
}

function reveal() {
    const items = document.querySelectorAll('.reveal');
    if (!items.length) return;
    const io = new IntersectionObserver((entries) => {
        for (const e of entries) {
            if (!e.isIntersecting) continue;
            e.target.classList.add('in');
            io.unobserve(e.target);
        }
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    items.forEach((el) => io.observe(el));
}

/** "2,000+" → prefix "", number 2000, decimals 0, suffix "+"; animates the number part only. */
function counters() {
    const els = document.querySelectorAll('[data-count]');
    if (!els.length) return;
    const parse = (text) => {
        const m = text.trim().match(/^([^\d]*)([\d,]*\.?\d+)(.*)$/);
        if (!m) return null;
        const decimals = (m[2].split('.')[1] || '').length;
        return { prefix: m[1], value: parseFloat(m[2].replace(/,/g, '')), decimals, suffix: m[3], grouped: m[2].includes(',') };
    };
    const format = (n, p) => p.prefix + (p.grouped ? n.toLocaleString('en-US', { minimumFractionDigits: p.decimals, maximumFractionDigits: p.decimals }) : n.toFixed(p.decimals)) + p.suffix;
    const run = (el) => {
        const p = parse(el.textContent);
        if (!p || reduced) return;
        el.classList.add('count-up');
        const t0 = performance.now(), duration = 1400;
        const tick = (now) => {
            const t = Math.min(1, (now - t0) / duration);
            const eased = 1 - Math.pow(2, -10 * t); // ease-out-expo: fast start, soft landing
            el.textContent = format(p.value * (t === 1 ? 1 : eased), p);
            if (t < 1) requestAnimationFrame(tick);
        };
        requestAnimationFrame(tick);
    };
    const io = new IntersectionObserver((entries) => {
        for (const e of entries) if (e.isIntersecting) { run(e.target); io.unobserve(e.target); }
    }, { threshold: 0.6 });
    els.forEach((el) => io.observe(el));
}

/** Images drift against the scroll while visible. The parent must clip overflow. */
function parallax() {
    const els = [...document.querySelectorAll('[data-parallax]')];
    if (!els.length) return;
    const active = new Set();
    let scheduled = false;
    const update = () => {
        scheduled = false;
        for (const el of active) {
            const r = el.parentElement.getBoundingClientRect();
            const centre = (r.top + r.height / 2 - innerHeight / 2) / innerHeight; // -0.5 … 0.5 on screen
            const strength = parseFloat(el.dataset.parallax) || 8; // percent of the image's height
            el.style.transform = `translateY(${(-centre * strength).toFixed(2)}%) scale(1.12)`;
        }
    };
    const schedule = () => { if (!scheduled) { scheduled = true; requestAnimationFrame(update); } };
    new IntersectionObserver((entries) => {
        for (const e of entries) e.isIntersecting ? active.add(e.target) : active.delete(e.target);
        schedule();
    }, { rootMargin: '10% 0px' }).observe && els.forEach((el) => {
        new IntersectionObserver((entries) => { for (const e of entries) e.isIntersecting ? active.add(e.target) : active.delete(e.target); schedule(); }, { rootMargin: '10% 0px' }).observe(el);
    });
    addEventListener('scroll', schedule, { passive: true });
    addEventListener('resize', schedule, { passive: true });
    schedule();
}

/** Animated <details>: height tweens open and closed, one open per [data-accordion] group. */
function accordions() {
    document.querySelectorAll('[data-accordion]').forEach((group) => {
        const items = [...group.querySelectorAll('details')];
        items.forEach((d) => {
            const summary = d.querySelector('summary');
            if (!summary) return;
            let animation = null;
            const settle = (open) => { d.open = open; d.style.height = ''; d.style.overflow = ''; animation = null; };
            const toggle = (open) => {
                animation?.cancel();
                const from = `${d.offsetHeight}px`;
                if (open) d.open = true;
                const to = `${open ? d.scrollHeight : summary.offsetHeight + parseFloat(getComputedStyle(d).paddingTop) + parseFloat(getComputedStyle(d).paddingBottom)}px`;
                d.style.overflow = 'hidden';
                if (reduced) return settle(open);
                animation = d.animate({ height: [from, to] }, { duration: 280, easing: EASE });
                animation.onfinish = () => settle(open);
                animation.oncancel = () => settle(open);
            };
            summary.addEventListener('click', (e) => {
                e.preventDefault();
                const opening = !d.open;
                if (opening) items.forEach((o) => { if (o !== d && o.open) o.querySelector('summary')?.dispatchEvent(new Event('close-silently')); });
                toggle(opening);
            });
            summary.addEventListener('close-silently', () => toggle(false));
        });
    });
}

/** Fade the page in on arrival, and out before following a same-site link. */
function pageTransitions() {
    const html = document.documentElement;
    addEventListener('pageshow', (e) => { if (e.persisted) html.classList.remove('page-out'); });
    document.addEventListener('click', (e) => {
        const a = e.target.closest('a[href]');
        if (!a || e.defaultPrevented || e.button !== 0 || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;
        if (a.target && a.target !== '_self' || a.hasAttribute('download')) return;
        const url = new URL(a.href, location.href);
        if (url.origin !== location.origin || !/^https?:$/.test(url.protocol)) return;
        if (url.pathname === location.pathname && url.search === location.search && url.hash) return; // in-page anchor
        e.preventDefault();
        html.classList.add('page-out');
        setTimeout(() => { location.href = url.href; }, 220);
    });
}

/** Accessible, honest forms: described fields, flagged errors, and a busy state on submit. */
function forms() {
    let n = 0;
    document.querySelectorAll('.hint, .error').forEach((note) => {
        const field = note.closest('div')?.querySelector('input, select, textarea');
        if (!field) return;
        note.id ||= `note-${++n}`;
        field.setAttribute('aria-describedby', [field.getAttribute('aria-describedby'), note.id].filter(Boolean).join(' '));
        if (note.classList.contains('error')) field.setAttribute('aria-invalid', 'true');
    });
    // Land on the first problem after a failed submit, instead of making the reader hunt for it.
    const firstInvalid = document.querySelector('[aria-invalid="true"]');
    if (firstInvalid && !reduced) { firstInvalid.scrollIntoView({ block: 'center' }); firstInvalid.focus({ preventScroll: true }); }

    document.querySelectorAll('form[method="post" i]').forEach((form) => {
        form.addEventListener('submit', () => {
            const button = form.querySelector('button[type="submit"], button:not([type])');
            if (!button || button.disabled) return;
            button.setAttribute('aria-busy', 'true');
            button.dataset.label = button.textContent;
            button.textContent = button.dataset.busyLabel || 'Sending…';
            // Disable a tick later so the button's own value still goes with the request.
            setTimeout(() => { button.disabled = true; }, 0);
        });
        // Back/forward cache: restore the button if the page is shown again.
        addEventListener('pageshow', () => {
            form.querySelectorAll('button[aria-busy="true"]').forEach((b) => { b.disabled = false; b.removeAttribute('aria-busy'); if (b.dataset.label) b.textContent = b.dataset.label; });
        });
    });
}
