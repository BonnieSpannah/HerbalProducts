<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRoleAttribute($attribute)
    {
        return $this->roleOptions()[$attribute];
    }

    public function roleOptions()
    {
        return [
            1 => 'Super Admin',
            2 => 'Human Admin',
            3 => 'Animal Admin',
        ];
    }

    public function getStatusAttribute($attribute)
    {
        return $this->statusOptions()[$attribute];
    }

    public function statusOptions()
    {
        return [
            1 => 'Active',
            2 => 'Inactive',
        ];
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
