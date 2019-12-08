<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name','kode_matkul', 'desc','day','start_time','end_time','absen_status'
    ];

    public function lectures() {
        return $this->belongsToMany(Lecture::class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
