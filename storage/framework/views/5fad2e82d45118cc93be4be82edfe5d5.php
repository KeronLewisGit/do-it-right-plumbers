<?php if (isset($component)) { $__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.layout','data' => ['title' => 'Our Team','description' => 'Meet the licensed plumbers, dispatchers and office team at Do It Right Plumbers in Orange, CA.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Our Team','description' => 'Meet the licensed plumbers, dispatchers and office team at Do It Right Plumbers in Orange, CA.']); ?>
<section class="wrap py-16 lg:py-24">
    <?php if (isset($component)) { $__componentOriginal54720f4a233a99e850f489b669118ff4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54720f4a233a99e850f489b669118ff4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.heading','data' => ['eyebrow' => 'Meet the team','title' => 'Background-checked, uniformed, and <em class=\'italic font-medium text-teal-deep\'>not on commission</em>.','lede' => 'Every technician is a licensed, insured employee, not a subcontractor. They are paid to fix your plumbing, not to sell you plumbing, which is why the advice you get at the kitchen table is the same advice they would give their own family.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Meet the team','title' => 'Background-checked, uniformed, and <em class=\'italic font-medium text-teal-deep\'>not on commission</em>.','lede' => 'Every technician is a licensed, insured employee, not a subcontractor. They are paid to fix your plumbing, not to sell you plumbing, which is why the advice you get at the kitchen table is the same advice they would give their own family.']); ?>
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
    <div class="mt-8 flex flex-wrap gap-2"><?php $__currentLoopData = ['Licensed', 'Insured', 'Background-checked', 'Drug-tested', 'Uniformed']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><span class="chip bg-teal-soft text-teal-deep"><?php echo e($w); ?></span><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div>
</section>
<section class="wrap pb-20">
    <p class="eyebrow">Field technicians</p>
    <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <?php $__currentLoopData = $technicians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('team.show', $m)); ?>" class="group card text-center reveal"><?php if (isset($component)) { $__componentOriginal4975971c69f3e610c44733636af508fc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4975971c69f3e610c44733636af508fc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.avatar','data' => ['member' => $m,'class' => 'mx-auto size-32 text-4xl']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['member' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($m),'class' => 'mx-auto size-32 text-4xl']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4975971c69f3e610c44733636af508fc)): ?>
<?php $attributes = $__attributesOriginal4975971c69f3e610c44733636af508fc; ?>
<?php unset($__attributesOriginal4975971c69f3e610c44733636af508fc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4975971c69f3e610c44733636af508fc)): ?>
<?php $component = $__componentOriginal4975971c69f3e610c44733636af508fc; ?>
<?php unset($__componentOriginal4975971c69f3e610c44733636af508fc); ?>
<?php endif; ?><h2 class="mt-5 font-display text-2xl font-semibold group-hover:text-teal-deep"><?php echo e($m->name); ?></h2><p class="text-sm text-stone"><?php echo e($m->title); ?></p></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php if($office->isNotEmpty()): ?>
    <p class="eyebrow mt-20">Office & dispatch</p>
    <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <?php $__currentLoopData = $office; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('team.show', $m)); ?>" class="group card flex gap-5 reveal"><?php if (isset($component)) { $__componentOriginal4975971c69f3e610c44733636af508fc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4975971c69f3e610c44733636af508fc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.avatar','data' => ['member' => $m,'class' => 'size-24 shrink-0 text-2xl']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['member' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($m),'class' => 'size-24 shrink-0 text-2xl']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4975971c69f3e610c44733636af508fc)): ?>
<?php $attributes = $__attributesOriginal4975971c69f3e610c44733636af508fc; ?>
<?php unset($__attributesOriginal4975971c69f3e610c44733636af508fc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4975971c69f3e610c44733636af508fc)): ?>
<?php $component = $__componentOriginal4975971c69f3e610c44733636af508fc; ?>
<?php unset($__componentOriginal4975971c69f3e610c44733636af508fc); ?>
<?php endif; ?><div><h2 class="font-display text-2xl font-semibold leading-tight group-hover:text-teal-deep"><?php echo e($m->name); ?></h2><p class="mt-1 text-sm text-stone"><?php echo e($m->title); ?></p><span class="link-arrow mt-3 text-xs">Read more <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'arrow']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'arrow']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?></span></div></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
</section>
<?php if (isset($component)) { $__componentOriginal106c39dd228b3992904670768e42d9e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal106c39dd228b3992904670768e42d9e3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.cta','data' => ['title' => 'Want to join the team?','text' => 'We hire licensed plumbers and apprentices who like people as much as pipes. Send a note through the contact page and tell us about yourself.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Want to join the team?','text' => 'We hire licensed plumbers and apprentices who like people as much as pipes. Send a note through the contact page and tell us about yourself.']); ?>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/site/team.blade.php ENDPATH**/ ?>