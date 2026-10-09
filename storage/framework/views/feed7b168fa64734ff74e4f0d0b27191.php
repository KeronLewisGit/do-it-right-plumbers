<?php if (isset($component)) { $__componentOriginal7651faf8e4a1e278424aad70c82de3ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7651faf8e4a1e278424aad70c82de3ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.layout','data' => ['title' => 'Jobs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Jobs']); ?>
     <?php $__env->slot('actions', null, []); ?> <a href="<?php echo e(route('admin.calendar')); ?>" class="btn-light btn-sm">Calendar</a><a href="<?php echo e(route('admin.appointments.create')); ?>" class="btn-teal btn-sm">New job</a> <?php $__env->endSlot(); ?>
    <form class="mb-5 flex flex-wrap gap-2">
        <input name="q" value="<?php echo e(request('q')); ?>" placeholder="Search name, phone, email, reference" class="input input-sm max-w-xs">
        <select name="status" class="input input-sm max-w-40"><option value="">Any status</option><?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($k); ?>" <?php if(request('status') === $k): echo 'selected'; endif; ?>><?php echo e($v); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select>
        <select name="provider" class="input input-sm max-w-48"><option value="">Any technician</option><?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($p->id); ?>" <?php if((int) request('provider') === $p->id): echo 'selected'; endif; ?>><?php echo e($p->name); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select>
        <select name="range" class="input input-sm max-w-36"><option value="upcoming">Upcoming</option><option value="past" <?php if(request('range') === 'past'): echo 'selected'; endif; ?>>Past</option></select>
        <button class="btn-navy btn-sm">Filter</button>
    </form>
    <div class="card overflow-x-auto p-0"><table class="table min-w-[800px]"><thead><tr><th>Window</th><th>Customer</th><th>Job</th><th>Technician</th><th>Source</th><th>Status</th><th></th></tr></thead><tbody>
        <?php $__empty_1 = true; $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><tr><td class="whitespace-nowrap"><span class="font-semibold"><?php echo e($a->starts_at->format('D j M')); ?></span><span class="block text-xs text-stone"><?php echo e($a->starts_at->format('g:i A')); ?> · <?php echo e($a->durationMinutes()); ?> min</span></td><td><a href="<?php echo e(route('admin.customers.show', $a->customer)); ?>" class="font-semibold hover:text-teal-deep"><?php echo e($a->customer->fullName()); ?></a><span class="block text-xs text-stone"><?php echo e($a->customer->phone); ?></span></td><td><?php echo e($a->type?->name ?? '—'); ?></td><td><?php echo e($a->provider?->name ?? '—'); ?></td><td class="text-xs text-stone"><?php echo e(ucfirst($a->source)); ?></td><td><?php if (isset($component)) { $__componentOriginal9383433c9194439a213c031c55720455 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9383433c9194439a213c031c55720455 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.status','data' => ['status' => $a->status]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($a->status)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9383433c9194439a213c031c55720455)): ?>
<?php $attributes = $__attributesOriginal9383433c9194439a213c031c55720455; ?>
<?php unset($__attributesOriginal9383433c9194439a213c031c55720455); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9383433c9194439a213c031c55720455)): ?>
<?php $component = $__componentOriginal9383433c9194439a213c031c55720455; ?>
<?php unset($__componentOriginal9383433c9194439a213c031c55720455); ?>
<?php endif; ?></td><td class="text-right"><a href="<?php echo e(route('admin.appointments.show', $a)); ?>" class="btn-light btn-sm">Open</a></td></tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><tr><td colspan="7" class="text-stone">No jobs match.</td></tr><?php endif; ?>
    </tbody></table></div>
    <div class="mt-5"><?php echo e($appointments->links()); ?></div>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/admin/appointments/index.blade.php ENDPATH**/ ?>