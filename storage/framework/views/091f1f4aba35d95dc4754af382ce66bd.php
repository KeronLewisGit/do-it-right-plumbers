<?php if (isset($component)) { $__componentOriginal7651faf8e4a1e278424aad70c82de3ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7651faf8e4a1e278424aad70c82de3ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.layout','data' => ['title' => 'Services']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Services']); ?>
     <?php $__env->slot('actions', null, []); ?> <a href="<?php echo e(route('admin.services.create')); ?>" class="btn-teal btn-sm">Add service</a> <?php $__env->endSlot(); ?>
    <div class="card overflow-x-auto p-0"><table class="table"><thead><tr><th>Service</th><th>Treatments</th><th>FAQs</th><th>Flags</th><th>Order</th><th></th></tr></thead><tbody>
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><tr><td><span class="font-semibold"><?php echo e($s->name); ?></span><span class="block text-xs text-stone">/services/<?php echo e($s->slug); ?></span></td><td><?php echo e(count($s->treatments ?? [])); ?></td><td><?php echo e(count($s->faqs ?? [])); ?></td><td class="space-x-1"><?php if($s->featured): ?><span class="chip tone-teal">Home page</span><?php endif; ?> <?php if (! ($s->active)): ?><span class="chip tone-slate">Hidden</span><?php endif; ?></td><td><?php echo e($s->sort); ?></td><td class="text-right whitespace-nowrap"><a href="<?php echo e(route('services.show', $s)); ?>" target="_blank" class="btn-light btn-sm">View</a> <a href="<?php echo e(route('admin.services.edit', $s)); ?>" class="btn-light btn-sm">Edit</a> <form method="post" action="<?php echo e(route('admin.services.destroy', $s)); ?>" class="inline" onsubmit="return confirm('Remove this service?')"><?php echo csrf_field(); ?> <?php echo method_field('delete'); ?><button class="btn-light btn-sm text-rust">Remove</button></form></td></tr><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/admin/services/index.blade.php ENDPATH**/ ?>