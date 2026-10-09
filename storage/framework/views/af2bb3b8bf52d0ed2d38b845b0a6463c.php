<?php if (isset($component)) { $__componentOriginal7651faf8e4a1e278424aad70c82de3ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7651faf8e4a1e278424aad70c82de3ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.layout','data' => ['title' => 'Calendar']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Calendar']); ?>
     <?php $__env->slot('actions', null, []); ?> <a href="<?php echo e(route('admin.calendar', ['week' => $week->copy()->subWeek()->toDateString()])); ?>" class="btn-light btn-sm">← Prev</a><a href="<?php echo e(route('admin.calendar')); ?>" class="btn-light btn-sm">This week</a><a href="<?php echo e(route('admin.calendar', ['week' => $week->copy()->addWeek()->toDateString()])); ?>" class="btn-light btn-sm">Next →</a><a href="<?php echo e(route('admin.appointments.create')); ?>" class="btn-teal btn-sm">New job</a> <?php $__env->endSlot(); ?>
    <p class="mb-4 text-sm text-stone">Week of <?php echo e($week->format('j F Y')); ?></p>
    <div class="grid gap-3 md:grid-cols-7">
        <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php ($closed = ($hours[strtolower($d->format('D'))] ?? null) === null); ?>
            <div class="rounded-2xl <?php echo e($d->isToday() ? 'bg-teal-soft ring-1 ring-teal' : 'bg-white ring-1 ring-line'); ?> <?php echo e($closed ? 'opacity-60' : ''); ?> p-3 min-h-40">
                <p class="text-[11px] font-semibold uppercase tracking-wider text-stone"><?php echo e($d->format('D')); ?></p><p class="font-display text-2xl"><?php echo e($d->format('j')); ?></p>
                <?php if($closed): ?><p class="mt-2 text-xs text-stone">Closed</p><?php endif; ?>
                <ul class="mt-2 space-y-1.5"><?php $__currentLoopData = $byDay[$d->toDateString()] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li><a href="<?php echo e(route('admin.appointments.show', $a)); ?>" class="block rounded-lg px-2 py-1.5 text-xs ring-1 <?php echo e(['pending' => 'bg-amber-50 ring-amber-200', 'confirmed' => 'bg-emerald-50 ring-emerald-200', 'completed' => 'bg-sky-50 ring-sky-200'][$a->status] ?? 'bg-sand ring-line'); ?> hover:ring-teal"><span class="font-semibold"><?php echo e($a->starts_at->format('g:i A')); ?></span> <?php echo e($a->customer->fullName()); ?><span class="block truncate text-stone"><?php echo e($a->type?->name); ?></span></a></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7651faf8e4a1e278424aad70c82de3ba)): ?>
<?php $attributes = $__attributesOriginal7651faf8e4a1e278424aad70c82de3ba; ?>
<?php unset($__attributesOriginal7651faf8e4a1e278424aad70c82de3ba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7651faf8e4a1e278424aad70c82de3ba)): ?>
<?php $component = $__componentOriginal7651faf8e4a1e278424aad70c82de3ba; ?>
<?php unset($__componentOriginal7651faf8e4a1e278424aad70c82de3ba); ?>
<?php endif; ?>
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/admin/appointments/calendar.blade.php ENDPATH**/ ?>