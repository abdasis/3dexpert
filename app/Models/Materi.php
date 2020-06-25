<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{

    protected $guarded = [];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
