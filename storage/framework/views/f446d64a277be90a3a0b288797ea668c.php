<?php if (isset($component)) { $__componentOriginal7651faf8e4a1e278424aad70c82de3ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7651faf8e4a1e278424aad70c82de3ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.layout','data' => ['title' => $appointment->reference]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($appointment->reference)]); ?>
     <?php $__env->slot('actions', null, []); ?> <a href="<?php echo e(route('admin.appointments.index')); ?>" class="btn-light btn-sm">All jobs</a> <?php $__env->endSlot(); ?>
    <div class="grid gap-6 lg:grid-cols-3">
        <div class="space-y-6 lg:col-span-2">
            <section class="card">
                <div class="flex flex-wrap items-start justify-between gap-4"><div><p class="eyebrow"><?php echo e($appointment->type?->name ?? 'Service visit'); ?></p><h2 class="mt-2 font-display text-3xl"><?php echo e($appointment->starts_at->format('l j F Y')); ?></h2><p class="text-stone"><?php echo e($appointment->starts_at->format('g:i A')); ?> – <?php echo e($appointment->ends_at->format('g:i A')); ?><?php echo e($appointment->provider ? ' · '.$appointment->provider->name : ''); ?></p></div><?php if (isset($component)) { $__componentOriginal9383433c9194439a213c031c55720455 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9383433c9194439a213c031c55720455 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.status','data' => ['status' => $appointment->status,'class' => 'text-sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($appointment->status),'class' => 'text-sm']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9383433c9194439a213c031c55720455)): ?>
