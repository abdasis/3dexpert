<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function materis()
    {
        return $this->hasMany(Materi::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'course_order');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
