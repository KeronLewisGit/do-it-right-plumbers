<?php if (isset($component)) { $__componentOriginal7651faf8e4a1e278424aad70c82de3ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7651faf8e4a1e278424aad70c82de3ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.layout','data' => ['title' => 'Booking types']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Booking types']); ?>
     <?php $__env->slot('actions', null, []); ?> <a href="<?php echo e(route('admin.appointment-types.create')); ?>" class="btn-teal btn-sm">Add type</a> <?php $__env->endSlot(); ?>
    <p class="mb-4 text-sm text-stone">These are the options customers choose from when booking online.</p>
    <div class="card overflow-x-auto p-0"><table class="table"><thead><tr><th>Name</th><th>Duration</th><th>Provider</th><th>Flags</th><th>Order</th><th></th></tr></thead><tbody>
        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><tr><td><span class="font-semibold"><?php echo e($t->name); ?></span><span class="block text-xs text-stone"><?php echo e($t->description); ?></span></td><td><?php echo e($t->duration_minutes); ?> min</td><td><?php echo e($t->provider?->name ?? 'Any'); ?></td><td class="space-x-1"><?php if($t->is_free): ?><span class="chip tone-green">Free</span><?php endif; ?> <?php if($t->is_virtual): ?><span class="chip tone-blue">Virtual</span><?php endif; ?> <?php if (! ($t->active)): ?><span class="chip tone-slate">Hidden</span><?php endif; ?></td><td><?php echo e($t->sort); ?></td><td class="text-right whitespace-nowrap"><a href="<?php echo e(route('admin.appointment-types.edit', $t)); ?>" class="btn-light btn-sm">Edit</a> <form method="post" action="<?php echo e(route('admin.appointment-types.destroy', $t)); ?>" class="inline" onsubmit="return confirm('Remove this type? Existing appointments keep their details.')"><?php echo csrf_field(); ?> <?php echo method_field('delete'); ?><button class="btn-light btn-sm text-rust">Remove</button></form></td></tr><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody></table></div>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/admin/types/index.blade.php ENDPATH**/ ?>