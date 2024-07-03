<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FlightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $airplane = DB::table('airplanes')->skip($i)->take(1)->get();
            DB::table('flights')->insert([
                'FlightNumber' => $faker->unique()->regexify('[A-Z]{2}\d{4}'),
                'From' => $faker->city(),
                'To' => $faker->city(),
                'DepartureDate' => $faker->date(),
                'DepartureTime' => $faker->time(),
                'ArrivalDate' => $faker->date(),
                'airplane_id' => $faker->randomElement($airplane)->id,
            ]);
        }
    }
}
