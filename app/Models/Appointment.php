<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @property int $id
 * @property string $reference
 * @property int $customer_id
 * @property int|null $appointment_type_id
 * @property int|null $team_member_id
 * @property Carbon $starts_at
 * @property Carbon $ends_at
 * @property string|null $service_address
 * @property string $status
 * @property string|null $customer_notes
 * @property string|null $staff_notes
 * @property string $source
 * @property string $manage_token
 * @property Carbon|null $confirmed_at
 * @property Carbon|null $cancelled_at
 * @property string|null $cancellation_reason
 * @property Carbon|null $reminded_at
 * @property int|null $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Customer $customer
 * @property-read AppointmentType|null $type
 * @property-read TeamMember|null $provider
 */
#[Fillable(['customer_id', 'appointment_type_id', 'team_member_id', 'starts_at', 'ends_at', 'service_address', 'status', 'customer_notes', 'staff_notes', 'source', 'confirmed_at', 'cancelled_at', 'cancellation_reason', 'created_by'])]
class Appointment extends Model
{
    public const STATUSES = ['pending' => 'Pending', 'confirmed' => 'Confirmed', 'completed' => 'Completed', 'cancelled' => 'Cancelled', 'no_show' => 'No show'];

    protected function casts(): array
    {
        return ['starts_at' => 'datetime', 'ends_at' => 'datetime', 'confirmed_at' => 'datetime', 'cancelled_at' => 'datetime', 'reminded_at' => 'datetime'];
    }

    protected static function booted(): void
    {
        static::creating(function (Appointment $a) {
            $a->reference ??= static::freshReference();
            $a->manage_token ??= Str::random(48);
        });
    }

    /** A short job reference customers can quote on the phone; regenerated on the rare collision. */
    public static function freshReference(): string
    {
        do {
            $reference = 'DIR-'.now()->format('ym').'-'.strtoupper(Str::random(4));
        } while (static::where('reference', $reference)->exists());

        return $reference;
    }

    /** @return BelongsTo<Customer, $this> */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /** @return BelongsTo<AppointmentType, $this> */
    public function type(): BelongsTo
    {
        return $this->belongsTo(AppointmentType::class, 'appointment_type_id');
    }

    /** @return BelongsTo<TeamMember, $this> */
    public function provider(): BelongsTo
    {
        return $this->belongsTo(TeamMember::class, 'team_member_id');
    }

    /**
     * @param  Builder<Appointment>  $q
     * @return Builder<Appointment>
     */
    public function scopeUpcoming(Builder $q): Builder
    {
        return $q->whereIn('status', ['pending', 'confirmed'])->where('starts_at', '>=', now())->orderBy('starts_at');
    }

    /**
     * @param  Builder<Appointment>  $q
     * @return Builder<Appointment>
     */
    public function scopeOnDate(Builder $q, \DateTimeInterface $date): Builder
    {
        return $q->whereDate('starts_at', $date->format('Y-m-d'));
    }

    /**
     * Appointments that occupy a truck: pending and confirmed.
     *
     * @param  Builder<Appointment>  $q
     * @return Builder<Appointment>
     */
    public function scopeBlocking(Builder $q): Builder
    {
        return $q->whereIn('status', ['pending', 'confirmed']);
    }

    public function isOpen(): bool
    {
        return in_array($this->status, ['pending', 'confirmed']);
    }

    /** Length in minutes, always positive (Carbon 3 diffs are signed). */
    public function durationMinutes(): int
    {
        return (int) abs($this->starts_at->diffInMinutes($this->ends_at));
    }

    public function statusName(): string
    {
        return self::STATUSES[$this->status] ?? ucfirst($this->status);
    }

    /** Where the truck goes: the job's own address, else the customer's address on file. */
    public function addressLine(): ?string
    {
        return $this->service_address ?: $this->customer->address;
    }

    public function manageUrl(): string
    {
        return route('book.manage', $this->manage_token);
    }
}
