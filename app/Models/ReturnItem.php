<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnItem extends Model
{
    protected $fillable = [
        'return_id',
        'order_item_id',
        'product_name',
        'quantity',
        'unit',
        'price',
        'total',
    ];

    protected function casts(): array
    {
        return [
            'quantity' => 'decimal:3',
            'price'    => 'decimal:2',
            'total'    => 'decimal:2',
        ];
    }

    public function productReturn()
    {
        return $this->belongsTo(ProductReturn::class, 'return_id');
    }

    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }
}
