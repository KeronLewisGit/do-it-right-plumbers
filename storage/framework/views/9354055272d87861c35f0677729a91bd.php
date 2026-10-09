<?php if (isset($component)) { $__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.layout','data' => ['title' => 'Plumbing Tips','description' => 'Plain-English plumbing advice from Do It Right Plumbers: water heaters, repipes, drains, leaks and what to do before you call.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Plumbing Tips','description' => 'Plain-English plumbing advice from Do It Right Plumbers: water heaters, repipes, drains, leaks and what to do before you call.']); ?>
<section class="wrap py-16 lg:py-24">
    <?php if (isset($component)) { $__componentOriginal54720f4a233a99e850f489b669118ff4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54720f4a233a99e850f489b669118ff4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.heading','data' => ['eyebrow' => 'Plumbing tips','title' => 'Straight talk <em class=\'italic font-medium text-teal-deep\'>from the truck</em>.','lede' => 'What our technicians tell customers at the kitchen table, written down. Read it before you call and you might not need to.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Plumbing tips','title' => 'Straight talk <em class=\'italic font-medium text-teal-deep\'>from the truck</em>.','lede' => 'What our technicians tell customers at the kitchen table, written down. Read it before you call and you might not need to.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54720f4a233a99e850f489b669118ff4)): ?>
<?php $attributes = $__attributesOriginal54720f4a233a99e850f489b669118ff4; ?>
<?php unset($__attributesOriginal54720f4a233a99e850f489b669118ff4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54720f4a233a99e850f489b669118ff4)): ?>
<?php $component = $__componentOriginal54720f4a233a99e850f489b669118ff4; ?>
<?php unset($__componentOriginal54720f4a233a99e850f489b669118ff4); ?>
<?php endif; ?>
    <div class="mt-8 flex flex-wrap gap-2"><a href="<?php echo e(route('blog')); ?>" class="chip <?php echo e(request('category') ? 'bg-sand text-navy-soft' : 'bg-navy text-cream'); ?>">All</a><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><a href="<?php echo e(route('blog', ['category' => $c])); ?>" class="chip <?php echo e(request('category') === $c ? 'bg-navy text-cream' : 'bg-sand text-navy-soft hover:bg-teal-soft'); ?>"><?php echo e($c); ?></a><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div>
</section>
<?php if($featured): ?>
<section class="wrap pb-12"><a href="<?php echo e(route('blog.show', $featured)); ?>" class="group grid overflow-hidden rounded-[2rem] bg-white ring-1 ring-line lg:grid-cols-2"><div class="relative min-h-72"><img src="<?php echo e($featured->coverUrl()); ?>" alt="" class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105"></div><div class="p-8 sm:p-12"><p class="eyebrow">Featured · <?php echo e($featured->category); ?></p><h2 class="h-section mt-4 group-hover:text-teal-deep"><?php echo e($featured->title); ?></h2><p class="mt-4 text-stone"><?php echo e($featured->excerpt); ?></p><p class="mt-6 text-xs font-semibold uppercase tracking-wider text-stone"><?php echo e($featured->published_at->format('F j, Y')); ?> · <?php echo e($featured->readingMinutes()); ?> min read</p></div></a></section>
<?php endif; ?>
<section class="wrap pb-24">
    <div class="grid gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3">
        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php if($featured && $p->is($featured)) continue; ?>
            <a href="<?php echo e(route('blog.show', $p)); ?>" class="group reveal"><div class="frame aspect-[16/10] bg-sand"><img src="<?php echo e($p->coverUrl()); ?>" alt="" class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy"></div><p class="mt-4 text-xs font-semibold uppercase tracking-wider text-teal-deep"><?php echo e($p->category); ?> · <?php echo e($p->readingMinutes()); ?> min</p><h2 class="mt-2 font-display text-2xl font-semibold leading-tight group-hover:text-teal-deep"><?php echo e($p->title); ?></h2><p class="mt-2 text-sm text-stone"><?php echo e($p->excerpt); ?></p></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><p class="text-stone">No tips yet.</p><?php endif; ?>
    </div>
    <div class="mt-12"><?php echo e($posts->links()); ?></div>
</section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519)): ?>
<?php $attributes = $__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519; ?>
<?php unset($__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519)): ?>
<?php $component = $__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519; ?>
<?php unset($__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519); ?>
<?php endif; ?>
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/site/blog.blade.php ENDPATH**/ ?>