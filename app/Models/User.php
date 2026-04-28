<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'role',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'manager_id');
    }

    public function leadRequests()
    {
        return $this->hasMany(LeadRequest::class, 'manager_id');
    }

    public function orderComments()
    {
        return $this->hasMany(OrderComment::class);
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isAccountant(): bool
    {
        return $this->role === 'accountant';
    }

    public function isManager(): bool
    {
        return $this->role === 'manager';
    }
}
