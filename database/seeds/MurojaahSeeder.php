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
        static $order = 47;

        // membuat data dummy
        for($x = 1; $x <= 20; $x++) {
            
            // inser data dummy murojaah dengan faker
            DB::table('murojaah')->insert([
                'santri_id' => $order++,
                'halaman' => $faker->numberBetween(1,20),
                'jumlah_hafalan' => $faker->randomElement($array = array('1/4', '2/4', '3/4', '4/4')),
                'jenis' => $faker->randomElement($array = array('wajib', 'tambahan')),
                'status_hafalan' => $faker->numberBetween(0, 1),
                // 'keterangan' => $faker->randomElement($array = array('lanjut', 'ulang')),
                'created_at' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s')
            ]);
        };
    }
}
