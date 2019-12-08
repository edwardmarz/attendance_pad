<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $fillable = [
        'name','kode_matkul','desc','day','start-time'
    ];
}
