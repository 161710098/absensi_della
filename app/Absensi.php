<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $fillable = ['tgl_absen','kelas','jurusan','id_siswa','id_keterangan'];
    protected $timestamps = true;
    
    public function Siswa(){
        return $this->belongsTo('App/Siswa','id_kelas');
  }
  public function Keterangan(){
    return $this->belongsto('App/Keterangan','id_keterangan');
}
  
}
