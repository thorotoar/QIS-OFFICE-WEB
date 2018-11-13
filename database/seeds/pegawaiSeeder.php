<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
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
        $gender = ['laki-laki','perempuan'];
        $status = ['sudah menikah','belum menikah'];

        for ($c = 0; $c < 7; $c++){
            $pegawai = Pegawai::create([
                'user_id' => rand(User::min('id'), User::max('id')),
                'nik' => $faker->numerify('###########'),
                'foto' => '123.jpg',
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'tempat_lahir' => $faker->city,
                'tgl_lahir' => $faker->date('Y-m-d','2000-01-01'),
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
                'tgl_masuk' => $faker->dateTimeThisDecade,
                'no_sk' => $faker->numerify('###########'),
                'jabatan_id' => rand(Jabatan::min('id'), Jabatan::max('id')),
            ]);
        }
    }
}
