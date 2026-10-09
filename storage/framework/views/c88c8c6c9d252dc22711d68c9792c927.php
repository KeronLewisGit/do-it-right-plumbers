<?php if (isset($component)) { $__componentOriginal7651faf8e4a1e278424aad70c82de3ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7651faf8e4a1e278424aad70c82de3ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.layout','data' => ['title' => 'Dashboard']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Dashboard']); ?>
     <?php $__env->slot('actions', null, []); ?> <a href="<?php echo e(route('admin.appointments.create')); ?>" class="btn-teal btn-sm">New job</a> <?php $__env->endSlot(); ?>
    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
        <?php $__currentLoopData = [['Today', $stats['today'], 'jobs'], ['This week', $stats['week'], 'booked'], ['Awaiting confirmation', $stats['pending'], 'online requests'], ['New quote requests', $stats['new_inquiries'], 'to answer'], ['Customers', $stats['customers'], $stats['new_customers_month'].' new this month'], ['Subscribers', $stats['subscribers'], 'email list'], ['No-access rate', $stats['no_show_rate'].'%', 'last 90 days']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$l, $v, $s]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="stat"><p class="text-[11px] font-semibold uppercase tracking-wider text-stone"><?php echo e($l); ?></p><p class="mt-1 font-display text-4xl"><?php echo e($v); ?></p><p class="text-xs text-stone"><?php echo e($s); ?></p></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="stat"><p class="text-[11px] font-semibold uppercase tracking-wider text-stone">Next 7 days</p><div class="mt-2 flex items-end gap-1.5"><?php $__currentLoopData = $upcomingDays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><div class="flex flex-1 flex-col items-center gap-1"><div class="w-full rounded-md bg-teal" style="height: <?php echo e(max(4, min(40, $d['count'] * 8))); ?>px" title="<?php echo e($d['count']); ?>"></div><span class="text-[10px] text-stone"><?php echo e($d['date']->format('D')); ?></span></div><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div></div>
    </div>
    <div class="mt-6 grid gap-6 xl:grid-cols-3">
        <section class="card p-0 xl:col-span-2"><div class="flex items-center justify-between px-5 py-4"><h2 class="font-display text-2xl">Today, <?php echo e(now()->format('l j F')); ?></h2><a href="<?php echo e(route('admin.calendar')); ?>" class="link-arrow text-xs">Calendar <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
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
            <table class="table"><thead><tr><th>Window</th><th>Customer</th><th>Job</th><th>Technician</th><th>Status</th></tr></thead><tbody>
                <?php $__empty_1 = true; $__currentLoopData = $today; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><tr><td class="whitespace-nowrap font-semibold"><?php echo e($a->starts_at->format('g:i A')); ?></td><td><a href="<?php echo e(route('admin.appointments.show', $a)); ?>" class="font-semibold hover:text-teal-deep"><?php echo e($a->customer->fullName()); ?></a><span class="block text-xs text-stone"><?php echo e($a->customer->phone); ?></span></td><td><?php echo e($a->type?->name); ?></td><td><?php echo e($a->provider?->name ?? '—'); ?></td><td><?php if (isset($component)) { $__componentOriginal9383433c9194439a213c031c55720455 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9383433c9194439a213c031c55720455 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.status','data' => ['status' => $a->status]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($a->status)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9383433c9194439a213c031c55720455)): ?>
<?php $attributes = $__attributesOriginal9383433c9194439a213c031c55720455; ?>
<?php unset($__attributesOriginal9383433c9194439a213c031c55720455); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9383433c9194439a213c031c55720455)): ?>
<?php $component = $__componentOriginal9383433c9194439a213c031c55720455; ?>
<?php unset($__componentOriginal9383433c9194439a213c031c55720455); ?>
<?php endif; ?></td></tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><tr><td colspan="5" class="text-stone">No jobs today.</td></tr><?php endif; ?>
            </tbody></table></section>
        <section class="space-y-6">
            <div class="card p-0"><div class="px-5 py-4"><h2 class="font-display text-2xl">Awaiting confirmation</h2></div><ul class="divide-y divide-line"><?php $__empty_1 = true; $__currentLoopData = $pending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><li class="flex items-center justify-between gap-3 px-5 py-3 text-sm"><div><a href="<?php echo e(route('admin.appointments.show', $a)); ?>" class="font-semibold hover:text-teal-deep"><?php echo e($a->customer->fullName()); ?></a><span class="block text-xs text-stone"><?php echo e($a->starts_at->format('D j M, g:i A')); ?> · <?php echo e($a->type?->name); ?></span></div><form method="post" action="<?php echo e(route('admin.appointments.status', $a)); ?>"><?php echo csrf_field(); ?> <?php echo method_field('patch'); ?><input type="hidden" name="status" value="confirmed"><button class="btn-light btn-sm">Confirm</button></form></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><li class="px-5 py-4 text-sm text-stone">All caught up.</li><?php endif; ?></ul></div>
            <div class="card p-0"><div class="px-5 py-4"><h2 class="font-display text-2xl">New quote requests</h2></div><ul class="divide-y divide-line"><?php $__empty_1 = true; $__currentLoopData = $newInquiries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><li class="px-5 py-3 text-sm"><a href="<?php echo e(route('admin.inquiries.show', $i)); ?>" class="font-semibold hover:text-teal-deep"><?php echo e($i->name); ?></a> <span class="text-xs text-stone">· <?php echo e($i->service ?: 'General'); ?> · <?php echo e($i->created_at->diffForHumans()); ?></span><p class="mt-1 line-clamp-2 text-stone"><?php echo e($i->message); ?></p></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><li class="px-5 py-4 text-sm text-stone">No new requests.</li><?php endif; ?></ul></div>
        </section>
    </div>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>