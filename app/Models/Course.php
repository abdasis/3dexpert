<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function materis()
    {
        return $this->hasMany(Materi::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
