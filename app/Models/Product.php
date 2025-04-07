<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "name",
        "price",
        "count",
        "cat"
    ];

    public function image()
    {
        return $this->hasMany(Image::class);
    }
}