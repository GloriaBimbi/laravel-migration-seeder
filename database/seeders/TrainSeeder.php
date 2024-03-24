<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++){ 
            $train = new Train();
            $train->company = $faker->company();
            $train->departure_station = $faker->address();
            $train->arrival_station = $faker->address();
            $train->departure_date = $faker->address();
            $train->arruval_date = $faker->date() . " " . $faker->time();
            $train->arrival_station = $faker->date() . " " . $faker->time();
            $train_code = "";
            for ($y = 0; $y < 5; $y++){
                $train_code .= $faker->randomLetter();
            }
            $train->train_code = $train_code;
            $train->wagons_number = $faker->numberBetween(4, 30);
            $train->save();
        }

    }
}
