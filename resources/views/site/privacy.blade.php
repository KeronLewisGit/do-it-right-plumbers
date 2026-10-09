<x-site.layout title="Privacy Policy">
<x-site.page-hero eyebrow="Legal" title="Privacy policy" lede="What we collect through this website, how we use it, and the choices you have." />
<section class="wrap max-w-3xl section-tail">
    <div class="prose-site">
        <p>{{ config('company.legal') }} ("we") respects your privacy. This policy explains what we collect through this website and how we use it.</p>
        <h2>What we collect</h2><p>When you book a visit, request a quote or join our email list we collect the details you give us: your name, email address, phone number, the service address and anything you write in the message or notes field. We also keep a record of the visits you book with us.</p>
        <h2>How we use it</h2><p>To schedule and carry out your service visit, to reply to your requests, to send booking confirmations and reminders by email or text, and, only if you opted in, occasional tips and offers. We never sell your information.</p>
        <h2>Who sees it</h2><p>Our office, dispatch and field team, and the service providers that run our website hosting, email and text messaging. Invoices and payment records are held separately in our field-service software.</p>
        <h2>Your choices</h2><p>You can ask us to update or delete your website details at any time by emailing {{ config('company.email') }}. Every marketing email contains an unsubscribe link, and you can reply STOP to any text.</p>
        <h2>Text messages</h2><p>If you give us a phone number when booking or requesting a quote, we may send transactional texts about that job: arrival updates, quotes and follow-ups. Message frequency varies and message and data rates may apply. Reply STOP to opt out at any time or HELP for help.</p>
        <h2>Accessibility</h2><p>We want everyone to be able to use this website. It is built to the relevant parts of the Web Content Accessibility Guidelines, and we keep improving it. If you have difficulty with any page or feature, call {{ config('company.phone') }} or email {{ config('company.email') }} with "Accessibility" in the subject line and we will make every reasonable effort to help.</p>
        <h2>Cookies</h2><p>This site uses only the cookies it needs to work, such as a session cookie for forms. We do not use advertising trackers.</p>
        <h2>Photo credits</h2><p>Photography on this site is used under Creative Commons licences from Wikimedia Commons and Flickr contributors via Openverse. Individual credits are listed in the site's README.</p>
        <p class="text-sm text-stone">Last updated {{ now()->format('F Y') }}.</p>
    </div>
</section>
</x-site.layout>
