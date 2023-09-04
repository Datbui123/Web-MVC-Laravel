<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AttendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            $employee = DB::table('employees')->skip($i)->take(1)->get();
            DB::table('attendance')->insert([
                'Employee_ID' => $faker->randomElement($employee)->Employee_ID,
                'Date' => $faker->date(),
                'Check_in_Time'=>$faker->time(),
                'Check_out_Time'=>$faker->time(),
            ]);
        }
    }
}