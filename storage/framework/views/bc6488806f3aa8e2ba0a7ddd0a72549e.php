<?php if (isset($component)) { $__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.layout','data' => ['title' => 'Whole-House Repipes','description' => 'Whole-house repipe specialists in Orange County. PEX or copper, permits handled, walls patched, most homes done in one to two days, with a lifetime warranty. Free estimates from Do It Right Plumbers.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Whole-House Repipes','description' => 'Whole-house repipe specialists in Orange County. PEX or copper, permits handled, walls patched, most homes done in one to two days, with a lifetime warranty. Free estimates from Do It Right Plumbers.']); ?>
<?php ($co = config('company')); ?>
<section class="relative overflow-hidden bg-navy text-cream pipes-bg-light">
    <div class="wrap grid gap-12 py-16 lg:grid-cols-12 lg:items-center lg:py-28">
        <div class="lg:col-span-6">
            <p class="eyebrow text-teal">Whole-house repipes · Lifetime warranty</p>
            <h1 class="h-display mt-6 text-cream">New pipes for the next <em class="italic font-medium text-teal">fifty years</em>.</h1>
            <p class="lede mt-6 text-cream/75">Orange County homes built before the 1990s are reaching the end of their original galvanized and thin-wall copper plumbing. Pinhole leaks, brown water and weak showers are the warning signs. A repipe replaces every supply line in the house, once, properly.</p>
            <div class="mt-9 flex flex-wrap gap-3"><a href="<?php echo e(route('book', ['type' => 'free-repipe-estimate'])); ?>" class="btn-teal btn-lg">Book a free estimate</a><a href="#how" class="btn-lg btn bg-white/10 text-cream ring-1 ring-white/20 hover:bg-white hover:text-navy">How it works</a></div>
            <div class="mt-10 grid grid-cols-3 gap-4 border-t border-white/10 pt-8"><?php $__currentLoopData = [['1–2', 'days for most homes'], ['Lifetime', 'warranty, in writing'], ['$0', 'estimate fee']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$n, $l]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><div><p class="font-display text-3xl font-bold text-teal"><?php echo e($n); ?></p><p class="mt-1 text-xs font-semibold uppercase tracking-wider text-cream/60"><?php echo e($l); ?></p></div><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div>
        </div>
        <div class="lg:col-span-6"><div class="frame aspect-[4/5] shadow-soft lg:ml-10"><img src="<?php echo e(asset('images/services/repipes.jpg')); ?>" alt="A plumber soldering a copper joint" class="h-full w-full object-cover"></div></div>
    </div>
</section>

<section class="section">
    <div class="wrap">
        <?php if (isset($component)) { $__componentOriginal54720f4a233a99e850f489b669118ff4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54720f4a233a99e850f489b669118ff4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.heading','data' => ['center' => true,'eyebrow' => 'Do you need a repipe?','title' => 'Five signs your pipes are telling you something.','lede' => 'One of these is worth a $49 diagnostic. Two or more usually means the plumbing is at the end of its life.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true,'eyebrow' => 'Do you need a repipe?','title' => 'Five signs your pipes are telling you something.','lede' => 'One of these is worth a $49 diagnostic. Two or more usually means the plumbing is at the end of its life.']); ?>
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
        <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-5">
            <?php $__currentLoopData = [['droplet', 'Pinhole leaks', 'Small wet spots on ceilings or walls that keep coming back in new places.'], ['alert', 'Rusty or brown water', 'Especially first thing in the morning. Galvanized steel corrodes from the inside.'], ['drain', 'Low water pressure', 'Mineral build-up narrows old pipes until a shower feels like a drizzle.'], ['heater', 'Hot water takes forever', 'Scaled-up lines starve the fixtures furthest from the heater.'], ['tag', 'Rising repair bills', 'If you have called a plumber for leaks twice in a year, you are paying for a repipe in pieces.']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$i, $h, $t]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card reveal"><span class="inline-flex size-10 items-center justify-center rounded-xl bg-teal-soft text-teal-deep"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
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
<?php endif; ?></span><h3 class="mt-4 font-display text-xl font-semibold"><?php echo e($h); ?></h3><p class="mt-2 text-sm leading-relaxed text-stone"><?php echo e($t); ?></p></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<section id="how" class="section bg-white">
    <div class="wrap grid gap-14 lg:grid-cols-12 lg:items-center">
        <div class="lg:col-span-5"><div class="frame aspect-[4/5] bg-sand"><img src="<?php echo e(asset('images/site/under-sink.jpg')); ?>" alt="A plumber working inside a kitchen cabinet" class="h-full w-full object-cover" loading="lazy"></div></div>
        <div class="lg:col-span-7">
            <?php if (isset($component)) { $__componentOriginal54720f4a233a99e850f489b669118ff4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54720f4a233a99e850f489b669118ff4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.heading','data' => ['eyebrow' => 'How a repipe works','title' => 'Open, replace, pressure test, <em class=\'italic font-medium text-teal-deep\'>patch</em>.','lede' => 'A good repipe is as much about the walls and the clean-up as the pipe. Here is the whole job, start to finish.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'How a repipe works','title' => 'Open, replace, pressure test, <em class=\'italic font-medium text-teal-deep\'>patch</em>.','lede' => 'A good repipe is as much about the walls and the clean-up as the pipe. Here is the whole job, start to finish.']); ?>
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
            <ol class="mt-10 space-y-6">
                <?php $__currentLoopData = [['Free in-home estimate', 'We walk the house, count fixtures, check the water heater and the main, and give you a fixed written price. PEX or copper, your call, and we explain the difference honestly.'], ['Permits and prep', 'We pull the city permit, protect your floors and furniture, and plan the access points so we open as little drywall as possible.'], ['Day one: new lines', 'Water is shut off in the morning. Every supply line, hot and cold, is replaced with new pipe, new shut-off valves and new supply lines to each fixture. Water is back on the same evening.'], ['Pressure test and inspection', 'The whole system is pressure tested, then the city inspector signs it off. Only then do we close the walls.'], ['Patch, texture, walk-through', 'Our drywall team patches and textures every opening, ready for paint. We walk you through the house and hand you the lifetime warranty.']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => [$h, $t]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="flex gap-5"><span class="flex size-11 shrink-0 items-center justify-center rounded-full bg-navy font-display text-xl font-bold text-teal"><?php echo e($i + 1); ?></span><div><h3 class="font-display text-2xl font-semibold"><?php echo e($h); ?></h3><p class="mt-1 text-sm leading-relaxed text-stone"><?php echo e($t); ?></p></div></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
        </div>
    </div>
</section>

<section class="section">
    <div class="wrap">
        <?php if (isset($component)) { $__componentOriginal54720f4a233a99e850f489b669118ff4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54720f4a233a99e850f489b669118ff4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.heading','data' => ['center' => true,'eyebrow' => 'PEX or copper?','title' => 'Both are right. One is right for you.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true,'eyebrow' => 'PEX or copper?','title' => 'Both are right. One is right for you.']); ?>
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
        <div class="mt-12 grid gap-5 md:grid-cols-2">
            <div class="card ring-teal/40"><p class="eyebrow">PEX (Uponor)</p><ul class="mt-5 space-y-3 text-sm text-navy"><?php $__currentLoopData = ['Flexible tubing that snakes through walls with fewer openings', 'Does not corrode or scale, and resists freeze damage', 'Quieter: no water hammer, no pipe rattle', 'Lower material cost, so the best value for most homes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li class="flex gap-3"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'check','class' => 'mt-0.5 size-5 shrink-0 text-teal-deep']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'check','class' => 'mt-0.5 size-5 shrink-0 text-teal-deep']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?><?php echo e($li); ?></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul></div>
            <div class="card-sand"><p class="eyebrow text-stone">Type L copper</p><ul class="mt-5 space-y-3 text-sm text-navy-soft"><?php $__currentLoopData = ['The traditional choice, proven for decades', 'Rigid, with soldered joints and a premium feel', 'Preferred by some buyers and inspectors in older neighborhoods', 'Higher material cost and more wall openings']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li class="flex gap-3"><span class="mt-2 size-1.5 shrink-0 rounded-full bg-stone"></span><?php echo e($li); ?></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul></div>
        </div>
        <p class="mt-6 text-center text-sm text-stone">We install both and we will tell you which one we would put in our own house. Either way, the warranty is for life.</p>
    </div>
</section>

<section class="section bg-sand/60">
    <div class="wrap grid gap-12 lg:grid-cols-12">
        <div class="lg:col-span-5"><?php if (isset($component)) { $__componentOriginal54720f4a233a99e850f489b669118ff4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54720f4a233a99e850f489b669118ff4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.heading','data' => ['eyebrow' => 'Our promise','title' => 'A repipe you only think about once.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Our promise','title' => 'A repipe you only think about once.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54720f4a233a99e850f489b669118ff4)): ?>
