<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmPersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('film_personne')->insert([ 
            [
                'id' => 1,
                'film_id' => 10,
                'personne_id' => 9,
                'personne_id' => 10,
                'personne_id' => 11
            ] ,
            [
                'id' => 2,
                'film_id' => 1,
                'personne_id' => 1,
                'personne_id' => 12
            ] ,
            [
                'id' => 3,
                'film_id' => 2,
                'personne_id' => 2,
                'personne_id' => 13
            ] ,
            [
                'id' => 4,
                'film_id' => 3,
                'personne_id' => 3,
                'personne_id' => 14
            ] ,
            [
                'id' => 5,
                'film_id' => 4,
                'personne_id' => 3,
                'personne_id' => 15
            ] ,
            [
                'id' => 6,
                'film_id' => 5,
                'personne_id' => 4,
                'personne_id' => 16,
            ] ,
            [
                'id' => 7,
                'film_id' => 6,
                'personne_id' => 5,
                'personne_id' => 17,
            ] ,
            [
                'id' => 8,
                'film_id' => 7,
                'personne_id' => 6,
                'personne_id' => 18,
            ] ,
            [
                'id' => 9,
                'film_id' => 8,
                'personne_id' => 7,
                'personne_id' => 19
            ] ,
            [
                'id' => 10,
                'film_id' => 9,
                'personne_id' => 8,
                'personne_id' => 20,
            ] 
        ]); }
}
