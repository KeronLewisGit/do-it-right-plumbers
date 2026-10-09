<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['eyebrow' => null, 'title', 'lede' => null, 'center' => false, 'light' => false]));

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

foreach (array_filter((['eyebrow' => null, 'title', 'lede' => null, 'center' => false, 'light' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<div <?php echo e($attributes->merge(['class' => 'max-w-3xl '.($center ? 'mx-auto text-center' : '')])); ?>>
    <?php if($eyebrow): ?><p class="eyebrow <?php echo e($light ? 'text-teal' : ''); ?> <?php echo e($center ? 'justify-center' : ''); ?>"><?php echo e($eyebrow); ?></p><?php endif; ?>
    <h2 class="h-section mt-4 <?php echo e($light ? 'text-cream' : ''); ?>"><?php echo $title; ?></h2>
    <?php if($lede): ?><p class="lede mt-5 <?php echo e($light ? 'text-cream/70' : ''); ?>"><?php echo e($lede); ?></p><?php endif; ?>
    <?php echo e($slot); ?>

</div>
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/components/site/heading.blade.php ENDPATH**/ ?>