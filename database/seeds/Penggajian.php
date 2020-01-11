<?php

use Iluminate\Database\Seeder;

class Penggajian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['nama'=>'yusup','jabatan'=>'bos',
            'jk'=>'laki','alamat'=>'bandung','agama'=>'islam',
            'total_gaji'=>'1000000'],
            ['nama'=>'refan','jabatan'=>'seketaris',
            'jk'=>'laki','alamat'=>'bandung','agama'=>'islam',
            'total_gaji'=>'2000000'],
            ['nama'=>'indra herdiansyah','jabatan'=>'seketaris',
            'jk'=>'laki','alamat'=>'bandung','agama'=>'hindu',
            'total_gaji'=>'3000000']
        ];
    // masukkan data ke database
    DB::table('penggajians')->insert($data);
    }
}
