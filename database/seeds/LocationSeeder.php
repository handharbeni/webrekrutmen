<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // TABLE PROPINSI
        DB::table('propinsi')->insert(array(
            array('propinsi' => 'Jawa Timur')
        ));
         
        // TABLE KOTA
        DB::table('kota')->insert(array(
            array('kota' => 'Malang', 'propinsi_id' => 1),
            array('kota' => 'Surabaya', 'propinsi_id' => 1)
        ));
         
        // TABLE KECAMATAN
        DB::table('kecamatan')->insert(array(
            array('kecamatan' => 'Kedungkandang', 'kota_id' => 1),
            array('kecamatan' => 'Klojen', 'kota_id' => 1),
            array('kecamatan' => 'Blimbing', 'kota_id' => 2),
            array('kecamatan' => 'Sukun', 'kota_id' => 2)
        ));
         
        // TABLE DESA
        DB::table('desa')->insert(array(
            array('desa' => 'Bumiayu', 'kecamatan_id' => 1),
            array('desa' => 'Kutobedah', 'kecamatan_id' => 1),
            array('desa' => 'Purwantoro', 'kecamatan_id' => 2),
            array('desa' => 'Keben', 'kecamatan_id' => 2)
        ));        
    }
}
