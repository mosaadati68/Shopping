<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'contact_no', 'avator'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
