<?php if (isset($component)) { $__componentOriginal7651faf8e4a1e278424aad70c82de3ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7651faf8e4a1e278424aad70c82de3ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.layout','data' => ['title' => 'Team']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Team']); ?>
     <?php $__env->slot('actions', null, []); ?> <a href="<?php echo e(route('admin.team.create')); ?>" class="btn-teal btn-sm">Add member</a> <?php $__env->endSlot(); ?>
    <div class="card overflow-x-auto p-0"><table class="table"><thead><tr><th></th><th>Name</th><th>Title</th><th>Flags</th><th>Order</th><th></th></tr></thead><tbody>
        <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><tr><td class="w-14"><img src="<?php echo e($m->photoUrl()); ?>" alt="" class="size-10 rounded-full object-cover"></td><td class="font-semibold"><?php echo e($m->name); ?></td><td class="text-stone"><?php echo e($m->title); ?></td><td class="space-x-1"><?php if($m->is_technician): ?><span class="chip tone-teal">Dentist</span><?php endif; ?> <?php if($m->accepts_bookings): ?><span class="chip tone-blue">Bookable</span><?php endif; ?> <?php if (! ($m->active)): ?><span class="chip tone-slate">Hidden</span><?php endif; ?></td><td><?php echo e($m->sort); ?></td><td class="text-right whitespace-nowrap"><a href="<?php echo e(route('admin.team.edit', $m)); ?>" class="btn-light btn-sm">Edit</a> <form method="post" action="<?php echo e(route('admin.team.destroy', $m)); ?>" class="inline" onsubmit="return confirm('Remove <?php echo e($m->name); ?>?')"><?php echo csrf_field(); ?> <?php echo method_field('delete'); ?><button class="btn-light btn-sm text-rust">Remove</button></form></td></tr><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/admin/team/index.blade.php ENDPATH**/ ?>