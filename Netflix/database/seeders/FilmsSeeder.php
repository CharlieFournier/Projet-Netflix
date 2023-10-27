<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'id' => 1,
                'titre' => 'Scott Pilgrim vs. the World',
                'resumer' => 'Scott Pilgrim vs. the World est une comédie canado-américano-britannico-japonaise',
                'duree' => 112,
                'annee' => 2010,
                'realisateur' => 1,
                'producteur' => 1,
                'lienFilm' => 1,
                'pochetteURL' => 'https://www.trustedreviews.com/wp-content/uploads/sites/54/2021/01/scottpilgrim-store-landscape-2560x1440-2560x1440-952049476.jpg',
                'rating' => 82,
                'type_id' => 1,
            ],
            [
                'id' => 2,
                'titre' => 'Whiplash',
                'resumer' => 'Whiplash est un film dramatique américain',
                'duree' => 106,
                'annee' => 2014,
                'realisateur' => 2,
                'producteur' => 2,
                'lienFilm' => 2,
                'pochetteURL' => 'https://www.themoviedb.org/t/p/original/lHTxDYso04WyDo5x4Vzxgi9EHJN.jpg',
                'rating' => 94,
                'type_id' => 2,
            ]
        ]);  
    }
}
