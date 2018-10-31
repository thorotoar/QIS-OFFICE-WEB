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

        for ($c = 0; $c < 2; $c++){
            $user = user::create([
                'username' => $faker->userName,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('secret'),
                'type' => 'admin',
                'remember_token' => str_random(10),
            ]);
        }
    }
}
