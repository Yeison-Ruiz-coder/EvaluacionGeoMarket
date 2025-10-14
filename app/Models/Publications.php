<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publications extends Model
{
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function seller()
    {
        return $this->belongsTo(Sellers::class);
    }

    public function complaints()
    {
        return $this->hasMany(Complaints::class);
    }
}
