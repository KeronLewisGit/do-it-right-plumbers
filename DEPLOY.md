# Do It Right Plumbers — deploying to Hostinger (`public_html`)

The whole Laravel project lives in `public_html`. The root `.htaccess` sends every request into `public/`
and blocks direct access to `.env`, `vendor/`, `storage/` and the rest. `public/build/` (compiled CSS, JS
and fonts) is committed, so the server needs no Node and no build step.

## 1. Before you clone (hPanel)

1. **PHP** — Websites → Manage → PHP configuration → **8.3** (or newer). Keep the default extensions
   (`pdo_mysql`, `mbstring`, `fileinfo`, `gd`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`, `bcmath`). The lock file
   is resolved for PHP 8.3, so `composer install` works on Hostinger's default binary.
2. **MySQL** — Databases → MySQL Databases → create a database and a user with all privileges. Note the
   database name, username and password (all start with `u…_`).
3. **Email** — Emails → create the mailbox `info@doitrightplumbers.com` (or whichever address the client wants
   bookings sent from) and note its password. SMTP is `smtp.hostinger.com`, port 465, SSL.
4. **SSL** — Security → SSL → make sure the certificate is active and "Force HTTPS" is on.
5. **SSH** — Advanced → SSH Access → enable it and note the host, port and username.

## 2. Clone

Hostinger's `public_html` already contains a placeholder `default.php`, and `git clone` refuses a non-empty
folder, so empty it first and clone straight into it:

```sh
ssh -p 65002 u000000000@your-server-ip         # values from hPanel → SSH Access
cd ~/domains/doitrightplumbers.com              # your domain folder
rm -rf public_html/*                            # remove Hostinger's placeholder (fresh account only)
git clone https://github.com/<you>/do-it-right-plumbers.git public_html
cd public_html
php -v                                          # must be 8.3 or newer
```

For a private repository use a GitHub personal access token as the password when prompted, or add the
server's SSH key (`cat ~/.ssh/id_rsa.pub`, create one with `ssh-keygen` if missing) as a deploy key on the repo.

## 3. Install and configure

```sh
composer install --no-dev --optimize-autoloader --no-interaction
# if "composer: command not found": php /usr/local/bin/composer install --no-dev --optimize-autoloader --no-interaction

cp .env.hostinger.example .env
php artisan key:generate --force
nano .env
```

In `.env`, set:

| Key | Value |
|---|---|
| `APP_URL` | `https://www.doitrightplumbers.com` (match the domain exactly, with or without `www`) |
| `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` | from step 1.2 |
| `MAIL_USERNAME`, `MAIL_PASSWORD`, `MAIL_FROM_ADDRESS` | the mailbox from step 1.3 |
| `COMPANY_NOTIFY_EMAIL` | where new bookings and quote requests should be emailed |
| `COMPANY_PHONE`, `COMPANY_PHONE_HREF`, `COMPANY_SMS` | confirm the number the client wants published |

Everything else in the example file is already set for production (`APP_ENV=production`, `APP_DEBUG=false`,
database sessions and cache, synchronous mail).

```sh
php artisan migrate --force                         # creates every table
php artisan db:seed --class=ContentSeeder --force   # services, team, booking types, reviews, tips (safe to re-run)
php artisan company:admin                           # creates the admin login; prompts for a 12+ character password
chmod -R ug+rwx storage bootstrap/cache public/uploads
php artisan optimize                                # caches config, routes and views
```

## 4. Cron for reminder emails

hPanel → Advanced → Cron Jobs → add a job that runs **every minute**:

```
* * * * * cd ~/domains/doitrightplumbers.com/public_html && php artisan schedule:run >> /dev/null 2>&1
```

Laravel's scheduler then sends the "your visit is tomorrow" emails at 5 PM Pacific each day.

## 5. Verify

- `https://www.doitrightplumbers.com/` loads with fonts and styles, and the hero turns as you scroll.
- `/.env`, `/vendor/`, `/storage/` return 403. `/up` returns OK.
- `/admin/login` signs you in. Admin → Hours & dispatch: confirm hours, trucks, minimum notice and the notification email.
- In a private window, `/book` a visit: it appears on the admin dashboard and both emails arrive (customer + office).
- Confirm it from the dashboard: the customer gets the confirmation email.
- Admin → Reviews, Team, Services: replace the placeholder bios, review quotes and photos with the client's own.

## Updating later

```sh
cd ~/domains/doitrightplumbers.com/public_html
git pull
composer install --no-dev --optimize-autoloader --no-interaction
php artisan migrate --force
php artisan optimize:clear && php artisan optimize
```

Photos uploaded in Admin live in `public/uploads/` (gitignored). Back up that folder together with the database.

## If something goes wrong

| Symptom | Fix |
|---|---|
| Blank page or 500 | `php artisan optimize:clear`, then check `storage/logs/laravel.log`; confirm `APP_KEY` is set and `storage/` is writable. |
| No styles or fonts | `public/build/` must be present in the repo (it is committed); confirm the request for `/build/assets/…` is not 403 in the root `.htaccess`. |
| "composer install" complains about PHP version | `php -v` is older than 8.3; switch in hPanel or call the binary directly: `/opt/alt/php83/usr/bin/php /usr/local/bin/composer install --no-dev`. |
| Emails not arriving | Send a test from `php artisan tinker` with `Mail::raw('test', fn ($m) => $m->to('you@example.com')->subject('test'));` and read the error; check the mailbox password and that port 465 with `MAIL_SCHEME=smtps` is used. |
| 419 "page expired" on forms | `APP_URL` does not match the domain actually in the browser (www vs non-www), or the `sessions` table is missing: run `php artisan migrate --force`. |
| Admin uploads fail | `chmod -R ug+rwx public/uploads`. |
