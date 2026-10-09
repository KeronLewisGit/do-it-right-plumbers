<?php if (isset($component)) { $__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.layout','data' => ['title' => 'Plumbing Services','description' => 'Repipes, water heaters, drain cleaning, sewer, leak detection, water filtration and emergency plumbing across Orange County, CA. Upfront pricing from Do It Right Plumbers.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Plumbing Services','description' => 'Repipes, water heaters, drain cleaning, sewer, leak detection, water filtration and emergency plumbing across Orange County, CA. Upfront pricing from Do It Right Plumbers.']); ?>
<section class="wrap py-16 lg:py-24">
    <?php if (isset($component)) { $__componentOriginal54720f4a233a99e850f489b669118ff4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54720f4a233a99e850f489b669118ff4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.heading','data' => ['eyebrow' => 'Our services','title' => 'Every pipe in the house, <em class=\'italic font-medium text-teal-deep\'>one number to call</em>.','lede' => 'From a dripping faucet to a whole-house repipe. Pick a service to see exactly what is included and what it costs to get us out, or call and talk to a real person in our Orange office.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Our services','title' => 'Every pipe in the house, <em class=\'italic font-medium text-teal-deep\'>one number to call</em>.','lede' => 'From a dripping faucet to a whole-house repipe. Pick a service to see exactly what is included and what it costs to get us out, or call and talk to a real person in our Orange office.']); ?>
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
</section>
<section class="wrap pb-16"><div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4"><?php $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if (isset($component)) { $__componentOriginalda08e145bf553c2eac22d13c619f2533 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda08e145bf553c2eac22d13c619f2533 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.offer','data' => ['offer' => $o]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.offer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['offer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($o)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda08e145bf553c2eac22d13c619f2533)): ?>
<?php $attributes = $__attributesOriginalda08e145bf553c2eac22d13c619f2533; ?>
<?php unset($__attributesOriginalda08e145bf553c2eac22d13c619f2533); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda08e145bf553c2eac22d13c619f2533)): ?>
<?php $component = $__componentOriginalda08e145bf553c2eac22d13c619f2533; ?>
<?php unset($__componentOriginalda08e145bf553c2eac22d13c619f2533); ?>
<?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div></section>
<section class="wrap pb-24 space-y-6">
    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="grid overflow-hidden rounded-[2rem] bg-white ring-1 ring-line reveal lg:grid-cols-12">
            <div class="relative min-h-64 lg:col-span-5"><img src="<?php echo e(asset($s->image ?: 'images/site/tools.jpg')); ?>" alt="" class="absolute inset-0 h-full w-full object-cover" loading="lazy"></div>
            <div class="p-8 sm:p-10 lg:col-span-7">
                <div class="flex items-center gap-3"><span class="inline-flex size-10 items-center justify-center rounded-xl bg-teal-soft text-teal-deep"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => $s->icon ?? 'wrench','class' => 'size-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($s->icon ?? 'wrench'),'class' => 'size-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?></span><p class="eyebrow"><?php echo e($s->tagline); ?></p></div>
                <h2 class="h-section mt-4"><a href="<?php echo e(route('services.show', $s)); ?>" class="hover:text-teal-deep"><?php echo e($s->name); ?></a></h2>
                <p class="mt-4 text-stone"><?php echo e($s->intro); ?></p>
                <?php if($s->treatments): ?><ul class="mt-6 flex flex-wrap gap-2"><?php $__currentLoopData = array_slice($s->treatments, 0, 7); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li class="chip bg-sand text-navy-soft"><?php echo e($t['name']); ?></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php if(count($s->treatments) > 7): ?><li class="chip bg-sand text-stone">+<?php echo e(count($s->treatments) - 7); ?> more</li><?php endif; ?></ul><?php endif; ?>
                <div class="mt-8 flex flex-wrap gap-3"><a href="<?php echo e(route('services.show', $s)); ?>" class="btn-navy">Learn more</a><a href="<?php echo e(route('book')); ?>" class="btn-ghost">Book a visit</a></div>
            </div>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php if (isset($component)) { $__componentOriginal106c39dd228b3992904670768e42d9e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal106c39dd228b3992904670768e42d9e3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.cta','data' => ['title' => 'Not sure what you need? Start with a $49 diagnostic.','text' => 'A licensed plumber comes out, finds the problem and gives you a written price. If you go ahead with the repair, the $49 is credited toward it.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Not sure what you need? Start with a $49 diagnostic.','text' => 'A licensed plumber comes out, finds the problem and gives you a written price. If you go ahead with the repair, the $49 is credited toward it.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal106c39dd228b3992904670768e42d9e3)): ?>
<?php $attributes = $__attributesOriginal106c39dd228b3992904670768e42d9e3; ?>
<?php unset($__attributesOriginal106c39dd228b3992904670768e42d9e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal106c39dd228b3992904670768e42d9e3)): ?>
<?php $component = $__componentOriginal106c39dd228b3992904670768e42d9e3; ?>
<?php unset($__componentOriginal106c39dd228b3992904670768e42d9e3); ?>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/site/services.blade.php ENDPATH**/ ?>