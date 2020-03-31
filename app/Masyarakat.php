<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    //
    protected $fillable = [
        'nik','nama','username','password','telp'
    ];
    
    protected $table = 'Masyarakat';
}
