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
        static $id = 1;
        static $santri_id = 1;

        // membuat data dummy
        for($x = 1; $x <= 5; $x++) {
            
            // inser data dummy santri dengan faker
            DB::table('juz')->insert([
                'id' => $id++,
                'santri_id' => $santri_id++,
                'juz_ke' => '1',
                'created_at' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s')
            ]);
        };
    }
}
