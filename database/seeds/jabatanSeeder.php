<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Jabatan;

class jabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        for ($c = 0; $c < 13; $c++){
            Jabatan::create([
                'nama_jabatan' => $faker->sentence('1', 'true'),
                'lembaga_id' => rand(\App\Lembaga::min('id'), \App\Lembaga::max('id')),
                'created_by' => '',
                'updated_by' => '',
            ]);
        }

        Jabatan::find(1)->update([
            'nama_jabatan' => 'Direktur Quali International Surabaya',
            'lembaga_id' => '1',
        ]);

        Jabatan::find(2)->update([
            'nama_jabatan' => 'General Manager',
            'lembaga_id' => '1',
        ]);

        Jabatan::find(3)->update([
            'nama_jabatan' => 'Manager Operasional',
            'lembaga_id' => '1',
        ]);

        Jabatan::find(4)->update([
            'nama_jabatan' => 'Marketing',
            'lembaga_id' => '1',
        ]);

        Jabatan::find(5)->update([
            'nama_jabatan' => 'Bagian Pengajaran',
            'lembaga_id' => '1',
        ]);

        Jabatan::find(6)->update([
            'nama_jabatan' => 'Bagian Bendahara',
            'lembaga_id' => '1',
        ]);

        Jabatan::find(7)->update([
            'nama_jabatan' => 'Instruktur Quali International Surabaya',
            'lembaga_id' => '2',
        ]);

        Jabatan::find(8)->update([
            'nama_jabatan' => 'Instruktur Muslim Day Care',
            'lembaga_id' => '3',
        ]);

        Jabatan::find(9)->update([
            'nama_jabatan' => 'Instruktur Sanggar Belajar Anak ABK',
            'lembaga_id' => '4',
        ]);

        Jabatan::find(10)->update([
            'nama_jabatan' => 'Pimpinan LPBI Quali International Surabaya',
            'lembaga_id' => '2',
        ]);

        Jabatan::find(11)->update([
            'nama_jabatan' => 'Pimpinan Muslim Day Care',
            'lembaga_id' => '3',
        ]);

        Jabatan::find(12)->update([
            'nama_jabatan' => 'Pimpinan Sanggar Belajar Anak ABK',
            'lembaga_id' => '4',
        ]);

        Jabatan::find(12)->update([
            'nama_jabatan' => 'Bagian Administrasi',
            'lembaga_id' => '1',
        ]);

    }
}
