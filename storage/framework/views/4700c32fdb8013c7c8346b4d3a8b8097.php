<?php if (isset($component)) { $__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.layout','data' => ['title' => $service->name,'description' => $service->intro]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($service->name),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($service->intro)]); ?>
<section class="relative pipes-bg">
    <div class="wrap grid gap-12 py-16 lg:grid-cols-12 lg:items-center lg:py-24">
        <div class="lg:col-span-7">
            <a href="<?php echo e(route('services')); ?>" class="link-arrow text-stone"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
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
<?php endif; ?> All services</a>
            <p class="eyebrow mt-8"><?php echo e($service->tagline); ?></p>
            <h1 class="h-display mt-4"><?php echo e($service->name); ?></h1>
            <p class="lede mt-6"><?php echo e($service->intro); ?></p>
            <div class="mt-8 flex flex-wrap gap-3"><a href="<?php echo e(route('book')); ?>" class="btn-teal btn-lg">Book a visit</a><a href="tel:<?php echo e(config('company.phone_href')); ?>" class="btn-ghost btn-lg"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'phone','class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'phone','class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?><?php echo e(config('company.phone')); ?></a></div>
        </div>
        <div class="lg:col-span-5"><div class="frame aspect-[4/5] shadow-soft"><img src="<?php echo e(asset($service->image ?: 'images/site/tools.jpg')); ?>" alt="" class="h-full w-full object-cover"></div></div>
    </div>
</section>
<?php if($service->body): ?><section class="wrap max-w-3xl pb-16"><div class="prose-site text-lg"><?php echo nl2br(e($service->body)); ?></div></section><?php endif; ?>
<?php if($service->treatments): ?>
<section class="section bg-white">
    <div class="wrap">
        <?php if (isset($component)) { $__componentOriginal54720f4a233a99e850f489b669118ff4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54720f4a233a99e850f489b669118ff4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.heading','data' => ['eyebrow' => 'What\'s included','title' => ''.e($service->name).' with Do It Right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'What\'s included','title' => ''.e($service->name).' with Do It Right']); ?>
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
        <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <?php $__currentLoopData = $service->treatments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><div class="rounded-2xl bg-cream p-6 ring-1 ring-line reveal"><h3 class="font-display text-xl font-semibold"><?php echo e($t['name']); ?></h3><p class="mt-2 text-sm leading-relaxed text-stone"><?php echo e($t['description']); ?></p></div><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if($service->faqs): ?>
<section class="section"><div class="wrap grid gap-12 lg:grid-cols-12"><div class="lg:col-span-4"><?php if (isset($component)) { $__componentOriginal54720f4a233a99e850f489b669118ff4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54720f4a233a99e850f489b669118ff4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.heading','data' => ['eyebrow' => 'Good to know','title' => 'Questions we hear on the phone']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Good to know','title' => 'Questions we hear on the phone']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54720f4a233a99e850f489b669118ff4)): ?>
<?php $attributes = $__attributesOriginal54720f4a233a99e850f489b669118ff4; ?>
<?php unset($__attributesOriginal54720f4a233a99e850f489b669118ff4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54720f4a233a99e850f489b669118ff4)): ?>
<?php $component = $__componentOriginal54720f4a233a99e850f489b669118ff4; ?>
<?php unset($__componentOriginal54720f4a233a99e850f489b669118ff4); ?>
<?php endif; ?></div><div class="lg:col-span-8"><?php if (isset($component)) { $__componentOriginal7073e2c1ecf60a5064d36e22ed85649b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7073e2c1ecf60a5064d36e22ed85649b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.faq','data' => ['items' => $service->faqs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.faq'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($service->faqs)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7073e2c1ecf60a5064d36e22ed85649b)): ?>
<?php $attributes = $__attributesOriginal7073e2c1ecf60a5064d36e22ed85649b; ?>
<?php unset($__attributesOriginal7073e2c1ecf60a5064d36e22ed85649b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7073e2c1ecf60a5064d36e22ed85649b)): ?>
<?php $component = $__componentOriginal7073e2c1ecf60a5064d36e22ed85649b; ?>
<?php unset($__componentOriginal7073e2c1ecf60a5064d36e22ed85649b); ?>
<?php endif; ?></div></div></section>
<?php endif; ?>
<section class="wrap pb-20">
    <p class="eyebrow">Other services</p>
    <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-3"><?php $__currentLoopData = $others; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if (isset($component)) { $__componentOriginal49a2ee6849a2eb893dda33b45c0a082c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49a2ee6849a2eb893dda33b45c0a082c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.service-card','data' => ['service' => $o,'class' => 'p-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.service-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['service' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($o),'class' => 'p-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal49a2ee6849a2eb893dda33b45c0a082c)): ?>
<?php $attributes = $__attributesOriginal49a2ee6849a2eb893dda33b45c0a082c; ?>
<?php unset($__attributesOriginal49a2ee6849a2eb893dda33b45c0a082c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49a2ee6849a2eb893dda33b45c0a082c)): ?>
<?php $component = $__componentOriginal49a2ee6849a2eb893dda33b45c0a082c; ?>
<?php unset($__componentOriginal49a2ee6849a2eb893dda33b45c0a082c); ?>
<?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div>
</section>
<?php if (isset($component)) { $__componentOriginal106c39dd228b3992904670768e42d9e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal106c39dd228b3992904670768e42d9e3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.cta','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/site/service.blade.php ENDPATH**/ ?>