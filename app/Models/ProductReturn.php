<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductReturn extends Model
{
    protected $table = 'returns';

    protected $fillable = [
        'order_id',
        'client_id',
        'manager_id',
        'number',
        'status',
        'reason',
        'amount',
        'refund_method',
        'refunded_at',
        'pdf_path',
    ];

    protected function casts(): array
    {
        return [
            'amount'      => 'decimal:2',
            'refunded_at' => 'datetime',
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

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function items()
    {
        return $this->hasMany(ReturnItem::class, 'return_id');
    }
}
