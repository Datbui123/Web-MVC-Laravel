<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RegistrationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            $attendee = DB::table('attendees')->skip($i)->take(1)->get();
            $event = DB::table('events')->skip($i)->take(1)->get();

            DB::table('registrations')->insert([
                'attendee_id' => $faker->randomElement($attendee)->attendee_id,
                'event_id' => $faker->randomElement($event)->event_id,
            ]);
        }
    }
}
