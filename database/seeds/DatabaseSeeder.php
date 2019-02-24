<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);

        $this->call(userSeeder::class);
        $this->call(agamaSeeder::class);
        $this->call(bankSeeder::class);
        $this->call(jabatanSeeder::class);
        $this->call(jenisSuratSeeder::class);
        $this->call(jenjangSeeder::class);
        $this->call(jurusanPendidikanSeeder::class);
        $this->call(kewarganegaraanSeeder::class);
        //$this->call(kurikulumSeeder::class);
        $this->call(lembagaSeeder::class);
        $this->call(pegawaiSeeder::class);
        $this->call(riwayatPendidikanSeeder::class);
        $this->call(suratMasukSeeder::class);
        $this->call(suratMasukSeeder::class);
        $this->call(jabayaSeeeder::class);
        $this->call(penghasilanSeeeder::class);
        $this->call(transportasiSeeeder::class);
//        $this->call(dokumenSeeder::class);
        $this->call(kebutuhanSeeeder::class);
    }
}