<?php $attributes = $__attributesOriginal54720f4a233a99e850f489b669118ff4; ?>
<?php unset($__attributesOriginal54720f4a233a99e850f489b669118ff4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54720f4a233a99e850f489b669118ff4)): ?>
<?php $component = $__componentOriginal54720f4a233a99e850f489b669118ff4; ?>
<?php unset($__componentOriginal54720f4a233a99e850f489b669118ff4); ?>
<?php endif; ?><ul class="mt-8 space-y-5"><?php $__currentLoopData = [['Lifetime warranty', 'On every pipe, fitting and valve we install, for as long as you own the home.'], ['Fixed price', 'The number on the estimate is the number on the invoice. No change orders.'], ['Your home respected', 'Floors covered, shoe covers on, work area vacuumed every evening.']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$h, $t]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li class="flex gap-4"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'check','class' => 'mt-1 size-5 shrink-0 text-teal-deep']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'check','class' => 'mt-1 size-5 shrink-0 text-teal-deep']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?><div><p class="font-semibold"><?php echo e($h); ?></p><p class="text-sm text-stone"><?php echo e($t); ?></p></div></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul></div>
        <div class="lg:col-span-7"><?php if (isset($component)) { $__componentOriginal7073e2c1ecf60a5064d36e22ed85649b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7073e2c1ecf60a5064d36e22ed85649b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.faq','data' => ['items' => $service->faqs ?? []]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.faq'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($service->faqs ?? [])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7073e2c1ecf60a5064d36e22ed85649b)): ?>
