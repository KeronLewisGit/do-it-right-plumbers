<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => 'Ready when you are. Usually today.', 'text' => 'Book an arrival window online in under a minute, or call and a real person in our Orange office will pick up. Upfront pricing, no commission, done right or it\'s free.', 'image' => 'images/site/van.jpg']));

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

foreach (array_filter((['title' => 'Ready when you are. Usually today.', 'text' => 'Book an arrival window online in under a minute, or call and a real person in our Orange office will pick up. Upfront pricing, no commission, done right or it\'s free.', 'image' => 'images/site/van.jpg']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<section class="wrap">
    <div class="relative overflow-hidden rounded-[2.5rem] bg-navy text-cream">
        <img src="<?php echo e(asset($image)); ?>" alt="" class="absolute inset-0 h-full w-full object-cover opacity-30" loading="lazy">
        <div class="absolute inset-0 bg-gradient-to-r from-navy via-navy/85 to-navy/40"></div>
        <div class="relative grid gap-8 px-8 py-14 sm:px-14 sm:py-20 lg:grid-cols-2 lg:items-center">
            <div><p class="eyebrow text-teal"><?php echo e(config('company.tagline')); ?></p><h2 class="h-section mt-4 text-cream"><?php echo $title; ?></h2><p class="mt-5 max-w-lg text-cream/75"><?php echo e($text); ?></p></div>
            <div class="flex flex-wrap gap-3 lg:justify-end"><a href="<?php echo e(route('book')); ?>" class="btn-teal btn-lg">Book an arrival window</a><a href="tel:<?php echo e(config('company.phone_href')); ?>" class="btn-lg btn bg-white/10 text-cream ring-1 ring-white/20 hover:bg-white hover:text-navy"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'phone','class' => 'size-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'phone','class' => 'size-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?><?php echo e(config('company.phone')); ?></a></div>
        </div>
    </div>
</section>
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/components/site/cta.blade.php ENDPATH**/ ?>