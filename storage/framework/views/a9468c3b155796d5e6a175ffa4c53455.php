<?php if (isset($component)) { $__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.layout','data' => ['title' => 'About Us','description' => 'Do It Right Plumbers grew out of a family remodeling company in 2007 and became Orange County\'s friendliest plumbing company in 2014. Meet the people, the trucks and the promise behind the name.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'About Us','description' => 'Do It Right Plumbers grew out of a family remodeling company in 2007 and became Orange County\'s friendliest plumbing company in 2014. Meet the people, the trucks and the promise behind the name.']); ?>
<?php ($co = config('company')); ?>
<section class="wrap py-16 lg:py-24 pipes-bg">
    <div class="grid gap-12 lg:grid-cols-12 lg:items-end">
        <div class="lg:col-span-7"><p class="eyebrow">About Do It Right</p><h1 class="h-display mt-5">The name is the <em class="italic font-medium text-teal-deep">whole</em> business plan.</h1><p class="lede mt-6 max-w-2xl">We started as a remodeling company that kept having to refer its own clients to other plumbers. In 2014 we decided to become the plumber we wished we could recommend: on time, honest about the options, and friendly enough that you would be happy to see the truck pull up.</p></div>
        <div class="grid grid-cols-3 gap-4 lg:col-span-5"><?php $__currentLoopData = [[$co['stats']['years'], 'Years in business'], [$co['stats']['trucks'], 'Trucks on the road'], [$co['stats']['reviews'], 'Five-star reviews']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$n, $l]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><div class="card-sand text-center"><p class="font-display text-4xl font-bold"><?php echo e($n); ?></p><p class="mt-1 text-xs font-semibold uppercase tracking-wider text-stone"><?php echo e($l); ?></p></div><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div>
    </div>
    <div class="mt-14 frame aspect-[21/9] shadow-soft"><img src="<?php echo e(asset('images/site/kitchen.jpg')); ?>" alt="A clean, modern Orange County kitchen" class="h-full w-full object-cover"></div>
</section>

<section class="section bg-white">
    <div class="wrap grid gap-14 lg:grid-cols-2 lg:items-center">
        <?php if (isset($component)) { $__componentOriginal54720f4a233a99e850f489b669118ff4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54720f4a233a99e850f489b669118ff4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.heading','data' => ['eyebrow' => 'Our story','title' => 'From remodeling to plumbing, by request.','lede' => 'Edan Bar-Lev and his brother Aviran founded a remodeling company in 2007, building additions and high-end kitchens across Orange County. The one thing they could not do was take a service call.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Our story','title' => 'From remodeling to plumbing, by request.','lede' => 'Edan Bar-Lev and his brother Aviran founded a remodeling company in 2007, building additions and high-end kitchens across Orange County. The one thing they could not do was take a service call.']); ?>
            <div class="prose-site mt-8">
                <p>Every month a past client would ring about a leak or a dead water heater, and every month the brothers sent them to someone else. In 2014 Edan, a licensed general contractor and plumber, spent a year studying how the best service companies in the country operate, from plumbing firms in the Nexstar network to the customer-service playbooks of Zappos and Amazon. Then he opened Do It Right Plumbers with one truck and a free water heater flush for every former remodeling client.</p>
                <p>The flush turned into repairs, the repairs into referrals, and the one truck into a fleet. The rule from day one has not changed: our plumbers are paid to fix things, not to sell things. Nobody works on commission, so the only reason you will hear about a repipe is that you need one.</p>
            </div>
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
        <div class="grid grid-cols-2 gap-4"><div class="frame aspect-[3/4]"><img src="<?php echo e(asset('images/site/toilet-inspect.jpg')); ?>" alt="A technician inspecting a bathroom" class="h-full w-full object-cover" loading="lazy"></div><div class="frame aspect-[3/4] mt-10"><img src="<?php echo e(asset('images/site/technician.jpg')); ?>" alt="A smiling technician" class="h-full w-full object-cover" loading="lazy"></div></div>
    </div>
</section>

<section class="section">
    <div class="wrap">
        <?php if (isset($component)) { $__componentOriginal54720f4a233a99e850f489b669118ff4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54720f4a233a99e850f489b669118ff4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.heading','data' => ['center' => true,'eyebrow' => 'The brand','title' => 'Why our logo looks like 1934.','lede' => 'The tipped cap and the smile are on purpose. We wanted the brand, the vans and the technicians at your door to feel approachable, especially to anyone who has ever felt talked down to by a tradesperson.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true,'eyebrow' => 'The brand','title' => 'Why our logo looks like 1934.','lede' => 'The tipped cap and the smile are on purpose. We wanted the brand, the vans and the technicians at your door to feel approachable, especially to anyone who has ever felt talked down to by a tradesperson.']); ?>
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
        <div class="mt-12 grid gap-5 md:grid-cols-3">
            <?php $__currentLoopData = [['truck', 'Wrapped, stocked trucks', 'Every van carries the same shelving and the same parts, so a technician rarely has to leave for supplies mid-job.'], ['heart', 'First impressions', 'Uniforms, shoe covers and a text before arrival. The job starts before anyone knocks on the door.'], ['handshake', 'Community', 'We partner with the Orange County Food Bank with year-round donations, because a company should be a good neighbor too.']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$i, $h, $t]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card reveal"><span class="inline-flex size-11 items-center justify-center rounded-2xl bg-teal-soft text-teal-deep"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => $i,'class' => 'size-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($i),'class' => 'size-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?></span><h3 class="mt-5 font-display text-2xl font-semibold"><?php echo e($h); ?></h3><p class="mt-2 text-sm leading-relaxed text-stone"><?php echo e($t); ?></p></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<section class="section bg-sand/60">
    <div class="wrap">
        <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between"><?php if (isset($component)) { $__componentOriginal54720f4a233a99e850f489b669118ff4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54720f4a233a99e850f489b669118ff4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.heading','data' => ['eyebrow' => 'The people','title' => 'The folks behind the trucks.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'The people','title' => 'The folks behind the trucks.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54720f4a233a99e850f489b669118ff4)): ?>
