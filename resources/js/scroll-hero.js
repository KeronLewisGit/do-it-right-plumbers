/**
 * Scroll-scrubbed hero: a tall section pins a full-viewport stage, and the page's scroll position
 * drives the choreography instead of a timeline.
 *
 *  - The backdrop starts as a soft blur of brand-coloured light (blur + colour wash + slight zoom)
 *    and comes into sharp focus over the first two thirds of the scroll.
 *  - If the backdrop is a <video>, its playhead is scrubbed to the scroll position (eased, so fast
 *    scrolling never stutters). Anything else (the 3D pipe orbit, or a plain <img>) just sharpens, and
 *    follows the scroll through `onProgress`.
 *  - The headline block fades and lifts away in the final stretch; the "scroll" hint hides as soon
 *    as the reader starts moving.
 *  - `onProgress(p)` lets other parts of the page follow along (the pipe schematic assembles to it).
 *
 * The frame loop only runs while the hero is on screen, and prefers-reduced-motion gets a static
 * stage from the CSS with no script involvement.
 */

const clamp = (v, min, max) => Math.min(max, Math.max(min, v));
const lerp = (a, b, t) => a + (b - a) * t;

export function mountScrollHero(hero, { onProgress } = {}) {
    const media = hero.querySelector('[data-hero-media]');
    const wash = hero.querySelector('[data-hero-wash]');
    const content = hero.querySelector('[data-hero-content]');
    const hint = hero.querySelector('[data-hero-hint-scroll]');
    const video = media?.tagName === 'VIDEO' ? media : null;
    if (!media || !content || matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    let videoReady = false, playhead = 0, running = false, raf = 0, last = -1;
    if (video) {
        video.addEventListener('loadedmetadata', () => { videoReady = true; }, { once: true });
        video.load();
    }

    /** 0 at the top of the page, 1 once the stage is about to unpin. */
    const progress = () => {
        const total = hero.offsetHeight - window.innerHeight;
        return total <= 0 ? 1 : clamp(-hero.getBoundingClientRect().top / total, 0, 1);
    };

    function frame() {
        if (!running) return;
        const p = progress();

        if (video && videoReady && video.duration) {
            playhead = lerp(playhead, p * Math.max(0, video.duration - 0.08), 0.14);
            if (Math.abs(playhead - video.currentTime) > 0.01) {
                try { video.currentTime = playhead; } catch { /* not seekable yet */ }
            }
        }

        // Nothing else changes unless the scroll position did.
        if (p !== last) {
            last = p;
            const focus = clamp(p * 1.45, 0, 1);
            media.style.filter = `blur(${((1 - focus) * 26).toFixed(2)}px) saturate(${(1.15 - focus * 0.15).toFixed(3)})`;
            media.style.transform = `scale(${(1.12 - focus * 0.12).toFixed(4)})`;
            if (wash) wash.style.opacity = (1 - focus).toFixed(3);

            const fade = clamp((p - 0.55) / 0.4, 0, 1);
            content.style.opacity = (1 - fade * 0.9).toFixed(3);
            content.style.transform = `translateY(${(-fade * 60).toFixed(1)}px)`;
            if (hint) hint.style.opacity = p > 0.04 ? '0' : '';
            onProgress?.(p);
        }
        raf = requestAnimationFrame(frame);
    }

    const start = () => { if (!running) { running = true; raf = requestAnimationFrame(frame); } };
    const stop = () => { running = false; cancelAnimationFrame(raf); };
    new IntersectionObserver(([e]) => (e.isIntersecting ? start() : stop())).observe(hero);
    document.addEventListener('visibilitychange', () => (document.hidden ? stop() : start()));
}
