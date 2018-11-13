<?php

use Illuminate\Database\Seeder;
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
        $lembaga_g = ['Quali International Surabaya','Day Care','Anak Berkebutuhan Khusus'];

        for ($c = 0; $c < 3; $c++){
            $lembaga = Lembaga::create([
                'nama_lembaga' => array_random($lembaga_g),
            ]);
        }
    }
}
