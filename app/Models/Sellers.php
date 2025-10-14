<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sellers extends Model
{
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function publications()
    {
        return $this->hasMany(Publications::class);
    }
}
