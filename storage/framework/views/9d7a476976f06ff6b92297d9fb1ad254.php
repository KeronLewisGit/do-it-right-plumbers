<?php if (isset($component)) { $__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.layout','data' => ['title' => 'Your visit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Your visit']); ?>
<section class="wrap max-w-2xl py-20 lg:py-28">
    <p class="eyebrow">Your visit</p>
    <h1 class="h-display mt-4"><?php echo e($appointment->type?->name ?? 'Service visit'); ?></h1>
    <div class="card mt-8"><dl class="grid gap-5 text-sm sm:grid-cols-2"><div><dt class="label">When</dt><dd class="font-semibold"><?php echo e($appointment->starts_at->format('l, F j, Y')); ?><br>Arrival between <?php echo e($appointment->starts_at->format('g:i A')); ?> and <?php echo e($appointment->ends_at->format('g:i A')); ?></dd></div><div><dt class="label">Status</dt><dd><span class="chip <?php echo e(['pending' => 'tone-amber', 'confirmed' => 'tone-green', 'completed' => 'tone-blue', 'cancelled' => 'tone-red', 'no_show' => 'tone-red'][$appointment->status]); ?>"><?php echo e($appointment->statusName()); ?></span></dd></div><?php if($appointment->provider): ?><div><dt class="label">Technician</dt><dd><?php echo e($appointment->provider->name); ?></dd></div><?php endif; ?><div><dt class="label">Job reference</dt><dd class="font-mono"><?php echo e($appointment->reference); ?></dd></div><div class="sm:col-span-2"><dt class="label">Service address</dt><dd><?php echo e($appointment->addressLine() ?: '—'); ?></dd></div></dl></div>
    <?php if($appointment->isOpen()): ?>
        <div class="card mt-5"><h2 class="font-display text-2xl font-semibold">Need to change it?</h2><p class="mt-2 text-sm text-stone">To move the window, call us on <?php echo e(config('company.phone')); ?> and we will find another one. If you no longer need the visit, cancel below so we can offer the truck to someone else.</p>
            <form method="post" action="<?php echo e(route('book.cancel', $appointment->manage_token)); ?>" class="mt-5 flex flex-col gap-3 sm:flex-row" onsubmit="return confirm('Cancel this visit?')"><?php echo csrf_field(); ?><input name="reason" class="input" placeholder="Reason (optional)"><button class="btn-rust shrink-0">Cancel visit</button></form></div>
    <?php else: ?>
        <div class="mt-6"><a href="<?php echo e(route('book')); ?>" class="btn-teal">Book a new visit</a></div>
    <?php endif; ?>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/site/book-manage.blade.php ENDPATH**/ ?>