<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsGenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('film_genre')->insert([ 
            [
                'id' => 1,
                'film_id' => 1,
                'genre_id' => 6
            ],
            [
                'id' => 2,
                'film_id' => 1,
                'genre_id' => 8
            ],
            [
                'id' => 3,
                'film_id' => 2,
                'genre_id' => 7
            ],
            [
                'id' => 4,
                'film_id' => 3,
                'genre_id' => 1
            ],
            [
                'id' => 5,
                'film_id' => 4,
                'genre_id' => 1
            ],
            [
                'id' => 6,
                'film_id' => 4,
                'genre_id' => 9
            ],
            [
                'id' => 7,
                'film_id' => 5,
                'genre_id' => 2
            ],
            [
                'id' => 8,
                'film_id' => 6,
                'genre_id' => 5
            ],
            [
                'id' => 9,
                'film_id' => 7,
                'genre_id' => 4
            ],
            [
                'id' => 10,
                'film_id' => 7,
                'genre_id' => 9
            ],
            [
                'id' => 11,
                'film_id' => 8,
                'genre_id' => 4
            ],
            [
                'id' => 12,
                'film_id' => 9,
                'genre_id' => 1
            ],
            [
                'id' => 13,
                'film_id' => 10,
                'genre_id' => 1
            ],
            [
                'id' => 14,
                'film_id' => 11,
                'genre_id' => 4
            ]
        ]);
    }
}
