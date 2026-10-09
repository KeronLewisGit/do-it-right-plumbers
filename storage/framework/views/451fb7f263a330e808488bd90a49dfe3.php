<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['member']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['member']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php if($member->photo): ?>
    <div <?php echo e($attributes->merge(['class' => 'overflow-hidden rounded-full bg-sand ring-2 ring-white'])); ?>><img src="<?php echo e($member->photoUrl()); ?>" alt="<?php echo e($member->name); ?>" class="h-full w-full object-cover" loading="lazy"></div>
<?php else: ?>
    <div <?php echo e($attributes->merge(['class' => 'flex items-center justify-center rounded-full bg-navy font-display font-bold text-teal ring-4 ring-teal/30'])); ?> aria-label="<?php echo e($member->name); ?>"><?php echo e($member->initials()); ?></div>
<?php endif; ?>
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/components/site/avatar.blade.php ENDPATH**/ ?>