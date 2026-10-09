# Do It Right Plumbers

A complete website and dispatch backend for Do It Right Plumbers, Orange, California. Laravel 13, Tailwind CSS 4, Alpine.js, SQLite locally and MySQL on Hostinger. Built as a portfolio piece on the same stack as the Smile Inn Dental site.

## What is in it

**Public site**: home, seven service pages (whole-house repipes as the flagship with its own long-form page, water heaters, drains and sewer, leak detection, water filtration, plumbing repair, emergency), about, team with individual profiles, reviews, sixteen service-area city pages, a tips blog, contact and quote request, newsletter sign-up and online booking. Schema.org `Plumber` markup, XML sitemap and Open Graph tags on every page.

**Online booking**: customers pick a service type (repair visit, drain clearing, water heater service, free repipe estimate, free water heater estimate, leak detection, whole-home inspection, free virtual estimate, emergency), a day from a live calendar and an open arrival window, and give the service address. Windows come from the dispatch hours, the window size and the number of trucks set in Admin. Customers get a confirmation email with a link to view or cancel; the office is emailed every request. Reminders go out the afternoon before each confirmed visit.

**Admin** (`/admin`): dashboard, week calendar, jobs (confirm, complete, no-access, cancel, reschedule, manual booking with service address), customers, quote requests, newsletter subscribers with CSV export, and full editing of services, team, reviews, tips posts and service types. Admins also manage dispatch hours, booking rules (window size, trucks, minimum notice, horizon) and staff logins.

## Brand

The company's own 1930s-style badge logo, a Tiffany-inspired teal (`#44b5a4`), deep navy (`#14283a`) and cream (`#faf6ee`), with brass for stars and badges. Display type is Fraunces, body is Manrope, both self-hosted through Bunny Fonts at build time.

## Local setup

```sh
composer install && npm install
cp .env.example .env && php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed          # content + demo jobs, admin login below
npm run build && php artisan serve --port=8152
```

| Login | Email | Password |
|---|---|---|
| Admin | admin@doitright.test | password |

Run `php artisan test` for the feature suite. See `DEPLOY.md` for Hostinger.

## Facts, placeholders and what to confirm with the client

Company facts (name, phone, address, hours, founding story, service list, guarantee, specials, service area, review rating) were taken from the company's public Instagram, Linktree, LinkedIn, BBB profile, Facebook listing and a trade-press feature. Everything else is editable in Admin.

- **Email address** `service@doitrightplumbers.com` is a placeholder: the public profiles do not list one.
- **Team bios** are illustrative. Edan and Aviran Bar-Lev (founders), Anthony Cumpiam and Payton White appear in public profiles; titles and bios should be confirmed.
- **Reviews** in the seeder are sample quotes written to match the themes of the company's real Google reviews. Replace them with real ones in Admin → Reviews.
- **License number** is not shown until `COMPANY_LICENSE` is set in `.env`.
- **TikTok and YouTube URLs** are guessed from the Instagram handle.

## Photo credits

Photography is used under Creative Commons licences via Openverse. Replace with the company's own photos in Admin where possible.

- Plumber under sink (hero): "Plumber fixing pipes", Flickr, CC BY. Plumber at work: Wikimedia Commons, CC BY.
- Technician portrait: "construction building site foreman", Flickr, CC BY-SA. Toilet inspection: "Plumber from Rescue Rooter inspects the toilet", Flickr, CC BY.
- Drain camera: "CCTV Inspection of Weeping Tile with the VIPER Drain Camera", Wikimedia Commons, CC BY-SA. Soldering: "Propane torch soldering copper pipe", Wikimedia Commons, CC BY.
- Tankless heaters: "Tankless water heaters", Wikimedia Commons, CC BY-SA. Tankless unit: "Tankless Water Heater", Flickr, CC BY.
- Leaking pipe: "Leaking Pipe", Flickr, CC BY. Filtration manifold: "Whole Home Water Filtration System in Arizona", Flickr, CC BY-SA.
- Pipe wrenches: "Plumbing Pipe Wrench Plumber / Repair Edited 2020", Flickr, CC BY. Pipe cap: "Pipe Hose Drain Knob Tube Tool Edited 2020", Flickr, CC BY.
- Faucet: "Faucets", Flickr, CC BY. Kitchen: "Kitchen", Flickr, CC BY. Bathrooms: "Bathroom in Luxury Home" (public domain), "Master Bathroom" and "Bathroom Remodel", Flickr, CC BY. House: "Balboa Island, Newport Beach", Flickr, CC BY-SA.
