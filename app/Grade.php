<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    //
    protected $fillable = [
        'name', 'desc'
    ];

    public function lectures() {
        return $this->belongsToMany(Lecture::class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
