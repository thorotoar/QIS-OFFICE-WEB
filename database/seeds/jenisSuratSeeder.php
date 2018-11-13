<?php

use Illuminate\Database\Seeder;
use App\JenisSurat;

class jenisSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($c = 0; $c < 9; $c++){
            $jenis_surat = JenisSurat::create([
                'nama_jenis_surat' => 'Surat Pemberitahuan',
            ]);
        }
    }
}
