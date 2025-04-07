<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        "name","email","password","gender","role","permission"
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

    public function setPermissionAttribute($pre) {
        return $this->attributes["permission"]=implode(" ",$pre);
    }

    public function getPermissionAttribute($pre) {
        return explode(" ",$pre);
    }
}