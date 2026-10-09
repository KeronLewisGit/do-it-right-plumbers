<?php if (isset($component)) { $__componentOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal13c2ac5f3b2b74a0bb24b2968555c519 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.layout','data' => ['title' => 'Privacy Policy']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Privacy Policy']); ?>
<section class="wrap max-w-3xl py-16 lg:py-24">
    <p class="eyebrow">Legal</p><h1 class="h-display mt-5">Privacy policy</h1>
    <div class="prose-site mt-10">
        <p><?php echo e(config('company.legal')); ?> ("we") respects your privacy. This policy explains what we collect through this website and how we use it.</p>
        <h2>What we collect</h2><p>When you book a visit, request a quote or join our email list we collect the details you give us: your name, email address, phone number, the service address and anything you write in the message or notes field. We also keep a record of the visits you book with us.</p>
        <h2>How we use it</h2><p>To schedule and carry out your service visit, to reply to your requests, to send booking confirmations and reminders by email or text, and, only if you opted in, occasional tips and offers. We never sell your information.</p>
        <h2>Who sees it</h2><p>Our office, dispatch and field team, and the service providers that run our website hosting, email and text messaging. Invoices and payment records are held separately in our field-service software.</p>
        <h2>Your choices</h2><p>You can ask us to update or delete your website details at any time by emailing <?php echo e(config('company.email')); ?>. Every marketing email contains an unsubscribe link, and you can reply STOP to any text.</p>
        <h2>Cookies</h2><p>This site uses only the cookies it needs to work, such as a session cookie for forms. We do not use advertising trackers.</p>
        <h2>Photo credits</h2><p>Photography on this site is used under Creative Commons licences from Wikimedia Commons and Flickr contributors via Openverse. Individual credits are listed in the site's README.</p>
        <p class="text-sm text-stone">Last updated <?php echo e(now()->format('F Y')); ?>.</p>
    </div>
</section>
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
<?php /**PATH /Users/keronlewis/do-it-right-plumbers/resources/views/site/privacy.blade.php ENDPATH**/ ?>