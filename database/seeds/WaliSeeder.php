<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class WaliSeeder extends Seeder
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
        static $user_id = 4;
        static $id = 3;

        // membuat data dummy
        for($x = 1; $x <= 18; $x++) {
            
            // inser data dummy santri dengan faker
            DB::table('wali')->insert([
                'id' => $id++,
                'user_id' => $user_id++,
                'nama' => $faker->name,
                'no_telp' => $faker->phoneNumber,
                'alamat' => $faker->address,
                'jk' => $faker->randomElement($array = array('Laki-laki', 'Perempuan')),
                'created_at' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s')
            ]);
        };
    }
}
