<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 

class GenresSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('genres')->insert([
        ['genre' => 'Science Fiction'],
        ['genre' => 'Superhero'],
        ['genre' => 'Fantaisie'],
        ['genre' => 'Horreur'],
        ['genre' => 'Action'],
        ['genre' => 'Comedie'],
        ['genre' => 'Dramatique'],
        ['genre' => 'Romance'],
        ['genre' => 'Thriller']
        ]); 

    }
}
