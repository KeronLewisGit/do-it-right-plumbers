<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => null, 'description' => null]));

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

foreach (array_filter((['title' => null, 'description' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php ($co = config('company')); ?>
<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($title ? $title.' · ' : ''); ?><?php echo e($co['name']); ?> · Orange County, CA</title>
    <meta name="description" content="<?php echo e($description ?? 'Do It Right Plumbers is Orange County\'s friendly, licensed plumbing company: repipes, water heaters, drains, leaks and filtration with upfront pricing. Done right or it\'s free. Book online.'); ?>">
    <meta property="og:title" content="<?php echo e($title ?? $co['name']); ?>">
    <meta property="og:description" content="<?php echo e($description ?? $co['tagline']); ?>">
    <meta property="og:image" content="<?php echo e(asset('images/site/hero-plumber.jpg')); ?>">
    <link rel="icon" href="<?php echo e(asset('favicon.png')); ?>">
    <script type="application/ld+json"><?php echo json_encode(['<?php $__contextArgs = [];
if (context()->has($__contextArgs[0])) :
if (isset($value)) { $__contextPrevious[] = $value; }
$value = context()->get($__contextArgs[0]); ?>' => 'https://schema.org', '@type' => 'Plumber', 'name' => $co['name'], 'legalName' => $co['legal'], 'telephone' => $co['phone_href'], 'email' => $co['email'], 'url' => url('/'), 'image' => asset('images/logo.png'), 'priceRange' => '$$', 'foundingDate' => (string) $co['founded'], 'address' => ['@type' => 'PostalAddress', 'streetAddress' => $co['address']['line1'], 'addressLocality' => 'Orange', 'addressRegion' => 'CA', 'postalCode' => '92865', 'addressCountry' => 'US'], 'areaServed' => array_map(fn ($c) => ['@type' => 'City', 'name' => $c], array_keys($co['areas'])), 'sameAs' => array_values($co['social']), 'aggregateRating' => ['@type' => 'AggregateRating', 'ratingValue' => $co['stats']['rating'], 'reviewCount' => preg_replace('/\D/', '', $co['stats']['reviews'])]], JSON_UNESCAPED_SLASHES); ?></script>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="min-h-full flex flex-col">
    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:left-3 focus:z-50 btn-teal">Skip to content</a>
    <?php if (isset($component)) { $__componentOriginal537f77201f5d14e0b62bd5ac84d2648c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal537f77201f5d14e0b62bd5ac84d2648c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal537f77201f5d14e0b62bd5ac84d2648c)): ?>
<?php $attributes = $__attributesOriginal537f77201f5d14e0b62bd5ac84d2648c; ?>
<?php unset($__attributesOriginal537f77201f5d14e0b62bd5ac84d2648c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal537f77201f5d14e0b62bd5ac84d2648c)): ?>
<?php $component = $__componentOriginal537f77201f5d14e0b62bd5ac84d2648c; ?>
<?php unset($__componentOriginal537f77201f5d14e0b62bd5ac84d2648c); ?>
<?php endif; ?>
    <main id="main" class="flex-1">
        <?php if(session('status')): ?><div class="wrap pt-6"><div role="status" class="rounded-2xl bg-sage px-5 py-4 text-sm font-semibold text-sage-deep ring-1 ring-sage-deep/20"><?php echo e(session('status')); ?></div></div><?php endif; ?>
        <?php echo e($slot); ?>

    </main>
    <?php if (isset($component)) { $__componentOriginal21120ef38d90a9d572330a5268a23b04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal21120ef38d90a9d572330a5268a23b04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal21120ef38d90a9d572330a5268a23b04)): ?>
<?php $attributes = $__attributesOriginal21120ef38d90a9d572330a5268a23b04; ?>
<?php unset($__attributesOriginal21120ef38d90a9d572330a5268a23b04); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal21120ef38d90a9d572330a5268a23b04)): ?>
<?php $component = $__componentOriginal21120ef38d90a9d572330a5268a23b04; ?>
<?php unset($__componentOriginal21120ef38d90a9d572330a5268a23b04); ?>
<?php endif; ?>
    <a href="tel:<?php echo e($co['phone_href']); ?>" class="fixed bottom-5 right-5 z-40 inline-flex items-center gap-2 rounded-full bg-navy px-4 py-3 text-sm font-semibold text-cream shadow-soft ring-1 ring-white/10 transition hover:bg-teal hover:text-navy sm:bottom-6 sm:right-6" aria-label="Call <?php echo e($co['phone']); ?>"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
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
<?php endif; ?><span class="hidden sm:inline"><?php echo e($co['phone']); ?></span><span class="sm:hidden">Call now</span></a>
</body>
</html>
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/components/site/layout.blade.php ENDPATH**/ ?>