<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicationsUsers extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function publication()
    {
        return $this->belongsTo(Publications::class);
    }
    public function publications_users()
    {
        return $this->hasMany(PublicationsUsers::class);
    }
}
