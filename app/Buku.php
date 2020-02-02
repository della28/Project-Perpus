<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
  protected $table="buku";
  protected $primaryKey="id";
  protected $fillable = [
    'judul',
    'penerbit',
    'pengarang',
    'stok',
    'gambar'
  ];

  public function detail(){
    return $this->hasMany('App\Detail_pinjam','id');
  }


}
