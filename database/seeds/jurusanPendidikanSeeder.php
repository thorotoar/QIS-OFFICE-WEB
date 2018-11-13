<?php

use Illuminate\Database\Seeder;
use App\JurusanPendidikan;

class jurusanPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = ['Teknik Informatika', 'Teknik Sipil', 'Teknik Elekro'];

        for ($c = 0; $c < 3; $c++){
            $jurusan_pendidikan = JurusanPendidikan::create([
                'nama_jurusan_pendidikan' => array_random($jurusan),
            ]);
        }
    }
}
