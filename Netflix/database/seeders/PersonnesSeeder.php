<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnesSeeder extends Seeder
{

    public function run(): void
    {

        DB::table('personnes')->insert([
            [
                'id' => 1,
                'nom' => 'Edgar Wright',
                'date' => '1974-04-18',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTMxMjgyMjQ4NF5BMl5BanBnXkFtZTcwMTU0ODk2Mw@@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'id' => 2,
                'nom' => 'Damien Chazelle',
                'date' => '1985-01-19',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMjE2MzcyODA3MV5BMl5BanBnXkFtZTgwNTA3NTU2MjE@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'id' => 3,
                'nom' => 'Christopher Nolan',
                'date' => '1970-07-30',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BNjE3NDQyOTYyMV5BMl5BanBnXkFtZTcwODcyODU2Mw@@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'id' => 4,
                'nom' => 'Greg Berlanti',
                'date' => '1972-05-24',
                'photo' => 'https://static.wikia.nocookie.net/doompatrol/images/8/80/Greg_Berlanti.png/revision/latest?cb=20200329111706'
            ],
            [
                'id' => 5,
                'nom' => 'Simon McQuoid',
                'date' => '1984-04-23',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BOTA0Y2JhY2MtZWU4YS00ZTk5LWFlNzYtYjg4ZGRkODA3NThhXkEyXkFqcGdeQXVyMjkzNTU5OQ@@._V1_.jpg'
            ],
            [
                'id' => 6,
                'nom' => 'Dan Trachtenberg',
                'date' => '1974-04-18',
                'photo' => 'https://www.themoviedb.org/t/p/w500/ce3rCLjSPyvq89D9kd2pyIlLny1.jpg'
            ],
            [
                'id' => 7,
                'nom' => 'James Nguyen',
                'date' => '1966-09-01',
                'photo' => 'https://images.mubicdn.net/images/cast_member/106730/cache-168625-1472611247/image-w856.jpg?size=800x'
            ],
            [
                'id' => 8,
                'nom' => 'Robert Rodriguez',
                'date' => '1968-06-20',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTc0NDg4ODAwNF5BMl5BanBnXkFtZTgwMTIxNTA0MjE@._V1_.jpg'
            ],
            [
                'id' => 9,
                'nom' => 'Lana Wachowski',
                'date' => '1965-06-21',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMjEzMTc2MDQ5OV5BMl5BanBnXkFtZTcwNjkzNDY0OA@@._V1_.jpg'
            ],
            [
                'id' => 10,
                'nom' => 'Lilly Watchwoski',
                'date' => '1967-12-29',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTU1Mjc1MjkzNV5BMl5BanBnXkFtZTgwOTc1NDQ1ODE@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'id' => 11,
                'nom' => 'Keanu Reeves',
                'date' => '1964-09-02',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BNGJmMWEzOGQtMWZkNS00MGNiLTk5NGEtYzg1YzAyZTgzZTZmXkEyXkFqcGdeQXVyMTE1MTYxNDAw._V1_.jpg'
            ],
            [
                'id' => 12,
                'nom' => 'Michael Cera',
                'date' => '1988-06-07',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BNTgyNDgxMjUyOV5BMl5BanBnXkFtZTcwMDYxNzY1OQ@@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'id' => 13,
                'nom' => 'Miles Teller ',
                'date' => '1987-02-20',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BM2ZiYThiZTUtYmM0ZS00ZWQzLTgzMTEtZWY1ZDkwNWM4ZGNmXkEyXkFqcGdeQXVyMTE1MTYxNDAw._V1_.jpg'
            ],
            [
                'id' => 14,
                'nom' => 'Matthew McConaughey',
                'date' => '1969-11-04',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTg0MDc3ODUwOV5BMl5BanBnXkFtZTcwMTk2NjY4Nw@@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'id' => 15,
                'nom' => 'John David Washington',
                'date' => '1984-07-28',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BOTY4NDcyNDM5OF5BMl5BanBnXkFtZTgwMjk4Mzk0NTM@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'id' => 16,
                'nom' => 'Ezra Miller',
                'date' => '1992-09-30',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BOTQ2YmNlZDEtM2EwNi00N2JhLTk3ZDktMjBmNzYwYWI1OWZmXkEyXkFqcGdeQXVyNjk1MjYyNTA@._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'id' => 17,
                'nom' => 'Hiroyuki Sanada',
                'date' => '1960-10-12',
                'photo' => 'data:image/jpeg;base64,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'
            ],
            [
                'id' => 18,
                'nom' => 'Danny Trejo',
                'date' => '1944-05-16',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMzcxNTQ1ODQxMl5BMl5BanBnXkFtZTYwMzI4MDA2._V1_FMjpg_UX1000_.jpg'
            ],
            [
                'id' => 19,
                'nom' => 'Amber Midthunder',
                'date' => '1997-04-26',
                'photo' => 'https://assets.vogue.com/photos/62efe87a88c2841ec14c9bdc/3:2/w_5127,h_3418,c_limit/8R8A75422.jpeg'
            ],
            [
                'id' => 20,
                'nom' => 'Rosa Salazar',
                'date' => '1985-07-16',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BM2FkNDAwMDItMWQwNy00YzE5LWJiM2EtZmNhZTZjZDk1YmJlXkEyXkFqcGdeQXVyMjQwMTcxMzA@._V1_.jpg'
            ]
        ]);  
    }
}
