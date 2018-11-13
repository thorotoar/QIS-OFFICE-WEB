<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\RiwayatPendidikan;
use App\Pegawai;
use App\Jenjang;
use App\JurusanPendidikan;

class riwayatPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        $instansi_g = $faker->randomElement(array('SMA 1', 'SMA 2', 'SMA 10', 'SMA 112'));

        for ($c = 0; $c < 7; $c++){
            $pegawai = RiwayatPendidikan::create([
                'pegawai_id' => rand(Pegawai::min('id'), Pegawai::max('id')),
                'jenjang_id' => rand(Jenjang::min('id'), Jenjang::max('id')),
                'jurusan_id' => rand(JurusanPendidikan::min('id'), JurusanPendidikan::max('id')),
                'instansi' => $instansi_g,
                'thn_lulus' => $faker->dateTimeThisDecade,
            ]);
        }
    }
}
