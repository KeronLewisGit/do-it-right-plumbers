<?php if (isset($component)) { $__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.layout','data' => ['title' => $member->name,'description' => $member->name.', '.$member->title.' at Do It Right Plumbers.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($member->name),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($member->name.', '.$member->title.' at Do It Right Plumbers.')]); ?>
<section class="wrap grid gap-12 py-16 lg:grid-cols-12 lg:py-24">
    <div class="lg:col-span-4"><?php if (isset($component)) { $__componentOriginal4975971c69f3e610c44733636af508fc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4975971c69f3e610c44733636af508fc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.avatar','data' => ['member' => $member,'class' => 'mx-auto size-64 text-7xl shadow-soft']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['member' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($member),'class' => 'mx-auto size-64 text-7xl shadow-soft']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4975971c69f3e610c44733636af508fc)): ?>
<?php $attributes = $__attributesOriginal4975971c69f3e610c44733636af508fc; ?>
<?php unset($__attributesOriginal4975971c69f3e610c44733636af508fc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4975971c69f3e610c44733636af508fc)): ?>
<?php $component = $__componentOriginal4975971c69f3e610c44733636af508fc; ?>
<?php unset($__componentOriginal4975971c69f3e610c44733636af508fc); ?>
<?php endif; ?></div>
    <div class="lg:col-span-8">
        <a href="<?php echo e(route('team')); ?>" class="link-arrow text-stone"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
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
<?php endif; ?> The whole team</a>
        <p class="eyebrow mt-8"><?php echo e($member->title); ?></p>
        <h1 class="h-display mt-4"><?php echo e($member->name); ?></h1>
        <div class="prose-site mt-8 text-lg"><?php echo nl2br(e($member->bio ?: 'Part of the Do It Right team.')); ?></div>
        <div class="mt-8 flex flex-wrap gap-3">
            <a href="<?php echo e(route('book')); ?>" class="btn-teal"><?php echo e($member->accepts_bookings ? 'Request '.$member->firstName() : 'Book a visit'); ?></a>
            <?php if($member->instagram): ?><a href="<?php echo e($member->instagram); ?>" target="_blank" rel="noopener" class="btn-ghost"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'instagram','class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'instagram','class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>Instagram</a><?php endif; ?>
        </div>
    </div>
</section>
<section class="wrap pb-20">
    <p class="eyebrow">Also on the team</p>
    <div class="mt-6 grid grid-cols-2 gap-5 md:grid-cols-4"><?php $__currentLoopData = $others; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><a href="<?php echo e(route('team.show', $m)); ?>" class="group text-center"><?php if (isset($component)) { $__componentOriginal4975971c69f3e610c44733636af508fc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4975971c69f3e610c44733636af508fc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.avatar','data' => ['member' => $m,'class' => 'mx-auto size-24 text-2xl']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['member' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($m),'class' => 'mx-auto size-24 text-2xl']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4975971c69f3e610c44733636af508fc)): ?>
<?php $attributes = $__attributesOriginal4975971c69f3e610c44733636af508fc; ?>
<?php unset($__attributesOriginal4975971c69f3e610c44733636af508fc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4975971c69f3e610c44733636af508fc)): ?>
<?php $component = $__componentOriginal4975971c69f3e610c44733636af508fc; ?>
<?php unset($__componentOriginal4975971c69f3e610c44733636af508fc); ?>
<?php endif; ?><p class="mt-3 font-semibold"><?php echo e($m->name); ?></p><p class="text-xs text-stone"><?php echo e($m->title); ?></p></a><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/site/member.blade.php ENDPATH**/ ?>