<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'composition',
        'price',
        'price_old',
        'unit',
        'status',
        'is_hit',
        'is_new',
        'is_sale',
        'sort_order',
        'proteins',
        'fats',
        'carbohydrates',
        'calories',
    ];

    protected function casts(): array
    {
        return [
            'is_hit'  => 'boolean',
            'is_new'  => 'boolean',
            'is_sale' => 'boolean',
            'price'   => 'decimal:2',
            'price_old' => 'decimal:2',
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function mainImage()
    {
        return $this->hasOne(ProductImage::class)->where('is_main', true);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
