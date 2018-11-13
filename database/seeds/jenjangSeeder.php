<?php

use Illuminate\Database\Seeder;
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
        $jenjang_g = ['D3', 'S1', 'S2'];

        for ($c = 0; $c < 3; $c++){
            $jenjang = Jenjang::create([
                'nama_jenjang' => array_random($jenjang_g),
            ]);
        }
    }
}
