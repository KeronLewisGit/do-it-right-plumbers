<?php if (isset($component)) { $__componentOriginal7651faf8e4a1e278424aad70c82de3ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7651faf8e4a1e278424aad70c82de3ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.layout','data' => ['title' => $testimonial->exists ? 'Edit review' : 'Add review']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($testimonial->exists ? 'Edit review' : 'Add review')]); ?>
    <form method="post" action="<?php echo e($testimonial->exists ? route('admin.testimonials.update', $testimonial) : route('admin.testimonials.store')); ?>" class="card grid max-w-3xl gap-4 sm:grid-cols-2"><?php echo csrf_field(); ?> <?php if($testimonial->exists): ?> <?php echo method_field('patch'); ?> <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginala36faa2d443b9f600fa80effd7afe361 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala36faa2d443b9f600fa80effd7afe361 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.field','data' => ['label' => 'Name','name' => 'name','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Name','name' => 'name','required' => true]); ?><input name="name" value="<?php echo e(old('name', $testimonial->name)); ?>" required class="input"> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $attributes = $__attributesOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__attributesOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $component = $__componentOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__componentOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginala36faa2d443b9f600fa80effd7afe361 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala36faa2d443b9f600fa80effd7afe361 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.field','data' => ['label' => 'Service','name' => 'treatment']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Service','name' => 'treatment']); ?><input name="treatment" value="<?php echo e(old('treatment', $testimonial->treatment)); ?>" class="input" placeholder="Whole-house repipe"> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $attributes = $__attributesOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__attributesOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $component = $__componentOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__componentOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginala36faa2d443b9f600fa80effd7afe361 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala36faa2d443b9f600fa80effd7afe361 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.field','data' => ['label' => 'Quote','name' => 'quote','required' => true,'class' => 'sm:col-span-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Quote','name' => 'quote','required' => true,'class' => 'sm:col-span-2']); ?><textarea name="quote" rows="4" required class="input"><?php echo e(old('quote', $testimonial->quote)); ?></textarea> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $attributes = $__attributesOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__attributesOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $component = $__componentOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__componentOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginala36faa2d443b9f600fa80effd7afe361 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala36faa2d443b9f600fa80effd7afe361 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.field','data' => ['label' => 'Rating','name' => 'rating']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Rating','name' => 'rating']); ?><select name="rating" class="input"><?php $__currentLoopData = [5, 4, 3, 2, 1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($r); ?>" <?php if((int) old('rating', $testimonial->rating) === $r): echo 'selected'; endif; ?>><?php echo e($r); ?> stars</option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $attributes = $__attributesOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__attributesOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $component = $__componentOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__componentOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginala36faa2d443b9f600fa80effd7afe361 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala36faa2d443b9f600fa80effd7afe361 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.field','data' => ['label' => 'Source','name' => 'source']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Source','name' => 'source']); ?><input name="source" value="<?php echo e(old('source', $testimonial->source)); ?>" class="input" placeholder="Google"> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $attributes = $__attributesOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__attributesOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $component = $__componentOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__componentOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginala36faa2d443b9f600fa80effd7afe361 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala36faa2d443b9f600fa80effd7afe361 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.field','data' => ['label' => 'Video URL (optional)','name' => 'video_url','hint' => 'Instagram reel or YouTube link. Turns this into a video card.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Video URL (optional)','name' => 'video_url','hint' => 'Instagram reel or YouTube link. Turns this into a video card.']); ?><input name="video_url" value="<?php echo e(old('video_url', $testimonial->video_url)); ?>" class="input"> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $attributes = $__attributesOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__attributesOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $component = $__componentOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__componentOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginala36faa2d443b9f600fa80effd7afe361 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala36faa2d443b9f600fa80effd7afe361 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.field','data' => ['label' => 'Display order','name' => 'sort']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Display order','name' => 'sort']); ?><input name="sort" type="number" min="0" value="<?php echo e(old('sort', $testimonial->sort)); ?>" class="input"> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $attributes = $__attributesOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__attributesOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $component = $__componentOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__componentOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
        <div class="space-y-2 text-sm sm:col-span-2"><label class="flex items-center gap-2"><input type="checkbox" name="featured" value="1" class="check" <?php if(old('featured', $testimonial->featured)): echo 'checked'; endif; ?>>Show on home page</label><label class="flex items-center gap-2"><input type="checkbox" name="active" value="1" class="check" <?php if(old('active', $testimonial->active)): echo 'checked'; endif; ?>>Visible</label></div>
        <div class="flex gap-2 sm:col-span-2"><button class="btn-teal">Save</button><a href="<?php echo e(route('admin.testimonials.index')); ?>" class="btn-light">Cancel</a></div>
    </form>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/admin/testimonials/form.blade.php ENDPATH**/ ?>