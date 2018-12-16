<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
        'code', 'name', 'product_id'
    ];

    public function Product(){
        return $this->belongsTo(Product::class);
    }}
