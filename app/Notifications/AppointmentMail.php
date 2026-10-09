<?php

namespace App\Notifications;

use App\Models\Appointment;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

/** One email class for every job event: requested, confirmed, rescheduled, cancelled, reminder. */
class AppointmentMail extends Notification
{
    public function __construct(public Appointment $appointment, public string $event, public bool $forCompany = false) {}

    /** @return array<int, string> */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $a = $this->appointment->loadMissing('customer', 'type', 'provider');
        $when = $a->starts_at->format('l, F j, Y').' between '.$a->starts_at->format('g:i A').' and '.$a->ends_at->format('g:i A');
        $what = ($a->type->name ?? 'Service visit').($a->provider ? ' with '.$a->provider->name : '');
        $where = $a->addressLine();
        $company = config('company.name');

        if ($this->forCompany) {
            return (new MailMessage)
                ->subject(match ($this->event) {
                    'requested' => 'New online booking: '.$a->customer->fullName(), 'cancelled' => 'Cancelled by customer: '.$a->customer->fullName(), default => 'Booking update: '.$a->customer->fullName()
                })
                ->greeting('Hi dispatch,')
                ->line($a->customer->fullName().' ('.($a->customer->phone ?: $a->customer->email).') '.match ($this->event) {
                    'requested' => 'requested', 'cancelled' => 'cancelled', default => 'updated'
                }.' a visit.')
                ->line($what.' on '.$when.'.')
                ->lineIf((bool) $where, 'Service address: '.$where)
                ->lineIf((bool) $a->customer_notes, 'Notes: '.$a->customer_notes)
                ->action('Open in admin', route('admin.appointments.show', $a))
                ->salutation($company);
        }

        $mail = (new MailMessage)->greeting('Hello '.$a->customer->first_name.',');

        return match ($this->event) {
            'requested' => $mail->subject('We got your booking request · '.$company)
                ->line('Thanks for choosing '.$company.'. We have your request for:')
                ->line($what.' on '.$when.'.')
                ->lineIf((bool) $where, 'Service address: '.$where)
                ->line('Our office will confirm it shortly, usually within the hour during dispatch hours. Job reference '.$a->reference.'.')
                ->action('View or change your visit', $a->manageUrl())
                ->line('Need us sooner? Call '.config('company.phone').'. Emergencies are taken 24/7.'),
            'confirmed' => $mail->subject('Confirmed: '.$what.' · '.$company)
                ->line('Your visit is confirmed.')
                ->line($what.' on '.$when.'.')
                ->lineIf((bool) $where, 'Service address: '.$where)
                ->line('Your technician will text you when they are on the way. Please clear access to the work area and keep pets in another room.')
                ->action('View or change your visit', $a->manageUrl()),
            'reminder' => $mail->subject('Reminder: '.$what.' tomorrow · '.$company)
                ->line('A friendly reminder of your visit tomorrow.')
                ->line($what.' on '.$when.'.')
                ->lineIf((bool) $where, 'Service address: '.$where)
                ->action('View or change your visit', $a->manageUrl())
                ->line('If you need to move it, let us know so we can offer the window to someone else.'),
            'cancelled' => $mail->subject('Cancelled: '.$what.' · '.$company)
                ->line('Your visit on '.$when.' has been cancelled.')
                ->lineIf((bool) $a->cancellation_reason, 'Reason: '.$a->cancellation_reason)
                ->action('Book another window', route('book')),
            default => $mail->subject('Your visit was updated · '.$company)
                ->line($what.' is now on '.$when.'.')
                ->action('View or change your visit', $a->manageUrl()),
        };
    }
}
