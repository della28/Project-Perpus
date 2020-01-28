<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
  protected $table="peminjaman";
  protected $primaryKey="id";
  

  protected $fillable = [
    'id_anggota',
    'id_petugas',
    'tgl_pinjam',
    'deadline'
  ];

  public function anggota() {
    return $this->belongsTo('App/Anggota', 'id_anggota');
  }
  public function petugas() {
    return $this->belongsTo('App/Petugas', 'id_petugas');
  }

}