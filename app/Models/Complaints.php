<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaints extends Model
{
    public function publication()
    {
        return $this->belongsTo(Publications::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
