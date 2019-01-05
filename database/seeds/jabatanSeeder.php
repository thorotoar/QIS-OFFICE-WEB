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

        for ($c = 0; $c < 6; $c++){
            Jabatan::create([
                'nama_jabatan' => $faker->sentence('1', 'true'),
                'lembaga_id' => null,
                'created_by' => '',
                'updated_by' => '',
            ]);
        }

        Jabatan::find(1)->update([
            'nama_jabatan' => 'Pemimpin',
        ]);

        Jabatan::find(2)->update([
            'nama_jabatan' => 'Instruktur',
        ]);

        Jabatan::find(3)->update([
            'nama_jabatan' => 'Pemimpin Muslim Day Care',
        ]);

        Jabatan::find(4)->update([
            'nama_jabatan' => 'Instruktur Muslim Day Care',
        ]);

        Jabatan::find(5)->update([
            'nama_jabatan' => 'Pemimpin ABK',
        ]);

        Jabatan::find(6)->update([
            'nama_jabatan' => 'Instruktur ABK',
        ]);
    }
}
