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

        for ($c = 0; $c < 13; $c++){
            Pegawai::create([
                'user_id' => rand(User::min('id'), User::max('id')),
                'nik' => $faker->numerify('###########'),
                'foto' => $faker->imageUrl('84', '112'),
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'tempat_lahir' => $faker->city,
                'tgl_lahir' => $faker->date('dd MM YY','01 01 2000'),
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
                'tgl_masuk' => $faker->date('dd MM YY','01 01 2000'),
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

        Pegawai::find(1)->update([
            'jabatan_yayasan_id' => '1',
        ]);

        Pegawai::find(2)->update([
            'jabatan_yayasan_id' => '2',
        ]);

        Pegawai::find(3)->update([
            'jabatan_yayasan_id' => '3',
        ]);

        Pegawai::find(4)->update([
            'jabatan_yayasan_id' => '4',
        ]);

        Pegawai::find(5)->update([
            'jabatan_yayasan_id' => '5',
        ]);

        Pegawai::find(6)->update([
            'jabatan_yayasan_id' => '6',
        ]);

        Pegawai::find(7)->update([
            'jabatan_id' => '7',
        ]);

        Pegawai::find(8)->update([
            'jabatan_id' => '8',
        ]);

        Pegawai::find(9)->update([
            'jabatan_id' => '9',
        ]);

        Pegawai::find(10)->update([
            'jabatan_id' => '10',
        ]);

        Pegawai::find(11)->update([
            'jabatan_id' => '11',
        ]);

        Pegawai::find(12)->update([
            'jabatan_id' => '12',
        ]);

        Pegawai::find(13)->update([
            'jabatan_id' => '13',
        ]);
    }
}
