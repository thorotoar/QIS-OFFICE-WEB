<?php

use Illuminate\Database\Seeder;
use App\Bank;

class bankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($c = 0; $c < 9; $c++){
            $bank = Bank::create([
                'nama_bank' => 'BRI',
            ]);
        }
    }
}
