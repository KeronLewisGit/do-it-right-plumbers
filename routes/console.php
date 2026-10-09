<?php

use Illuminate\Support\Facades\Schedule;

// Hostinger: add a cron entry `* * * * * cd ~/public_html && php artisan schedule:run >> /dev/null 2>&1`.
// Reminders go out at 5 PM Pacific for the next day's confirmed visits.
Schedule::command('company:remind')->dailyAt('17:00');
