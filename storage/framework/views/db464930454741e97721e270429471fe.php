<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['status']));

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

foreach (array_filter((['status']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php ($tone = match ($status) { 'confirmed', 'booked', 'completed' => 'tone-green', 'pending', 'new' => 'tone-amber', 'contacted' => 'tone-blue', 'cancelled', 'no_show' => 'tone-red', default => 'tone-slate' }); ?>
<span <?php echo e($attributes->merge(['class' => 'chip '.$tone])); ?>><?php echo e(ucfirst(str_replace('_', ' ', $status))); ?></span>
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/components/admin/status.blade.php ENDPATH**/ ?>