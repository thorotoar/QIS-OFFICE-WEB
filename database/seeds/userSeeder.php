<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        $type = ['admin','pegawai'];
        $username = ['admin','pegawai'];

        for ($c = 0; $c < 2; $c++){
            $user = user::create([
                'username' => array_random($username),
                //'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('secret'),
                'type' => array_random($type),
                'remember_token' => str_random(10),
            ]);
        }
    }
}
