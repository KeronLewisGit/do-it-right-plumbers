<?php if (isset($component)) { $__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.layout','data' => ['title' => 'Contact','description' => 'Contact Do It Right Plumbers: 2284 N Glassell St, Orange, CA 92865. Call (714) 485-8449, text us, or request a quote online.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Contact','description' => 'Contact Do It Right Plumbers: 2284 N Glassell St, Orange, CA 92865. Call (714) 485-8449, text us, or request a quote online.']); ?>
<?php ($co = config('company')); ?>
<section class="wrap grid gap-12 py-16 lg:grid-cols-12 lg:py-24">
    <div class="lg:col-span-5">
        <p class="eyebrow">Contact</p>
        <h1 class="h-display mt-5">A real person <em class="italic font-medium text-teal-deep">answers</em>.</h1>
        <p class="lede mt-5">Questions, quotes, or a truck today. Call, text or send the form and our Orange office will get back to you within the hour during dispatch hours.</p>
        <ul class="mt-10 space-y-6 text-sm">
            <li class="flex gap-4"><span class="inline-flex size-11 shrink-0 items-center justify-center rounded-2xl bg-teal-soft text-teal-deep"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'phone','class' => 'size-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'phone','class' => 'size-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?></span><div><p class="font-semibold">Call or text</p><p class="mt-1 text-stone"><a href="tel:<?php echo e($co['phone_href']); ?>" class="hover:text-navy"><?php echo e($co['phone']); ?></a> · <a href="sms:<?php echo e($co['sms']); ?>" class="hover:text-navy">Send a text</a></p><p class="mt-1 text-xs text-stone">Emergencies answered 24/7.</p></div></li>
            <li class="flex gap-4"><span class="inline-flex size-11 shrink-0 items-center justify-center rounded-2xl bg-teal-soft text-teal-deep"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'map','class' => 'size-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'map','class' => 'size-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?></span><div><p class="font-semibold">Our shop</p><p class="mt-1 text-stone"><?php echo e($co['address']['line1']); ?>, <?php echo e($co['address']['line2']); ?><br><a href="<?php echo e($co['map_url']); ?>" target="_blank" rel="noopener" class="link-arrow mt-1 text-teal-deep">Directions <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
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
<?php endif; ?></a></p></div></li>
            <li class="flex gap-4"><span class="inline-flex size-11 shrink-0 items-center justify-center rounded-2xl bg-teal-soft text-teal-deep"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'mail','class' => 'size-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'mail','class' => 'size-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?></span><div><p class="font-semibold">Email</p><p class="mt-1 text-stone"><a href="mailto:<?php echo e($co['email']); ?>" class="hover:text-navy"><?php echo e($co['email']); ?></a></p></div></li>
            <li class="flex gap-4"><span class="inline-flex size-11 shrink-0 items-center justify-center rounded-2xl bg-teal-soft text-teal-deep"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'clock','class' => 'size-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'clock','class' => 'size-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?></span><div><p class="font-semibold">Dispatch hours</p><div class="mt-1 grid grid-cols-[auto_1fr] gap-x-6 gap-y-1 text-stone"><?php $__currentLoopData = $hours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d => $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><span><?php echo e($d); ?></span><span><?php echo e($h); ?></span><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div></div></li>
        </ul>
        <div class="mt-8 flex gap-2"><?php $__currentLoopData = $co['social']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><a href="<?php echo e($u); ?>" target="_blank" rel="noopener" class="inline-flex size-10 items-center justify-center rounded-full ring-1 ring-line hover:bg-navy hover:text-cream" aria-label="<?php echo e(ucfirst($i)); ?>"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => $i,'class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($i),'class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?></a><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><span class="ml-2 self-center text-sm text-stone"><?php echo e($co['handle']); ?></span></div>
    </div>
    <div class="lg:col-span-7">
        <form method="post" action="<?php echo e(route('contact.store')); ?>" class="card grid gap-5 sm:grid-cols-2 sm:p-10">
            <?php echo csrf_field(); ?><input type="text" name="website" tabindex="-1" autocomplete="off" class="hidden">
            <h2 class="font-display text-3xl font-semibold sm:col-span-2">Request a quote</h2>
            <?php if (isset($component)) { $__componentOriginalee8575ac7ae80e2f656884a30289c8fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee8575ac7ae80e2f656884a30289c8fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.field','data' => ['label' => 'Your name','name' => 'name','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Your name','name' => 'name','required' => true]); ?><input id="name" name="name" value="<?php echo e(old('name')); ?>" required class="input" autocomplete="name"> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee8575ac7ae80e2f656884a30289c8fb)): ?>
<?php $attributes = $__attributesOriginalee8575ac7ae80e2f656884a30289c8fb; ?>
<?php unset($__attributesOriginalee8575ac7ae80e2f656884a30289c8fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee8575ac7ae80e2f656884a30289c8fb)): ?>
<?php $component = $__componentOriginalee8575ac7ae80e2f656884a30289c8fb; ?>
<?php unset($__componentOriginalee8575ac7ae80e2f656884a30289c8fb); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalee8575ac7ae80e2f656884a30289c8fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee8575ac7ae80e2f656884a30289c8fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.field','data' => ['label' => 'Email','name' => 'email','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Email','name' => 'email','required' => true]); ?><input id="email" name="email" type="email" value="<?php echo e(old('email')); ?>" required class="input" autocomplete="email"> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee8575ac7ae80e2f656884a30289c8fb)): ?>
<?php $attributes = $__attributesOriginalee8575ac7ae80e2f656884a30289c8fb; ?>
<?php unset($__attributesOriginalee8575ac7ae80e2f656884a30289c8fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee8575ac7ae80e2f656884a30289c8fb)): ?>
<?php $component = $__componentOriginalee8575ac7ae80e2f656884a30289c8fb; ?>
<?php unset($__componentOriginalee8575ac7ae80e2f656884a30289c8fb); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalee8575ac7ae80e2f656884a30289c8fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee8575ac7ae80e2f656884a30289c8fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.field','data' => ['label' => 'Phone','name' => 'phone']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Phone','name' => 'phone']); ?><input id="phone" name="phone" type="tel" value="<?php echo e(old('phone')); ?>" class="input" autocomplete="tel" placeholder="(714) 000-0000"> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee8575ac7ae80e2f656884a30289c8fb)): ?>
<?php $attributes = $__attributesOriginalee8575ac7ae80e2f656884a30289c8fb; ?>
<?php unset($__attributesOriginalee8575ac7ae80e2f656884a30289c8fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee8575ac7ae80e2f656884a30289c8fb)): ?>
<?php $component = $__componentOriginalee8575ac7ae80e2f656884a30289c8fb; ?>
<?php unset($__componentOriginalee8575ac7ae80e2f656884a30289c8fb); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalee8575ac7ae80e2f656884a30289c8fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee8575ac7ae80e2f656884a30289c8fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.field','data' => ['label' => 'What do you need help with?','name' => 'service']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'What do you need help with?','name' => 'service']); ?><select id="service" name="service" class="input"><option value="">Select one…</option><?php $__currentLoopData = config('company.interests'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option <?php if(old('service') === $s): echo 'selected'; endif; ?>><?php echo e($s); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee8575ac7ae80e2f656884a30289c8fb)): ?>
<?php $attributes = $__attributesOriginalee8575ac7ae80e2f656884a30289c8fb; ?>
<?php unset($__attributesOriginalee8575ac7ae80e2f656884a30289c8fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee8575ac7ae80e2f656884a30289c8fb)): ?>
<?php $component = $__componentOriginalee8575ac7ae80e2f656884a30289c8fb; ?>
<?php unset($__componentOriginalee8575ac7ae80e2f656884a30289c8fb); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalee8575ac7ae80e2f656884a30289c8fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee8575ac7ae80e2f656884a30289c8fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.field','data' => ['label' => 'Service address','name' => 'address','class' => 'sm:col-span-2','hint' => 'Street and city is enough. Helps us quote travel and check we cover you.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Service address','name' => 'address','class' => 'sm:col-span-2','hint' => 'Street and city is enough. Helps us quote travel and check we cover you.']); ?><input id="address" name="address" value="<?php echo e(old('address')); ?>" class="input" autocomplete="street-address" placeholder="123 Main St, Orange"> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee8575ac7ae80e2f656884a30289c8fb)): ?>
<?php $attributes = $__attributesOriginalee8575ac7ae80e2f656884a30289c8fb; ?>
<?php unset($__attributesOriginalee8575ac7ae80e2f656884a30289c8fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee8575ac7ae80e2f656884a30289c8fb)): ?>
<?php $component = $__componentOriginalee8575ac7ae80e2f656884a30289c8fb; ?>
<?php unset($__componentOriginalee8575ac7ae80e2f656884a30289c8fb); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalee8575ac7ae80e2f656884a30289c8fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee8575ac7ae80e2f656884a30289c8fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.field','data' => ['label' => 'Tell us what is going on','name' => 'message','required' => true,'class' => 'sm:col-span-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Tell us what is going on','name' => 'message','required' => true,'class' => 'sm:col-span-2']); ?><textarea id="message" name="message" rows="5" required class="input" placeholder="What you are seeing, how long it has been happening, and anything you have already tried."><?php echo e(old('message')); ?></textarea> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee8575ac7ae80e2f656884a30289c8fb)): ?>
<?php $attributes = $__attributesOriginalee8575ac7ae80e2f656884a30289c8fb; ?>
<?php unset($__attributesOriginalee8575ac7ae80e2f656884a30289c8fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee8575ac7ae80e2f656884a30289c8fb)): ?>
<?php $component = $__componentOriginalee8575ac7ae80e2f656884a30289c8fb; ?>
<?php unset($__componentOriginalee8575ac7ae80e2f656884a30289c8fb); ?>
<?php endif; ?>
            <div class="flex flex-wrap items-center gap-4 sm:col-span-2"><button class="btn-teal btn-lg">Send request</button><span class="text-sm text-stone">Or <a href="<?php echo e(route('book')); ?>" class="font-semibold text-teal-deep hover:underline">book an arrival window</a> right now.</span></div>
        </form>
    </div>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/site/contact.blade.php ENDPATH**/ ?>