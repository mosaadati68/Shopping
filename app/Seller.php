<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = [
        'name', 'products', 'address', 'additional'
    ];

    protected $casts = [
        'products' => 'array',
        'additional' => 'array',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class,'product_seller');
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }
}
