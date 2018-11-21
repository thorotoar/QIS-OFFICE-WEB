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

        for ($c = 0; $c < 2; $c++){
            $jabatan = Jabatan::create([
                'nama_jabatan' => $faker->sentence('1', 'true'),
            ]);
        }

        Jabatan::find(1)->update([
            'nama_jabatan' => 'Pemimpin',
        ]);

        Jabatan::find(2)->update([
            'nama_jabatan' => 'Instruktur',
        ]);
    }
}
