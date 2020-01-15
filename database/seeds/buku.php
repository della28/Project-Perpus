<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Buku::insert([
      [
        'judul'=>'dilan 1990',
        'penerbit'=>'bintang cerah',
        'pengarang'=>'nia alis',
        'gambar'=>'-',
        'created_at'=>date('Y-m-d H:i:s')
      ],
      [
        'judul'=>'bintang',
        'penerbit'=>'gramedia',
        'pengarang'=>'tere liye',
        'gambar'=>'-',
        'created_at'=>date('Y-m-d H:i:s')
      ],
      [
        'judul'=>'hujan',
        'penerbit'=>'gramedia',
        'pengarang'=>'tere liye',
        'gambar'=>'-',
        'created_at'=>date('Y-m-d H:i:s')
      ],
      [
        'judul'=>'meteor',
        'penerbit'=>'gramedia',
        'pengarang'=>'tere liye',
        'gambar'=>'-',
        'created_at'=>date('Y-m-d H:i:s')
      ],
      [
        'judul'=>'perang',
        'penerbit'=>'sinar muda',
        'pengarang'=>'farras',
        'gambar'=>'-',
        'created_at'=>date('Y-m-d H:i:s')
      ]

      ]);
    }
}
