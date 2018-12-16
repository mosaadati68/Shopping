<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $fillable = [
        'code', 'name'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
