<?php

namespace App\Console\Commands;

use App\Models\Appointment;
use App\Notifications\AppointmentMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

/** Emails every customer with a confirmed visit the day before. Run from the scheduler. */
class SendAppointmentReminders extends Command
{
    protected $signature = 'company:remind';

    protected $description = 'Email reminders for tomorrow\'s confirmed visits';

    public function handle(): int
    {
        $due = Appointment::with('customer')->where('status', 'confirmed')->whereNull('reminded_at')->whereDate('starts_at', now()->addDay()->toDateString())->get();
        foreach ($due as $a) {
            if (! $a->customer->email) {
                continue;
            }
            try {
                Notification::route('mail', [$a->customer->email => $a->customer->fullName()])->notify(new AppointmentMail($a, 'reminder'));
                $a->forceFill(['reminded_at' => now()])->save();
            } catch (\Throwable $e) {
                report($e);
            }
        }
        $this->info($due->count().' reminder(s) processed.');

        return self::SUCCESS;
    }
}
