<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id', 'full_name_transferee', 'contact_no', 'city', 'country', 'address', 'zip_code', 'state_province'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
