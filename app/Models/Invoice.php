<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'invoice_number',
        'customer_name',
        'customer_address',
        'customer_email',
        'customer_phone',
        'invoice_date',
        'due_date',
        'total_amount',
        'status',
        'discount_value',
        'discount_type',
        'tax_rate',
        'tax_amount',
        'currency',
        'notes',
        'payment_method',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(InvoiceItem::class);
    }
}
