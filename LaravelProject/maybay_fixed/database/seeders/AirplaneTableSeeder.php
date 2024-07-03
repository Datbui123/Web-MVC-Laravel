<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AirplaneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('airplanes')->insert([
                // 'id' => $faker->unique()->regexify('[A-Z]{3}\d{3}'),
                'ModelNumber' => $faker->unique()->bothify('#####'),
                'Capacity' => $faker->numberBetween(2000, 7000)
            ]);
        }
    }
}
