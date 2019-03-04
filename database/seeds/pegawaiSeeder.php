<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Faker\Provider\Image;
use App\Pegawai;
use App\User;
use App\Agama;
use App\Kewarganegaraan;
use App\Jabatan;
use App\Bank;

class pegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        $gender = ['Laki-laki','Perempuan'];
        $status = ['Sudah Menikah','Belum Menikah'];
        //$foto = asset('public/images/foto-pegawai/contoh.jpg');
        $instansi_g = $faker->randomElement(array('SMA 1', 'SMA 2', 'SMA 10', 'SMA 112', 'Universitas Negeri Surabaya'));

        for ($c = 0; $c < 7; $c++){
            Pegawai::create([
                'user_id' => rand(User::min('id'), User::max('id')),
                'nik' => $faker->numerify('###########'),
                'foto' => $faker->imageUrl('84', '112'),
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'tempat_lahir' => $faker->city,
                'tgl_lahir' => $faker->date('d M Y','2000-01-01'),
                'kelamin' => array_random($gender),
                'agama_id' => rand(Agama::min('id'), Agama::max('id')),
                'kewarganegaraan_id' => rand(Kewarganegaraan::min('id'), Kewarganegaraan::max('id')),
                'telpon' => $faker->numerify('##########'),
                'email' => $faker->unique()->safeEmail,
                'status_pernikahan' => array_random($status),
                'nuptk' => '',
                'no_rek' => '',
                'bank_id' => rand(Bank::min('id'), Bank::max('id')),
                'kcp_bank' => '',
                'ibu' => $faker->name,
                'nik_ibu' => $faker->numerify('###########'),
                'ayah' => $faker->name,
                'nik_ayah' => $faker->numerify('###########'),
                'pasangan' => $faker->name,
                'pekerjaan_pasangan' => $faker->jobTitle,
                'tgl_masuk' => $faker->date('d M Y','2000-01-01'),
                'no_sk' => $faker->numerify('###########'),
//                'jabatan_id' => rand(Jabatan::min('id'), Jabatan::max('id')),
                'created_by' => '',
                'updated_by' => '',
                'lembaga_id' => rand(\App\Lembaga::min('id'), \App\Lembaga::max('id')),
                'status_user' => '',
                'jenjang_id' => rand(\App\Jenjang::min('id'), \App\Jenjang::max('id')),
                'jurusan_id' => rand(\App\JurusanPendidikan::min('id'), \App\JurusanPendidikan::max('id')),
                'instansi' => $instansi_g,
                'thn_lulus' => $faker->year,
            ]);
        }
    }
}
