<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PersonnesSeeder::class);
        $this->call(FilmsSeeder::class);
        $this->call(FilmPersonneSeeder::class);
        $this->call(GenresSeeder::class);
        $this->call(FilmsGenresSeeder::class);
        $this->call(UsagersSeeder::class);

    }
}
