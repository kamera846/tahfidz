<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MurojaahSeeder extends Seeder
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
        static $order = 75;

        // membuat data dummy
        for($x = 1; $x <= 20; $x++) {
            
            // inser data dummy santri dengan faker
            DB::table('santri')->insert([
                'santri_id' => $faker->numberBetween(46, 64),
                'surat_id' => $faker->numberBetween(1, 144),
                'no_ayat' => $faker->numberBetween(1,10),
                'tanggal' => $faker->numberBetween(1,6),
                'keterangan' => $faker->randomElement($array = array('lanjut', 'ulang')),
                'created_at' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s')
            ]);
        };

    }
}
