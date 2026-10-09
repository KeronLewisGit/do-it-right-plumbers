<?php

namespace App\Notifications;

use App\Models\Inquiry;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class InquiryMail extends Notification
{
    public function __construct(public Inquiry $inquiry, public bool $forClinic = false) {}

    /** @return array<int, string> */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $i = $this->inquiry;
        if ($this->forClinic) {
            return (new MailMessage)->subject('New quote request: '.$i->name.($i->service ? ' · '.$i->service : ''))
                ->greeting('Hi dispatch,')
                ->line($i->name.' sent a message'.($i->service ? ' about '.strtolower($i->service) : '').'.')
                ->line('Email: '.($i->email ?: 'none').' · Phone: '.($i->phone ?: 'none').($i->address ? ' · Address: '.$i->address : ''))
                ->line('"'.$i->message.'"')
                ->action('Reply from admin', route('admin.inquiries.show', $i));
        }

        return (new MailMessage)->subject('We got your message · '.config('company.name'))
            ->greeting('Hello '.explode(' ', $i->name)[0].',')
            ->line('Thanks for reaching out to '.config('company.name').'. Someone from our Orange office will get back to you within one business hour during dispatch hours.')
            ->line('In a hurry? Call '.config('company.phone').' or book an arrival window online.')
            ->action('Book online', route('book'));
    }
}
