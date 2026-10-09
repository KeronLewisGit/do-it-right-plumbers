<?php if (isset($component)) { $__componentOriginal7651faf8e4a1e278424aad70c82de3ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7651faf8e4a1e278424aad70c82de3ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.layout','data' => ['title' => 'Testimonials']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Testimonials']); ?>
     <?php $__env->slot('actions', null, []); ?> <a href="<?php echo e(route('admin.testimonials.create')); ?>" class="btn-teal btn-sm">Add testimonial</a> <?php $__env->endSlot(); ?>
    <div class="card overflow-x-auto p-0"><table class="table"><thead><tr><th>Name</th><th>Quote</th><th>Treatment</th><th>Flags</th><th></th></tr></thead><tbody>
        <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><tr><td class="font-semibold"><?php echo e($t->name); ?></td><td class="max-w-md truncate text-stone"><?php echo e($t->quote); ?></td><td class="text-xs"><?php echo e($t->treatment); ?></td><td class="space-x-1"><?php if($t->featured): ?><span class="chip tone-teal">Home page</span><?php endif; ?> <?php if($t->video_url): ?><span class="chip tone-blue">Video</span><?php endif; ?> <?php if (! ($t->active)): ?><span class="chip tone-slate">Hidden</span><?php endif; ?></td><td class="text-right whitespace-nowrap"><a href="<?php echo e(route('admin.testimonials.edit', $t)); ?>" class="btn-light btn-sm">Edit</a> <form method="post" action="<?php echo e(route('admin.testimonials.destroy', $t)); ?>" class="inline" onsubmit="return confirm('Remove this testimonial?')"><?php echo csrf_field(); ?> <?php echo method_field('delete'); ?><button class="btn-light btn-sm text-rust">Remove</button></form></td></tr><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/admin/testimonials/index.blade.php ENDPATH**/ ?>