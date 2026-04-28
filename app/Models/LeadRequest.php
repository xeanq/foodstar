<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadRequest extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'message',
        'source',
        'status',
        'client_id',
        'order_id',
        'manager_id',
        'telegram_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }
}
