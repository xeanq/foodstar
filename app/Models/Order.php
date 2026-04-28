<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'client_id',
        'manager_id',
        'number',
        'status',
        'source',
        'total',
        'comment',
        'delivery_address',
        'delivered_at',
    ];

    protected function casts(): array
    {
        return [
            'total'        => 'decimal:2',
            'delivered_at' => 'datetime',
        ];
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
        return $this->hasMany(OrderItem::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function returns()
    {
        return $this->hasMany(ProductReturn::class);
    }

    public function comments()
    {
        return $this->hasMany(OrderComment::class);
    }
}
