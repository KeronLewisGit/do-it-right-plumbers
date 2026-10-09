<x-site.layout title="Book Online" description="Book a plumber online in Orange County: pick a service, choose an arrival window and we confirm by email. $49 diagnostics, $93-or-free drain clearing, free repipe and water heater estimates.">
@php($co = config('company'))
@php($typeData = $types->map(fn ($t) => ['slug' => $t->slug, 'name' => $t->name, 'description' => $t->description, 'duration' => $t->duration_minutes, 'free' => $t->is_free, 'virtual' => $t->is_virtual, 'provider' => $t->provider?->name])->values())
<section class="wrap intro" x-data="booking({ types: @js($typeData), slotsUrl: @js(route('book.slots')), initialType: @js(old('type', $selected?->slug)), initialDate: @js(old('date')), initialTime: @js(old('time')) })">
    <div class="grid gap-12 lg:grid-cols-12">
        <div class="lg:col-span-8">
            <p class="eyebrow">Book online</p>
            <h1 class="h-display mt-4">Pick an arrival window that <em>suits you</em>.</h1>
            <p class="lede mt-4">Three quick steps. We confirm by email, usually within the hour during dispatch hours, and your technician texts when they are on the way.</p>
            @if ($errors->any())<div class="mt-6 rounded-2xl bg-red-50 px-5 py-4 text-sm text-red-900 ring-1 ring-red-200"><p class="font-semibold">Please check the form.</p><ul class="mt-1 list-inside list-disc">@foreach ($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>@endif

            <form method="post" action="{{ route('book.store') }}" class="mt-10 space-y-8">
                @csrf<input type="text" name="website" tabindex="-1" autocomplete="off" class="hidden">
                <input type="hidden" name="type" :value="type"><input type="hidden" name="date" :value="date"><input type="hidden" name="time" :value="time">

                {{-- Step 1 --}}
                <section class="card">
                    <header class="flex items-center justify-between"><h2 class="flex items-center gap-3 font-display text-2xl font-semibold"><span class="flex size-8 items-center justify-center rounded-full bg-navy text-sm text-teal">1</span>What do you need?</h2><button type="button" x-show="type && step !== 1" @click="step = 1" class="text-xs font-semibold text-teal-deep hover:underline">Change</button></header>
                    <div class="mt-5 grid gap-3 sm:auto-rows-fr sm:grid-cols-2" x-show="step === 1 || !type">
                        <template x-for="t in types" :key="t.slug">
                            <button type="button" @click="choose(t.slug)" :aria-pressed="type === t.slug" class="flex h-full items-start gap-3 rounded-2xl p-4 text-left ring-1 transition hover:ring-teal" :class="type === t.slug ? 'bg-teal-soft ring-teal' : 'bg-cream ring-line'">
                                <span class="mt-0.5 inline-flex size-5 shrink-0 items-center justify-center rounded-full ring-1 ring-navy/20" :class="type === t.slug && 'bg-navy text-teal ring-navy'"><svg x-show="type === t.slug" class="size-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m5 12 4.5 4.5L19 7"/></svg></span>
                                <span class="flex min-w-0 flex-1 flex-col"><span class="font-semibold" x-text="t.name"></span><span class="mt-1 block text-xs text-stone" x-text="t.description"></span><span class="mt-auto flex flex-wrap gap-1.5 pt-3"><span class="chip bg-white text-stone ring-1 ring-line" x-text="t.duration + ' min'"></span><span x-show="t.free" class="chip bg-sage text-sage-deep">Free</span><span x-show="t.virtual" class="chip bg-sky-50 text-sky-800">Video call</span><span x-show="t.provider" class="chip bg-white text-stone ring-1 ring-line" x-text="'With ' + (t.provider || '').split(' ')[0]"></span></span></span>
                            </button>
                        </template>
                    </div>
                    <p x-show="type && step !== 1" x-cloak class="mt-3 text-sm text-stone">Selected: <strong class="text-navy" x-text="selected?.name"></strong></p>
                </section>

                {{-- Step 2 --}}
                <section class="card" x-show="type" x-cloak>
                    <header class="flex items-center justify-between"><h2 class="flex items-center gap-3 font-display text-2xl font-semibold"><span class="flex size-8 items-center justify-center rounded-full bg-navy text-sm text-teal">2</span>Pick a day and an arrival window</h2><button type="button" x-show="time && step !== 2" @click="step = 2" class="text-xs font-semibold text-teal-deep hover:underline">Change</button></header>
                    <div class="mt-5 grid gap-6 md:grid-cols-2" x-show="step === 2 || !time">
                        <div>
                            <div class="flex items-center justify-between"><button type="button" @click="prevMonth()" :disabled="!canPrev" class="inline-flex size-9 items-center justify-center rounded-full ring-1 ring-line disabled:opacity-30" aria-label="Previous month"><x-icon name="chevron" class="size-4 rotate-180" /></button><p class="font-semibold" x-text="monthLabel"></p><button type="button" @click="nextMonth()" :disabled="!canNext" class="inline-flex size-9 items-center justify-center rounded-full ring-1 ring-line disabled:opacity-30" aria-label="Next month"><x-icon name="chevron" class="size-4" /></button></div>
                            <div class="mt-4 grid grid-cols-7 gap-1 text-center text-[11px] font-semibold uppercase tracking-wider text-stone">@foreach (['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'] as $d)<span>{{ $d }}</span>@endforeach</div>
                            <div class="mt-1 grid grid-cols-7 gap-1">
                                <template x-for="(c, i) in grid" :key="i"><div><button type="button" x-show="c" @click="pick(c.iso)" :disabled="!c?.open" :aria-pressed="date === c?.iso" :aria-label="c ? new Date(c.iso + 'T00:00:00').toLocaleDateString('en-US', { weekday: 'long', month: 'long', day: 'numeric' }) + (c.open ? '' : ', no windows') : ''" class="flex aspect-square w-full items-center justify-center rounded-xl text-sm font-semibold transition disabled:text-stone/40" :class="date === c?.iso ? 'bg-navy text-teal' : (c?.open ? 'bg-teal-soft text-navy hover:bg-teal' : '')" x-text="c?.d"></button></div></template>
                            </div>
                            <p class="mt-3 text-xs text-stone" x-show="loading" aria-live="polite">Checking the schedule…</p>
                            <p class="mt-3 text-xs text-stone" x-show="!loading && !openDays.length">No online windows in the next {{ $horizon }} days for this service. Call us on {{ $co['phone'] }} and we will fit you in.</p>
                        </div>
                        <div>
                            <p class="label" x-text="date ? new Date(date + 'T00:00:00').toLocaleDateString('en-US', { weekday: 'long', month: 'long', day: 'numeric' }) : 'Choose a day first'"></p>
                            <div class="mt-2 grid grid-cols-3 gap-2" x-show="slots.length">
                                <template x-for="s in slots" :key="s.time"><button type="button" :disabled="!s.available" @click="pickTime(s.time)" :aria-pressed="time === s.time" class="rounded-xl px-2 py-2.5 text-sm font-semibold ring-1 transition disabled:line-through disabled:opacity-40" :class="time === s.time ? 'bg-navy text-teal ring-navy' : 'bg-cream ring-line hover:ring-teal'" x-text="s.label"></button></template>
                            </div>
                            <p class="mt-2 text-xs text-stone" x-show="date && !loading && !slots.some(s => s.available)" role="status">Every truck is booked that day. Try another date, or call for emergencies.</p>
                        </div>
                    </div>
                    <p x-show="time && step !== 2" x-cloak class="mt-3 text-sm text-stone">Selected: <strong class="text-navy" x-text="summary"></strong></p>
                </section>

                {{-- Step 3 --}}
                <section id="details" class="card" x-show="time" x-cloak>
                    <h2 class="flex items-center gap-3 font-display text-2xl font-semibold"><span class="flex size-8 items-center justify-center rounded-full bg-navy text-sm text-teal">3</span>Your details</h2>
                    <div class="mt-5 grid gap-5 sm:grid-cols-2">
                        <x-site.field label="First name" name="first_name" required><input id="first_name" name="first_name" value="{{ old('first_name') }}" required class="input" autocomplete="given-name"></x-site.field>
                        <x-site.field label="Last name" name="last_name" required><input id="last_name" name="last_name" value="{{ old('last_name') }}" required class="input" autocomplete="family-name"></x-site.field>
                        <x-site.field label="Email" name="email" required hint="Your confirmation goes here."><input id="email" name="email" type="email" value="{{ old('email') }}" required class="input" autocomplete="email"></x-site.field>
                        <x-site.field label="Mobile phone" name="phone" required hint="Your technician texts this number on the way. By giving us your number you agree to receive texts about this job (arrival updates, quotes, follow-ups). Reply STOP to opt out."><input id="phone" name="phone" type="tel" value="{{ old('phone') }}" required class="input" autocomplete="tel" placeholder="(714) 000-0000"></x-site.field>
                        <x-site.field label="Service address" name="address" required class="sm:col-span-2" hint="Where the truck should go."><input id="address" name="address" value="{{ old('address') }}" required class="input" autocomplete="street-address" placeholder="123 Main St, Orange, CA 92865"></x-site.field>
                        <x-site.field label="What is going on?" name="notes" class="sm:col-span-2"><textarea id="notes" name="notes" rows="3" class="input" placeholder="What you are seeing, where, and how long it has been happening. Gate codes and parking notes help too.">{{ old('notes') }}</textarea></x-site.field>
                        <label class="flex items-center gap-3 text-sm sm:col-span-2"><input type="checkbox" name="new_customer" value="1" class="check" @checked(old('new_customer'))>This is my first time using Do It Right</label>
                        <label class="flex items-center gap-3 text-sm sm:col-span-2"><input type="checkbox" name="marketing_opt_in" value="1" class="check" @checked(old('marketing_opt_in'))>Send me seasonal tips and the occasional coupon</label>
                    </div>
                    <div class="mt-7 flex flex-wrap items-center gap-4"><button class="btn-teal btn-lg">Request this window</button><p class="text-xs text-stone">By booking you agree to our <a href="{{ route('privacy') }}" class="underline">privacy policy</a>. Nothing is charged online. You approve the price in person before any work starts.</p></div>
                </section>
            </form>
        </div>
        <aside class="space-y-5 lg:col-span-4">
            <div class="card-sand"><p class="eyebrow">Your booking</p><p class="mt-3 font-display text-2xl font-semibold" x-text="summary || 'Nothing selected yet'"></p><p class="mt-2 text-sm text-stone">Pending until the office confirms. You can cancel from the link in your email.</p></div>
            <div class="card"><p class="eyebrow">Dispatch hours</p><dl class="mt-4 divide-y divide-line text-sm">@foreach ($hours as $d => $h)<div class="flex justify-between py-2"><dt class="font-semibold">{{ $d }}</dt><dd class="{{ $h === 'Closed' ? 'text-stone' : '' }}">{{ $h }}</dd></div>@endforeach</dl></div>
            <div class="rounded-3xl bg-rust p-6 text-white"><p class="eyebrow text-white/90">It can't wait?</p><p class="mt-3 text-sm text-white/90">Burst pipe, flooding or sewage: call <a href="tel:{{ $co['phone_href'] }}" class="font-semibold text-white underline">{{ $co['phone'] }}</a> now. We answer 24/7 and skip the online queue for emergencies.</p></div>
            <div class="card"><p class="eyebrow">Prefer to talk?</p><p class="mt-3 text-sm text-stone">Call <a href="tel:{{ $co['phone_href'] }}" class="font-semibold text-navy">{{ $co['phone'] }}</a> or <a href="sms:{{ $co['sms'] }}" class="font-semibold text-navy">text us</a>. A real person in Orange picks up.</p></div>
        </aside>
    </div>
</section>
</x-site.layout>
