<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Journal;


class JournalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            Journal::create([
                'JID' => $i + 1,
                'Title' => $faker->word,
                'Editor' => $faker->word(),
                // 'ISSN' => $faker->number(9,true),
                'ISSN' => $faker->regexify('^\d{4}-\d{3}[0-9]$'),
                'PublicationDate' => $faker->datetime,
            ]);
        }

    }
}