<?php $attributes = $__attributesOriginal9383433c9194439a213c031c55720455; ?>
<?php unset($__attributesOriginal9383433c9194439a213c031c55720455); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9383433c9194439a213c031c55720455)): ?>
<?php $component = $__componentOriginal9383433c9194439a213c031c55720455; ?>
<?php unset($__componentOriginal9383433c9194439a213c031c55720455); ?>
<?php endif; ?></div>
                <dl class="mt-6 grid gap-4 text-sm sm:grid-cols-2"><div><dt class="label">Customer</dt><dd><a href="<?php echo e(route('admin.customers.show', $appointment->customer)); ?>" class="font-semibold hover:text-teal-deep"><?php echo e($appointment->customer->fullName()); ?></a><?php if($appointment->customer->phone): ?><br><a href="tel:<?php echo e($appointment->customer->phone); ?>" class="text-stone"><?php echo e($appointment->customer->phone); ?></a><?php endif; ?> <?php if($appointment->customer->email): ?><br><a href="mailto:<?php echo e($appointment->customer->email); ?>" class="text-stone"><?php echo e($appointment->customer->email); ?></a><?php endif; ?></dd></div><div><dt class="label">Booked</dt><dd><?php echo e($appointment->created_at->format('j M Y, g:i A')); ?> via <?php echo e($appointment->source); ?><?php if($appointment->confirmed_at): ?><br>Confirmed <?php echo e($appointment->confirmed_at->format('j M, g:i A')); ?><?php endif; ?> <?php if($appointment->cancelled_at): ?><br>Cancelled <?php echo e($appointment->cancelled_at->format('j M, g:i A')); ?>: <?php echo e($appointment->cancellation_reason); ?><?php endif; ?></dd></div><div class="sm:col-span-2"><dt class="label">Service address</dt><dd><?php echo e($appointment->addressLine() ?: '—'); ?></dd></div><?php if($appointment->customer_notes): ?><div class="sm:col-span-2"><dt class="label">Customer's notes</dt><dd class="whitespace-pre-line rounded-xl bg-sand p-3"><?php echo e($appointment->customer_notes); ?></dd></div><?php endif; ?></dl>
                <div class="mt-6 flex flex-wrap gap-2">
                    <?php if($appointment->status === 'pending'): ?><form method="post" action="<?php echo e(route('admin.appointments.status', $appointment)); ?>"><?php echo csrf_field(); ?> <?php echo method_field('patch'); ?><input type="hidden" name="status" value="confirmed"><button class="btn-teal btn-sm">Confirm &amp; email customer</button></form><?php endif; ?>
                    <?php if($appointment->isOpen()): ?><form method="post" action="<?php echo e(route('admin.appointments.status', $appointment)); ?>"><?php echo csrf_field(); ?> <?php echo method_field('patch'); ?><input type="hidden" name="status" value="completed"><input type="hidden" name="notify" value="0"><button class="btn-light btn-sm">Mark completed</button></form><form method="post" action="<?php echo e(route('admin.appointments.status', $appointment)); ?>"><?php echo csrf_field(); ?> <?php echo method_field('patch'); ?><input type="hidden" name="status" value="no_show"><input type="hidden" name="notify" value="0"><button class="btn-light btn-sm">No access</button></form>
                    <form method="post" action="<?php echo e(route('admin.appointments.status', $appointment)); ?>" class="flex gap-2" onsubmit="return confirm('Cancel this appointment and email the customer?')"><?php echo csrf_field(); ?> <?php echo method_field('patch'); ?><input type="hidden" name="status" value="cancelled"><input name="reason" placeholder="Reason" class="input input-sm max-w-48"><button class="btn-rust btn-sm">Cancel</button></form><?php endif; ?>
                    <?php if($appointment->status === 'cancelled'): ?><form method="post" action="<?php echo e(route('admin.appointments.status', $appointment)); ?>"><?php echo csrf_field(); ?> <?php echo method_field('patch'); ?><input type="hidden" name="status" value="pending"><input type="hidden" name="notify" value="0"><button class="btn-light btn-sm">Reopen as pending</button></form><?php endif; ?>
                </div>
            </section>
            <section class="card"><h3 class="font-display text-2xl">Reschedule or edit</h3>
                <form method="post" action="<?php echo e(route('admin.appointments.update', $appointment)); ?>" class="mt-4 grid gap-4 sm:grid-cols-3"><?php echo csrf_field(); ?> <?php echo method_field('patch'); ?>
                    <?php if (isset($component)) { $__componentOriginala36faa2d443b9f600fa80effd7afe361 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala36faa2d443b9f600fa80effd7afe361 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.field','data' => ['label' => 'Date','name' => 'date']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Date','name' => 'date']); ?><input name="date" type="date" value="<?php echo e(old('date', $appointment->starts_at->toDateString())); ?>" class="input" required> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $attributes = $__attributesOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__attributesOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $component = $__componentOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__componentOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginala36faa2d443b9f600fa80effd7afe361 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala36faa2d443b9f600fa80effd7afe361 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.field','data' => ['label' => 'Time','name' => 'time']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Time','name' => 'time']); ?><input name="time" type="time" value="<?php echo e(old('time', $appointment->starts_at->format('H:i'))); ?>" class="input" required step="300"> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $attributes = $__attributesOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__attributesOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $component = $__componentOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__componentOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginala36faa2d443b9f600fa80effd7afe361 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala36faa2d443b9f600fa80effd7afe361 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.field','data' => ['label' => 'Duration (min)','name' => 'duration']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Duration (min)','name' => 'duration']); ?><input name="duration" type="number" value="<?php echo e(old('duration', $appointment->durationMinutes())); ?>" min="10" max="480" step="5" class="input" required> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $attributes = $__attributesOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__attributesOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $component = $__componentOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__componentOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginala36faa2d443b9f600fa80effd7afe361 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala36faa2d443b9f600fa80effd7afe361 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.field','data' => ['label' => 'Service type','name' => 'appointment_type_id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Service type','name' => 'appointment_type_id']); ?><select name="appointment_type_id" class="input"><option value="">—</option><?php $__currentLoopData = \App\Models\AppointmentType::orderBy('sort')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($t->id); ?>" <?php if($appointment->appointment_type_id === $t->id): echo 'selected'; endif; ?>><?php echo e($t->name); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $attributes = $__attributesOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__attributesOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $component = $__componentOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__componentOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginala36faa2d443b9f600fa80effd7afe361 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala36faa2d443b9f600fa80effd7afe361 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.field','data' => ['label' => 'Technician','name' => 'team_member_id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Technician','name' => 'team_member_id']); ?><select name="team_member_id" class="input"><option value="">Unassigned</option><?php $__currentLoopData = \App\Models\TeamMember::active()->where('accepts_bookings', true)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($p->id); ?>" <?php if($appointment->team_member_id === $p->id): echo 'selected'; endif; ?>><?php echo e($p->name); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $attributes = $__attributesOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__attributesOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $component = $__componentOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__componentOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginala36faa2d443b9f600fa80effd7afe361 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala36faa2d443b9f600fa80effd7afe361 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.field','data' => ['label' => 'Service address','name' => 'service_address']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Service address','name' => 'service_address']); ?><input name="service_address" value="<?php echo e(old('service_address', $appointment->service_address)); ?>" class="input"> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $attributes = $__attributesOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__attributesOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $component = $__componentOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__componentOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginala36faa2d443b9f600fa80effd7afe361 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala36faa2d443b9f600fa80effd7afe361 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.field','data' => ['label' => 'Staff notes','name' => 'staff_notes','class' => 'sm:col-span-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Staff notes','name' => 'staff_notes','class' => 'sm:col-span-3']); ?><textarea name="staff_notes" rows="3" class="input"><?php echo e(old('staff_notes', $appointment->staff_notes)); ?></textarea> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $attributes = $__attributesOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__attributesOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $component = $__componentOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__componentOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
                    <div class="flex flex-wrap items-center gap-4 sm:col-span-3"><button class="btn-navy btn-sm">Save changes</button><label class="flex items-center gap-2 text-sm"><input type="checkbox" name="notify" value="1" class="check" checked>Email the customer if the time changed</label></div>
                </form>
            </section>
        </div>
        <aside class="space-y-6">
            <section class="card"><h3 class="font-display text-2xl">Job history</h3><ul class="mt-4 divide-y divide-line text-sm"><?php $__currentLoopData = $appointment->customer->appointments->take(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><li class="flex items-center justify-between py-2"><a href="<?php echo e(route('admin.appointments.show', $h)); ?>" class="<?php echo e($h->is($appointment) ? 'font-semibold' : ''); ?> hover:text-teal-deep"><?php echo e($h->starts_at->format('j M Y')); ?><span class="block text-xs text-stone"><?php echo e($h->type?->name); ?></span></a><?php if (isset($component)) { $__componentOriginal9383433c9194439a213c031c55720455 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9383433c9194439a213c031c55720455 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.status','data' => ['status' => $h->status]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($h->status)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9383433c9194439a213c031c55720455)): ?>
<?php $attributes = $__attributesOriginal9383433c9194439a213c031c55720455; ?>
<?php unset($__attributesOriginal9383433c9194439a213c031c55720455); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9383433c9194439a213c031c55720455)): ?>
<?php $component = $__componentOriginal9383433c9194439a213c031c55720455; ?>
<?php unset($__componentOriginal9383433c9194439a213c031c55720455); ?>
<?php endif; ?></li><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul></section>
            <section class="card text-sm"><h3 class="font-display text-2xl">Customer link</h3><p class="mt-2 text-stone">The customer can view or cancel at:</p><input readonly value="<?php echo e($appointment->manageUrl()); ?>" class="input input-sm mt-2 font-mono text-xs" onclick="this.select()"></section>
            <?php if($appointment->status !== 'completed'): ?><form method="post" action="<?php echo e(route('admin.appointments.destroy', $appointment)); ?>" onsubmit="return confirm('Delete this appointment record entirely?')" class="text-right"><?php echo csrf_field(); ?> <?php echo method_field('delete'); ?><button class="text-xs font-semibold text-rust hover:underline">Delete record</button></form><?php endif; ?>
        </aside>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/admin/appointments/show.blade.php ENDPATH**/ ?>