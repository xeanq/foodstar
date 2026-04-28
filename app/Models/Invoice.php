<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'order_id',
        'client_id',
        'number',
        'type',
        'status',
        'amount',
        'paid_amount',
        'payment_method',
        'due_date',
        'paid_at',
        'pdf_path',
    ];

    protected function casts(): array
    {
        return [
            'amount'      => 'decimal:2',
            'paid_amount' => 'decimal:2',
            'due_date'    => 'date',
            'paid_at'     => 'datetime',
        ];
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function isPaid(): bool
    {
        return $this->paid_amount >= $this->amount;
    }
}
