<?php if (isset($component)) { $__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.layout','data' => ['title' => $post->title,'description' => $post->excerpt]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post->title),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post->excerpt)]); ?>
<article class="wrap max-w-3xl py-16 lg:py-24">
    <a href="<?php echo e(route('blog')); ?>" class="link-arrow text-stone"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'arrow','class' => 'rotate-180']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'arrow','class' => 'rotate-180']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?> All tips</a>
    <p class="eyebrow mt-8"><?php echo e($post->category); ?> · <?php echo e($post->readingMinutes()); ?> min read</p>
    <h1 class="h-display mt-4"><?php echo e($post->title); ?></h1>
    <?php if($post->excerpt): ?><p class="lede mt-5"><?php echo e($post->excerpt); ?></p><?php endif; ?>
    <p class="mt-6 text-xs font-semibold uppercase tracking-wider text-stone"><?php echo e($post->published_at?->format('F j, Y') ?? 'Draft'); ?> · Do It Right Plumbers</p>
    <?php if($post->cover_image): ?><div class="frame mt-10 aspect-[16/9]"><img src="<?php echo e($post->coverUrl()); ?>" alt="" class="h-full w-full object-cover"></div><?php endif; ?>
    <div class="prose-site mt-10 text-lg"><?php echo $post->body; ?></div>
    <div class="mt-12 rounded-3xl bg-sand p-8"><p class="font-display text-2xl font-semibold">Sound familiar?</p><p class="mt-2 text-sm text-stone">Book a $49 diagnostic or send us a message. We would rather answer a question now than fix a flood later.</p><div class="mt-5 flex flex-wrap gap-3"><a href="<?php echo e(route('book')); ?>" class="btn-teal">Book online</a><a href="<?php echo e(route('contact')); ?>" class="btn-ghost">Ask a question</a></div></div>
</article>
<?php if($related->isNotEmpty()): ?>
<section class="wrap pb-24"><p class="eyebrow">More in <?php echo e($post->category); ?></p><div class="mt-6 grid gap-6 md:grid-cols-3"><?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><a href="<?php echo e(route('blog.show', $r)); ?>" class="group"><div class="frame aspect-[16/10] bg-sand"><img src="<?php echo e($r->coverUrl()); ?>" alt="" class="h-full w-full object-cover" loading="lazy"></div><h2 class="mt-3 font-display text-xl font-semibold group-hover:text-teal-deep"><?php echo e($r->title); ?></h2></a><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div></section>
<?php endif; ?>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/site/post.blade.php ENDPATH**/ ?>