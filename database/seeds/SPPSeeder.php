<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class SPPSeeder extends Seeder
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
            DB::table('spp')->insert([
                'santri_id' => $faker->numberBetween(1,10),
                'nominal' => $faker->randomNumber,
            ]);
        };
    }
}
