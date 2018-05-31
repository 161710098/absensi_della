<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['kelas'];
    protected $timestamps = true;


     public function Siswa(){
      return $this->hasmany('App/Siswa','id_kelas');
}
}

