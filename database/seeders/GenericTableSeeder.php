<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GenericTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        // for ($i = 0; $i < 1000000; $i++) {
        //     \DB::table('generic')->insert([
        //         'generic_name' => $faker->name                
        //     ]);
        // }

        $faker = Faker::create();
        $genericData = [];

        for ($i = 0; $i < 50000; $i++) {
            $genericData[] = [
                'generic_name' => $faker->name               
            ];
        }

        \DB::table('generic')->insert($genericData);
    }
}
