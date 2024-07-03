<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            DB::table('events')->insert([
                'Title' => $faker->sentence(),
                'Description'=>$faker->sentence(),
                'Date'=>$faker->date(),
                'Location'=>$faker->city()
            ]);
        }
    }
}
