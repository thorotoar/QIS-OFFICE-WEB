<?php

use Illuminate\Database\Seeder;
use App\Agama;

class agamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $religion = ['islam','hindu','budha','katholik','kristen'];

        for ($c = 0; $c < 5; $c++){
            $agama = Agama::create([
                'nama_agama' => array_random($religion),
            ]);
        }
    }
}
