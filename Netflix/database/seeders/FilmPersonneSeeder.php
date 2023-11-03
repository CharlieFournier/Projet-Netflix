<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmPersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('FilmPersonnes')->insert([
            [
                'id' => 1,
                'Film.id' => 1,
                'Personnes.id' => 1,
            ],
        ]); }
}
