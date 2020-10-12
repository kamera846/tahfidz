<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indonesia
        $faker = Faker::create('id_ID');
        static $password;
        static $id = 2;

        // membuat data dummy
        for($x = 1; $x <= 20; $x++) {

            // insert data dummy user dengan faker
            DB::table('user')->insert([
                'id' => $id++,
                'email' => preg_replace('/@example\..*/', '@gmail.com', $faker->unique()->safeEmail),
                'password' => $password ?: $password = bcrypt('secret'),
                'remember_token' => str_random(10),
                'created_at' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
                'level' => 'user'
            ]);
        };

    }
}
