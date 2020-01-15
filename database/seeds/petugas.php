<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Petugas::insert([
      [
        'nama_petugas'=>'mutia',
        'alamat'=>'jalan danau ranau',
        'telp'=>'08976736736',
        'username'=>'mutia',
        'password'=>'12345',
        'created_at'=>date('Y-m-d H:i:s')
      ],
      [
        'nama_petugas'=>'iran',
        'alamat'=>'jalan manuk',
        'telp'=>'08976736736',
        'username'=>'iran',
        'password'=>'12345',
        'created_at'=>date('Y-m-d H:i:s')
      ],
      [
        'nama_petugas'=>'idah',
        'alamat'=>'jalan ludah',
        'telp'=>'08976736736',
        'username'=>'idah',
        'password'=>'12345',
        'created_at'=>date('Y-m-d H:i:s')
      ],
      [
        'nama_petugas'=>'ujik',
        'alamat'=>'jalan wajik',
        'telp'=>'08976736736',
        'username'=>'ujik',
        'password'=>'12345',
        'created_at'=>date('Y-m-d H:i:s')
      ],
      [
        'nama_petugas'=>'ura',
        'alamat'=>'jalan mimik',
        'telp'=>'08976736736',
        'username'=>'ura',
        'password'=>'12345',
        'created_at'=>date('Y-m-d H:i:s')
      ]

      ]);
    }
}
