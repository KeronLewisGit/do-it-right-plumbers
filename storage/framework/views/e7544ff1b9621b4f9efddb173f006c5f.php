<!doctype html><html lang="en" class="h-full"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="robots" content="noindex"><title>Staff login · Do It Right Plumbers</title><link rel="icon" href="<?php echo e(asset('favicon.png')); ?>"><?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?></head>
<body class="flex min-h-full items-center justify-center bg-navy p-6">
    <form method="post" action="<?php echo e(route('admin.login.attempt')); ?>" class="w-full max-w-sm rounded-3xl bg-cream p-8 shadow-soft"><?php echo csrf_field(); ?>
        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Do It Right Plumbers" class="size-14 rounded-full badge-ring"><h1 class="mt-6 font-display text-3xl font-semibold">Staff sign in</h1>
        <div class="mt-6 space-y-4">
            <?php if (isset($component)) { $__componentOriginala36faa2d443b9f600fa80effd7afe361 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala36faa2d443b9f600fa80effd7afe361 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.field','data' => ['label' => 'Email','name' => 'email']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Email','name' => 'email']); ?><input id="email" name="email" type="email" value="<?php echo e(old('email')); ?>" required autofocus class="input" autocomplete="username"> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.field','data' => ['label' => 'Password','name' => 'password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Password','name' => 'password']); ?><input id="password" name="password" type="password" required class="input" autocomplete="current-password"> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $attributes = $__attributesOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__attributesOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala36faa2d443b9f600fa80effd7afe361)): ?>
<?php $component = $__componentOriginala36faa2d443b9f600fa80effd7afe361; ?>
<?php unset($__componentOriginala36faa2d443b9f600fa80effd7afe361); ?>
<?php endif; ?>
            <label class="flex items-center gap-2 text-sm"><input type="checkbox" name="remember" class="check">Keep me signed in</label>
        </div>
        <button class="btn-teal mt-6 w-full">Sign in</button>
        <p class="mt-5 text-center text-xs text-stone"><a href="<?php echo e(route('home')); ?>" class="hover:underline">← Back to the website</a></p>
    </form>
</body></html>
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/admin/login.blade.php ENDPATH**/ ?>