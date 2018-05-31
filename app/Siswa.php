<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nis','nama','jeniskelamin','id_kelas','jurusan','notelp'];
    protected $timestamps = true;

    public function Kelas(){
        return $this->belongsTo('App/Siswa','id_kelas');
  }
  public function Absensi(){
    return $this->belongsTo('App/Absensi','id_kelas');
}
}
