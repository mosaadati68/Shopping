<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'path'
    ];
    /**
     * Get all of the owning fillable models.
     */
    public function fileable()
    {
        return $this->morphTo();
    }
}
