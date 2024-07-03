<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Comment::create([
                'Content' => $faker->text,
                'Blog_id' => $faker->numberBetween(1, 10),
                'User_id' => $faker->numberBetween(1, 10)
            ]);
        }
    }
}
