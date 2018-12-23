<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Jenjang;

class jenjangSeeder extends Seeder
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
            $jenjang = Jenjang::create([
                'nama_jenjang' => $faker->sentence('3', 'true'),
                'created_by' => '',
                'updated_by' => '',
            ]);
        }

        Jenjang::find(1)->update([
            'nama_jenjang' => 'Paket A',
        ]);

        Jenjang::find(2)->update([
            'nama_jenjang' => 'Paket B',
        ]);

        Jenjang::find(3)->update([
            'nama_jenjang' => 'Paket C',
        ]);

        Jenjang::find(4)->update([
            'nama_jenjang' => 'D1',
        ]);

        Jenjang::find(5)->update([
            'nama_jenjang' => 'D2',
        ]);

        Jenjang::find(6)->update([
            'nama_jenjang' => 'D3',
        ]);

        Jenjang::find(7)->update([
            'nama_jenjang' => 'D4',
        ]);

        Jenjang::find(8)->update([
            'nama_jenjang' => 'S1',
        ]);

        Jenjang::find(9)->update([
            'nama_jenjang' => 'S2',
        ]);

        Jenjang::find(10)->update([
            'nama_jenjang' => 'S3',
        ]);

        Jenjang::find(11)->update([
            'nama_jenjang' => 'Non Formal',
        ]);

        Jenjang::find(12)->update([
            'nama_jenjang' => 'Informal',
        ]);

        Jenjang::find(13)->update([
            'nama_jenjang' => 'Lainnya',
        ]);
    }
}
