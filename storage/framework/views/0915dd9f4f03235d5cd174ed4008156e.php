<?php if (isset($component)) { $__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.layout','data' => ['title' => 'Booking received']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Booking received']); ?>
<section class="wrap max-w-2xl py-20 text-center lg:py-28">
    <span class="mx-auto inline-flex size-16 items-center justify-center rounded-full bg-sage text-sage-deep"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'check','class' => 'size-8']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'check','class' => 'size-8']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?></span>
    <p class="eyebrow mt-8 justify-center">Request received</p>
    <h1 class="h-display mt-4">Thanks, <?php echo e($appointment->customer->first_name); ?>.</h1>
    <p class="lede mt-5">We have your request for <strong class="text-navy"><?php echo e($appointment->type?->name ?? 'a service visit'); ?></strong> on <strong class="text-navy"><?php echo e($appointment->starts_at->format('l, F j')); ?></strong> between <strong class="text-navy"><?php echo e($appointment->starts_at->format('g:i A')); ?> and <?php echo e($appointment->ends_at->format('g:i A')); ?></strong>. The office will confirm by email shortly.</p>
    <div class="card mt-10 text-left"><dl class="grid gap-4 text-sm sm:grid-cols-2"><div><dt class="label">Job reference</dt><dd class="font-mono font-semibold"><?php echo e($appointment->reference); ?></dd></div><div><dt class="label">Status</dt><dd><span class="chip tone-amber">Pending confirmation</span></dd></div><div><dt class="label">Service address</dt><dd><?php echo e($appointment->addressLine() ?: '—'); ?></dd></div><div><dt class="label">Need to change it?</dt><dd><a href="<?php echo e($appointment->manageUrl()); ?>" class="font-semibold text-teal-deep hover:underline">Manage this visit</a></dd></div></dl></div>
    <p class="mt-6 text-sm text-stone">Before we arrive: clear the area around the problem, and keep pets in another room. Your technician will text when they are on the way.</p>
    <div class="mt-8 flex flex-wrap justify-center gap-3"><a href="<?php echo e(route('home')); ?>" class="btn-ghost">Back to home</a><a href="<?php echo e(route('blog')); ?>" class="btn-light">Read our tips</a></div>
</section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519)): ?>
<?php $attributes = $__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519; ?>
<?php unset($__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519)): ?>
<?php $component = $__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519; ?>
<?php unset($__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519); ?>
<?php endif; ?>
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/site/book-done.blade.php ENDPATH**/ ?>