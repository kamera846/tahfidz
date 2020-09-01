<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SantriSeeder extends Seeder
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
        for($x = 1; $x <= 20; $x++) {
            
            // inser data dummy santri dengan faker
            DB::table('santri')->insert([
                'nama' => $faker->name,
                'kelas' => $faker->numberBetween(1,6),
                'jk' => $faker->randomElement($array = array('Laki-laki', 'Perempuan'))
            ]);
        };

    }
}
