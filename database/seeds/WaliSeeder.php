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

        // membuat data dummy
        for($x = 1; $x <= 10; $x++) {
            
            // inser data dummy santri dengan faker
            DB::table('wali')->insert([
                'id_user' => $faker->numberBetween(1,10),
                'nama' => $faker->name,
                'no_telp' => $faker->randomNumber,
                'alamat' => $faker->address,
                'jk' => $faker->randomElement($array = array('Laki-laki', 'Perempuan'))
            ]);
        };
    }
}
