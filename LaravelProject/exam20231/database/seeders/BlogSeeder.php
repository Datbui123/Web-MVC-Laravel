<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = \Faker\Factory::create();
        //
        for ($i = 0; $i < 10; $i++) {
            Blog::create([
                'Title' => $faker->text,
                'Content' => $faker->text,
                'Author_id' => $faker->numberBetween(1, 10)
            ]);
        }
    }
}
