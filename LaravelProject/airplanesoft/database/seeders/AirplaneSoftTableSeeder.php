<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Flight;


class AirplaneSoftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        //
        $index = 1;
        $faker = Faker::create();
        for ($i =  0; $i < 50; $i++) {
            Flight::create([
                'Flight_ID' =>  $index,
                'Aircraft_ID' => $faker->regexify('[A-Z0-9]{' . mt_rand(4,4) . '}'),
                'Departure_Airport' => $faker->sentence(2),
                'Arrival_Airport' => $faker->sentence(2),
                'Departure_Time' => $faker->dateTime(),
                'Arrival_Time' => $faker->dateTime(),
                'Fright_Duration' => $faker->time(),
            ]);
            $index++;
        }
    }
}
