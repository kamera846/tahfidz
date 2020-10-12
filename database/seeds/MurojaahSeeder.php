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
        static $santri_id = 1;
        static $id = 36;

        // membuat data dummy
        for($x = 1; $x <= 5; $x++) {
            
            // inser data dummy murojaah dengan faker
            DB::table('murojaah')->insert([
                'id' => $id++,
                'santri_id' => $santri_id++,
                'halaman' => $faker->numberBetween(1,20),
                'jumlah_hafalan' => $faker->randomElement($array = array('1/4', '2/4', '3/4', '4/4')),
                // 'jenis' => $faker->randomElement($array = array('wajib', 'tambahan')),
                'jenis' => 'tambahan',
                'status_hafalan' => $faker->numberBetween(0, 1),
                // 'keterangan' => $faker->randomElement($array = array('lanjut', 'ulang')),
                'created_at' => '2020-09-24 16:59:59'
            ]);
        };
    }
}
