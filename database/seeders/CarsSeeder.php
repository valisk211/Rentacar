<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,10) as $value){
            DB::table('cars')->insert([
                'name' => $faker->name(),
                'brnad' => $faker->company(),
                
                'color' => $faker->company(),
                'location' => $faker->city(), 
                'no_of_persions' => $faker->title(),
                'daily_price' => $faker->randomFloat(2),

                // 'name' => $faker->name(),
                // 'company' => $faker->company(),
                // 'city' => $faker->city(),
                // 'title' => $faker->title(), 
                // 'fees' => $faker->randomFloat(2),

            ]);
        }
    }
}
