<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LeaveRequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        for ($i = 0; $i < 30; $i++) {
            $employee = DB::table('employees')->skip($i)->take(1)->get();
            DB::table('leave_requests')->insert([
                'Employee_ID' => $faker->randomElement($employee)->Employee_ID,
                'Start_Date' => $faker->date(),
                'End_Date'=>$faker->date(),
                'Status'=>$faker->sentence(),
            ]);
        }
    }
}
