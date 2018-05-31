<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    protected $fillable = ['keterangan'];
    protected $timestamps = true;

    public function Absensi(){
        return $this->hasMany('App/Absensi','id_keterangan');
    }
}