<?php $attributes = $__attributesOriginal54720f4a233a99e850f489b669118ff4; ?>
<?php unset($__attributesOriginal54720f4a233a99e850f489b669118ff4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54720f4a233a99e850f489b669118ff4)): ?>
<?php $component = $__componentOriginal54720f4a233a99e850f489b669118ff4; ?>
<?php unset($__componentOriginal54720f4a233a99e850f489b669118ff4); ?>
<?php endif; ?><a href="<?php echo e(route('team')); ?>" class="link-arrow">Meet everyone <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
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
<?php endif; ?></a></div>
        <div class="mt-12 grid grid-cols-2 gap-5 md:grid-cols-4"><?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><a href="<?php echo e(route('team.show', $m)); ?>" class="group text-center"><?php if (isset($component)) { $__componentOriginal4975971c69f3e610c44733636af508fc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4975971c69f3e610c44733636af508fc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.avatar','data' => ['member' => $m,'class' => 'mx-auto size-28 text-3xl']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['member' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($m),'class' => 'mx-auto size-28 text-3xl']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4975971c69f3e610c44733636af508fc)): ?>
<?php $attributes = $__attributesOriginal4975971c69f3e610c44733636af508fc; ?>
<?php unset($__attributesOriginal4975971c69f3e610c44733636af508fc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4975971c69f3e610c44733636af508fc)): ?>
<?php $component = $__componentOriginal4975971c69f3e610c44733636af508fc; ?>
<?php unset($__componentOriginal4975971c69f3e610c44733636af508fc); ?>
<?php endif; ?><p class="mt-3 text-sm font-semibold"><?php echo e($m->name); ?></p><p class="text-xs text-stone"><?php echo e($m->title); ?></p></a><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div>
    </div>
</section>

<section class="section">
    <div class="wrap grid gap-5 md:grid-cols-3"><?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if (isset($component)) { $__componentOriginalf744f99d43742d4291d0eec57cc1bbe7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf744f99d43742d4291d0eec57cc1bbe7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.testimonial','data' => ['t' => $t,'compact' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.testimonial'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['t' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($t),'compact' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf744f99d43742d4291d0eec57cc1bbe7)): ?>
<?php $attributes = $__attributesOriginalf744f99d43742d4291d0eec57cc1bbe7; ?>
<?php unset($__attributesOriginalf744f99d43742d4291d0eec57cc1bbe7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf744f99d43742d4291d0eec57cc1bbe7)): ?>
<?php $component = $__componentOriginalf744f99d43742d4291d0eec57cc1bbe7; ?>
<?php unset($__componentOriginalf744f99d43742d4291d0eec57cc1bbe7); ?>
<?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div>
</section>
<?php if (isset($component)) { $__componentOriginal106c39dd228b3992904670768e42d9e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal106c39dd228b3992904670768e42d9e3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.cta','data' => ['title' => 'See the difference for yourself.','image' => 'images/site/hero-plumber.jpg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'See the difference for yourself.','image' => 'images/site/hero-plumber.jpg']); ?>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/site/about.blade.php ENDPATH**/ ?>