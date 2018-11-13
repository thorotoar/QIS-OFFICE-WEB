<?php

use Illuminate\Database\Seeder;
use App\Kewarganegaraan;

class kewarganegaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($c = 0; $c < 5; $c++){
            $kewarganegaraan = Kewarganegaraan::create([
                'nama_negara' => 'Indonesia',
            ]);
        }
    }
}
