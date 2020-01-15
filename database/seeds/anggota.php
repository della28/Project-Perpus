<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota::insert([
        [
          'nama_anggota'=>'dylan',
          'alamat'=>'sawojajar',
          'telp'=>'08976736736',
          'created_at'=>date('Y-m-d H:i:s')
        ],
        [
          'nama_anggota'=>'milek',
          'alamat'=>'sawojajar',
          'telp'=>'08976875546',
          'created_at'=>date('Y-m-d H:i:s')
        ],
        [
          'nama_anggota'=>'ayan',
          'alamat'=>'blitar',
          'telp'=>'08456767453343',
          'created_at'=>date('Y-m-d H:i:s')
        ],
        [
          'nama_anggota'=>'ririn',
          'alamat'=>'sawojajar',
          'telp'=>'08964333435',
          'created_at'=>date('Y-m-d H:i:s')
        ],
        [
          'nama_anggota'=>'Eri',
          'alamat'=>'jombang',
          'telp'=>'089354768685',
          'created_at'=>date('Y-m-d H:i:s')
        ]

        ]);
    }
}
