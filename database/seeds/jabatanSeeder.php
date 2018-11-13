<?php

use Illuminate\Database\Seeder;
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
        $jabatan_g = ['pemimpin', 'instruktur'];

        for ($c = 0; $c < 2; $c++){
            $jabatan = Jabatan::create([
                'nama_jabatan' => array_random($jabatan_g),
            ]);
        }
    }
}
