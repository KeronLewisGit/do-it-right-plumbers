<?php if (isset($component)) { $__componentOriginal7651faf8e4a1e278424aad70c82de3ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7651faf8e4a1e278424aad70c82de3ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.layout','data' => ['title' => $customer->fullName()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($customer->fullName())]); ?>
     <?php $__env->slot('actions', null, []); ?> <a href="<?php echo e(route('admin.appointments.create', ['customer' => $customer->id])); ?>" class="btn-teal btn-sm">Book a job</a><a href="<?php echo e(route('admin.customers.edit', $customer)); ?>" class="btn-light btn-sm">Edit</a> <?php $__env->endSlot(); ?>
    <div class="grid gap-6 lg:grid-cols-3">
        <section class="card text-sm"><dl class="space-y-3"><div><dt class="label">Phone</dt><dd><?php if($customer->phone): ?><a href="tel:<?php echo e($customer->phone); ?>" class="font-semibold"><?php echo e($customer->phone); ?></a><?php else: ?> —<?php endif; ?></dd></div><div><dt class="label">Email</dt><dd><?php if($customer->email): ?><a href="mailto:<?php echo e($customer->email); ?>" class="font-semibold"><?php echo e($customer->email); ?></a><?php else: ?> —<?php endif; ?></dd></div><div><dt class="label">Address</dt><dd><?php echo e($customer->address ?: '—'); ?></dd></div><div><dt class="label">Source</dt><dd><?php echo e(ucfirst($customer->source)); ?> · since <?php echo e($customer->created_at->format('j M Y')); ?></dd></div><div><dt class="label">Marketing</dt><dd><?php echo e($customer->marketing_opt_in ? 'Opted in' : 'Not opted in'); ?></dd></div></dl><?php if($customer->notes): ?><div class="mt-4 rounded-xl bg-sand p-3 whitespace-pre-line"><?php echo e($customer->notes); ?></div><?php endif; ?></section>
        <section class="card p-0 lg:col-span-2"><div class="px-5 py-4"><h2 class="font-display text-2xl">Jobs</h2></div><table class="table"><thead><tr><th>Window</th><th>Job</th><th>Technician</th><th>Status</th></tr></thead><tbody><?php $__empty_1 = true; $__currentLoopData = $customer->appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><tr><td><a href="<?php echo e(route('admin.appointments.show', $a)); ?>" class="font-semibold hover:text-teal-deep"><?php echo e($a->starts_at->format('D j M Y, g:i A')); ?></a></td><td><?php echo e($a->type?->name); ?></td><td><?php echo e($a->provider?->name ?? '—'); ?></td><td><?php if (isset($component)) { $__componentOriginal9383433c9194439a213c031c55720455 = $component; } ?>
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
<?php endif; ?></td></tr><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><tr><td colspan="4" class="text-stone">No jobs yet.</td></tr><?php endif; ?></tbody></table>
            <?php if($customer->inquiries->isNotEmpty()): ?><div class="border-t border-line px-5 py-4"><h2 class="font-display text-2xl">Quote requests</h2><ul class="mt-3 divide-y divide-line text-sm"><?php $__currentLoopData = $customer->inquiries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li class="py-2"><a href="<?php echo e(route('admin.inquiries.show', $i)); ?>" class="font-semibold hover:text-teal-deep"><?php echo e($i->created_at->format('j M Y')); ?> · <?php echo e($i->service ?: 'General'); ?></a> <?php if (isset($component)) { $__componentOriginal9383433c9194439a213c031c55720455 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9383433c9194439a213c031c55720455 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.status','data' => ['status' => $i->status]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($i->status)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9383433c9194439a213c031c55720455)): ?>
<?php $attributes = $__attributesOriginal9383433c9194439a213c031c55720455; ?>
<?php unset($__attributesOriginal9383433c9194439a213c031c55720455); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9383433c9194439a213c031c55720455)): ?>
<?php $component = $__componentOriginal9383433c9194439a213c031c55720455; ?>
<?php unset($__componentOriginal9383433c9194439a213c031c55720455); ?>
<?php endif; ?><p class="mt-1 line-clamp-2 text-stone"><?php echo e($i->message); ?></p></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul></div><?php endif; ?>
        </section>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/admin/customers/show.blade.php ENDPATH**/ ?>