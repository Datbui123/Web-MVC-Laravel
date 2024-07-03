<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Article;
use App\Models\Category;
use App\Models\Author;


class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $categories = Category::pluck('ma_tloai');
        $authors = Author::pluck('ma_tgia');

            for ($i = 0; $i < 10; $i++) {
                Article::create([
                    'ma_bviet' => $i + 1,
                    'tieude' => $faker->sentence,
                    'ten_bhat' => $faker->word,
                    'ma_tloai' => $faker->randomElement($categories),
                    'tomtat' => $faker->word,
                    'noidung' => $faker->word,
                    // 'ma_tgia' => $faker->numberBetween(1, 10),
                    'ma_tgia' => $faker->randomElement($authors),
                    'ngayviet' => $faker->dateTime,
                    'hinhanh' => $faker->word,
                ]);
            }

    }
}
