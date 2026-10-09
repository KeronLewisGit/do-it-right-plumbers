<?php if (isset($component)) { $__componentOriginal7651faf8e4a1e278424aad70c82de3ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7651faf8e4a1e278424aad70c82de3ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.layout','data' => ['title' => 'Journal posts']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Journal posts']); ?>
     <?php $__env->slot('actions', null, []); ?> <a href="<?php echo e(route('admin.posts.create')); ?>" class="btn-teal btn-sm">New post</a> <?php $__env->endSlot(); ?>
    <form class="mb-5 flex gap-2"><input name="q" value="<?php echo e(request('q')); ?>" placeholder="Search titles" class="input input-sm max-w-sm"><button class="btn-navy btn-sm">Search</button></form>
    <div class="card overflow-x-auto p-0"><table class="table"><thead><tr><th>Title</th><th>Category</th><th>Published</th><th></th></tr></thead><tbody>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><tr><td><span class="font-semibold"><?php echo e($p->title); ?></span><?php if($p->featured): ?><span class="ml-2 chip tone-teal">Featured</span><?php endif; ?></td><td><?php echo e($p->category); ?></td><td class="text-xs text-stone"><?php echo e($p->isPublished() ? $p->published_at->format('j M Y') : ($p->published_at ? 'Scheduled '.$p->published_at->format('j M Y') : 'Draft')); ?></td><td class="text-right whitespace-nowrap"><a href="<?php echo e(route('blog.show', $p)); ?>" target="_blank" class="btn-light btn-sm">View</a> <a href="<?php echo e(route('admin.posts.edit', $p)); ?>" class="btn-light btn-sm">Edit</a></td></tr><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody></table></div>
    <div class="mt-5"><?php echo e($posts->links()); ?></div>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/admin/posts/index.blade.php ENDPATH**/ ?>