<?php ($co = config('company')); ?>
<footer class="mt-24 bg-navy text-cream pipes-bg-light">
    <div class="wrap grid gap-12 py-16 lg:grid-cols-12">
        <div class="lg:col-span-4">
            <div class="flex items-center gap-3"><img src="<?php echo e(asset('images/logo.png')); ?>" alt="<?php echo e($co['name']); ?>" class="size-14 rounded-full ring-2 ring-teal"><span class="leading-none"><span class="block font-display text-2xl font-bold">Do It Right</span><span class="mt-1 block text-[10px] font-extrabold uppercase tracking-[0.28em] text-teal">Plumbers</span></span></div>
            <p class="mt-5 max-w-sm text-sm leading-relaxed text-cream/70"><?php echo e($co['strap']); ?>. Repipes, water heaters, drains, leaks and water filtration for homes across Orange County, with upfront pricing and a simple promise: <?php echo e(strtolower($co['tagline'])); ?></p>
            <div class="mt-6 flex flex-wrap gap-2">
                <?php $__currentLoopData = $co['social']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><a href="<?php echo e($url); ?>" target="_blank" rel="noopener" class="inline-flex size-10 items-center justify-center rounded-full ring-1 ring-white/15 transition hover:bg-teal hover:text-navy hover:ring-teal" aria-label="<?php echo e(ucfirst($name)); ?>"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => $name,'class' => 'size-4.5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'class' => 'size-4.5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?></a><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php if($co['license']): ?><p class="mt-6 text-xs text-cream/50"><?php echo e($co['license']); ?> · Licensed, bonded and insured in California.</p><?php else: ?><p class="mt-6 text-xs text-cream/50">Licensed, bonded and insured in California.</p><?php endif; ?>
        </div>
        <div class="grid gap-10 sm:grid-cols-3 lg:col-span-5">
            <div><p class="eyebrow mb-4 text-teal">Services</p><ul class="space-y-2.5 text-sm text-cream/80"><?php $__currentLoopData = [['repipes', 'Whole-house repipes'], ['services.show', 'Water heaters', 'water-heaters'], ['services.show', 'Drains & sewer', 'drains-and-sewer'], ['services.show', 'Leak detection', 'leak-detection'], ['services.show', 'Water filtration', 'water-filtration'], ['emergency', 'Emergency plumbing']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li><a href="<?php echo e(route($l[0], $l[2] ?? [])); ?>" class="hover:text-teal"><?php echo e($l[1]); ?></a></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul></div>
            <div><p class="eyebrow mb-4 text-teal">Company</p><ul class="space-y-2.5 text-sm text-cream/80"><?php $__currentLoopData = [['about', 'About us'], ['team', 'Our team'], ['reviews', 'Reviews'], ['areas', 'Service areas'], ['blog', 'Plumbing tips'], ['contact', 'Contact'], ['book', 'Book online']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$r, $l]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li><a href="<?php echo e(route($r)); ?>" class="hover:text-teal"><?php echo e($l); ?></a></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul></div>
            <div><p class="eyebrow mb-4 text-teal">Hours</p><ul class="space-y-2.5 text-sm text-cream/80"><?php $__currentLoopData = app(\App\Services\Availability::class)->hoursGrouped(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li class="flex justify-between gap-3"><span><?php echo e($g['days']); ?></span><span class="<?php echo e($g['hours'] === 'Closed' ? 'text-cream/50' : ''); ?>"><?php echo e($g['hours']); ?></span></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><li class="flex justify-between gap-3 text-teal"><span>Emergencies</span><span>24/7 by phone</span></li></ul><address class="mt-4 text-sm not-italic text-cream/80"><p><?php echo e($co['address']['line1']); ?><br><?php echo e($co['address']['line2']); ?></p><p class="mt-2"><a href="tel:<?php echo e($co['phone_href']); ?>" class="hover:text-teal"><?php echo e($co['phone']); ?></a><br><a href="mailto:<?php echo e($co['email']); ?>" class="hover:text-teal"><?php echo e($co['email']); ?></a></p></address></div>
        </div>
        <div class="lg:col-span-3">
            <p class="eyebrow mb-4 text-teal">Seasonal tips & offers</p>
            <p class="text-sm text-cream/70">A short email when it matters: water heater checks before winter, drain care before the holidays, and the occasional coupon. No spam, ever.</p>
            <?php if(session('newsletter')): ?><p class="mt-4 rounded-xl bg-teal/15 px-4 py-3 text-sm font-semibold text-teal"><?php echo e(session('newsletter')); ?></p><?php else: ?>
            <form method="post" action="<?php echo e(route('newsletter.store')); ?>" class="mt-4 flex gap-2"><?php echo csrf_field(); ?><input type="text" name="website" tabindex="-1" autocomplete="off" class="hidden"><label for="nl-email" class="sr-only">Email</label><input id="nl-email" name="email" type="email" required placeholder="you@email.com" class="input bg-white/10 text-cream ring-white/15 placeholder:text-cream/40 focus:ring-teal"><button class="btn-teal shrink-0 px-4">Join</button></form>
            <?php if(isset($errors) && $errors->has('email')): ?><p class="error text-teal"><?php echo e($errors->first('email')); ?></p><?php endif; ?>
            <?php endif; ?>
            <a href="<?php echo e($co['review_url']); ?>" target="_blank" rel="noopener" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-cream/80 hover:text-teal"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'star','class' => 'size-4 fill-current text-brass']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'star','class' => 'size-4 fill-current text-brass']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>Leave us a Google review</a>
        </div>
    </div>
    <div class="border-t border-white/10">
        <div class="wrap flex flex-col gap-3 py-6 text-xs text-cream/50 sm:flex-row sm:items-center sm:justify-between">
            <p>© <?php echo e(now()->year); ?> <?php echo e($co['legal']); ?> · <?php echo e($co['address']['line1']); ?>, <?php echo e($co['address']['line2']); ?></p>
            <div class="flex gap-5"><a href="<?php echo e(route('privacy')); ?>" class="hover:text-teal">Privacy policy</a><a href="<?php echo e(route('admin.login')); ?>" class="hover:text-teal">Staff login</a></div>
        </div>
    </div>
</footer>
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/components/site/footer.blade.php ENDPATH**/ ?>