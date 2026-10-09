<?php if (isset($component)) { $__componentOriginal7651faf8e4a1e278424aad70c82de3ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7651faf8e4a1e278424aad70c82de3ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.layout','data' => ['title' => 'Customers']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Customers']); ?>
     <?php $__env->slot('actions', null, []); ?> <a href="<?php echo e(route('admin.customers.create')); ?>" class="btn-teal btn-sm">Add customer</a> <?php $__env->endSlot(); ?>
    <form class="mb-5 flex gap-2"><input name="q" value="<?php echo e(request('q')); ?>" placeholder="Search name, phone or email" class="input input-sm max-w-sm"><button class="btn-navy btn-sm">Search</button></form>
    <div class="card overflow-x-auto p-0"><table class="table min-w-[700px]"><thead><tr><th>Name</th><th>Contact</th><th>Jobs</th><th>Last / next</th><th>Source</th><th></th></tr></thead><tbody>
        <?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><tr><td><a href="<?php echo e(route('admin.customers.show', $p)); ?>" class="font-semibold hover:text-teal-deep"><?php echo e($p->fullName()); ?></a><?php if($p->marketing_opt_in): ?><span class="ml-2 chip tone-teal">opted in</span><?php endif; ?></td><td class="text-xs text-stone"><?php echo e($p->phone); ?><br><?php echo e($p->email); ?></td><td><?php echo e($p->appointments_count); ?></td><td class="text-xs text-stone"><?php echo e($p->appointments_max_starts_at ? \Illuminate\Support\Carbon::parse($p->appointments_max_starts_at)->format('j M Y') : '—'); ?></td><td class="text-xs text-stone"><?php echo e(ucfirst($p->source)); ?></td><td class="text-right"><a href="<?php echo e(route('admin.customers.show', $p)); ?>" class="btn-light btn-sm">Open</a></td></tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><tr><td colspan="6" class="text-stone">No customers yet.</td></tr><?php endif; ?>
    </tbody></table></div>
    <div class="mt-5"><?php echo e($customers->links()); ?></div>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/admin/customers/index.blade.php ENDPATH**/ ?>