<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Lembaga;

class lembagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        for ($c = 0; $c < 4; $c++){
            $lembaga = Lembaga::create([
                'nama_lembaga' => $faker->sentence('3', 'true'),
            ]);
        }

        Lembaga::find(1)->update([
            'nama_lembaga' => 'Yayasan Quali International Surabaya',
        ]);

        Lembaga::find(2)->update([
            'nama_lembaga' => 'Quali International Surabaya',
        ]);

        Lembaga::find(3)->update([
            'nama_lembaga' => 'Muslim Day Care',
        ]);

        Lembaga::find(4)->update([
            'nama_lembaga' => 'Sanggar ABK',
        ]);
    }
}
