<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\JenisSurat;

class jenisSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        for ($c = 0; $c < 10; $c++){
            $jenis_surat = JenisSurat::create([
                'nama_jenis_surat' => $faker->sentence('5', 'true'),
                'created_by' => '',
                'updated_by' => '',
            ]);
        }

        JenisSurat::find(1)->update([
            'nama_jenis_surat' => 'Surat Pemberitahuan',
        ]);

        JenisSurat::find(2)->update([
            'nama_jenis_surat' => 'Surat Penagihan',
        ]);

        JenisSurat::find(3)->update([
            'nama_jenis_surat' => 'Surat Peringatan',
        ]);

        JenisSurat::find(4)->update([
            'nama_jenis_surat' => 'Surat Pengajuan Dana',
        ]);

        JenisSurat::find(5)->update([
            'nama_jenis_surat' => 'Surat Pengangkatan',
        ]);

        JenisSurat::find(6)->update([
            'nama_jenis_surat' => 'Surat Keterangan Pengalaman',
        ]);

        JenisSurat::find(7)->update([
            'nama_jenis_surat' => 'Surat Keputusan Penyusun Instruktur',
        ]);

        JenisSurat::find(8)->update([
            'nama_jenis_surat' => 'Surat Keputusan Penyusun Sylabus',
        ]);

        JenisSurat::find(9)->update([
            'nama_jenis_surat' => 'Surat Keputusan Penyusun RPP',
        ]);

        JenisSurat::find(10)->update([
            'nama_jenis_surat' => 'Surat Lain',
        ]);
    }
}
