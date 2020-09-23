<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class JuzSeeder extends Seeder
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
        static $order = 47;

        // membuat data dummy
        for($x = 1; $x <= 20; $x++) {
            
            // inser data dummy santri dengan faker
            DB::table('juz')->insert([
                'santri_id' => $order++,
                'created_at' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s')
            ]);
        };
    }
}