<?php $attributes = $__attributesOriginal7073e2c1ecf60a5064d36e22ed85649b; ?>
<?php unset($__attributesOriginal7073e2c1ecf60a5064d36e22ed85649b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7073e2c1ecf60a5064d36e22ed85649b)): ?>
<?php $component = $__componentOriginal7073e2c1ecf60a5064d36e22ed85649b; ?>
<?php unset($__componentOriginal7073e2c1ecf60a5064d36e22ed85649b); ?>
<?php endif; ?></div>
    </div>
</section>

<?php if($testimonials->isNotEmpty()): ?>
<section class="section">
    <div class="wrap"><?php if (isset($component)) { $__componentOriginal54720f4a233a99e850f489b669118ff4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54720f4a233a99e850f489b669118ff4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.heading','data' => ['center' => true,'eyebrow' => 'Repipe reviews','title' => 'What homeowners say after the dust settles.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['center' => true,'eyebrow' => 'Repipe reviews','title' => 'What homeowners say after the dust settles.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54720f4a233a99e850f489b669118ff4)): ?>
<?php $attributes = $__attributesOriginal54720f4a233a99e850f489b669118ff4; ?>
<?php unset($__attributesOriginal54720f4a233a99e850f489b669118ff4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54720f4a233a99e850f489b669118ff4)): ?>
<?php $component = $__componentOriginal54720f4a233a99e850f489b669118ff4; ?>
<?php unset($__componentOriginal54720f4a233a99e850f489b669118ff4); ?>
<?php endif; ?><div class="mt-12 grid gap-5 md:grid-cols-3"><?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if (isset($component)) { $__componentOriginalf744f99d43742d4291d0eec57cc1bbe7 = $component; } ?>
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
<?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div></div>
</section>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal106c39dd228b3992904670768e42d9e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal106c39dd228b3992904670768e42d9e3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.cta','data' => ['title' => 'Get a fixed price for your repipe this week.','text' => 'Book a free in-home estimate. You will have a written number and an honest recommendation before we leave the driveway.','image' => 'images/site/oc-house.jpg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Get a fixed price for your repipe this week.','text' => 'Book a free in-home estimate. You will have a written number and an honest recommendation before we leave the driveway.','image' => 'images/site/oc-house.jpg']); ?>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/site/repipes.blade.php ENDPATH**/ ?>