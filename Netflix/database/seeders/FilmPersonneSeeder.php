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
                'Film.id' => 10,
                'Personnes.id' => 9,
                'Personnes.id' => 10,
                'Personnes.id' => 11
            ] ,
            [
                'id' => 2,
                'Film.id' => 1,
                'Personnes.id' => 1,
                'Personnes.id' => 12
            ] ,
            [
                'id' => 3,
                'Film.id' => 2,
                'Personnes.id' => 2,
                'Personnes.id' => 13
            ] ,
            [
                'id' => 4,
                'Film.id' => 3,
                'Personnes.id' => 3,
                'Personnes.id' => 14
            ] ,
            [
                'id' => 5,
                'Film.id' => 4,
                'Personnes.id' => 3,
                'Personnes.id' => 15
            ] ,
            [
                'id' => 6,
                'Film.id' => 5,
                'Personnes.id' => 4,
                'Personnes.id' => 16,
            ] ,
            [
                'id' => 7,
                'Film.id' => 6,
                'Personnes.id' => 5,
                'Personnes.id' => 17,
            ] ,
            [
                'id' => 8,
                'Film.id' => 7,
                'Personnes.id' => 6,
                'Personnes.id' => 18,
            ] ,
            [
                'id' => 9,
                'Film.id' => 8,
                'Personnes.id' => 7,
                'Personnes.id' => 19
            ] ,
            [
                'id' => 10,
                'Film.id' => 9,
                'Personnes.id' => 8,
                'Personnes.id' => 20,
            ] 
        ]); }
}
