<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int|null $customer_id
 * @property string $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $service
 * @property string|null $address
 * @property string|null $message
 * @property string $status
 * @property int|null $assigned_to
 * @property string|null $staff_notes
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Customer|null $customer
 * @property-read User|null $assignee
 */
#[Fillable(['customer_id', 'name', 'email', 'phone', 'service', 'address', 'message', 'status', 'assigned_to', 'staff_notes'])]
class Inquiry extends Model
{
    public const STATUSES = ['new' => 'New', 'contacted' => 'Contacted', 'booked' => 'Booked', 'closed' => 'Closed'];

    /** @return BelongsTo<Customer, $this> */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /** @return BelongsTo<User, $this> */
    public function assignee(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function statusName(): string
    {
        return self::STATUSES[$this->status] ?? ucfirst($this->status);
    }
}
