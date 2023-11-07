<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('personnes')->insert([
            [
                'id' => 1,
                'nom' => 'Edgar Wright',
                'date' => '1974-04-18',
                'photo' => 'https://th.bing.com/th/id/OIP.t_V68JZejEfG8A-QK7D97wHaE7?pid=ImgDet&rs=1'
            ],
            [
                'id' => 2,
                'nom' => 'Damien Chazelle',
                'date' => '1985-01-19',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Damien_Chazelle_%28cropped%29.jpg/640px-Damien_Chazelle_%28cropped%29.jpg'
            ],
            [
                'id' => 3,
                'nom' => 'Christopher Nolan',
                'date' => '1970-07-30',
                'photo' => 'https://phantom-marca.unidadeditorial.es/c7327f7fc30cb4757be34501b9aa07a4/resize/828/f/jpg/assets/multimedia/imagenes/2023/07/29/16906452894987.jpg'
            ],
            [
                'id' => 4,
                'nom' => 'Greg Berlanti',
                'date' => '1972-05-24',
                'photo' => 'https://variety.com/wp-content/uploads/2022/05/Greg-Berlanti-Walk-of-Fame-Honor.jpg?w=1000'
            ],
            [
                'id' => 5,
                'nom' => 'Simon McQuoid',
                'date' => '1984-04-23',
                'photo' => 'https://th.bing.com/th?id=OSK.136b1de95cc556d504238b2df77a2f9e&w=120&h=120&c=12&o=6&pid=SANGAM'
            ],
            [
                'id' => 6,
                'nom' => 'Dan Trachtenberg',
                'date' => '1974-04-18',
                'photo' => 'https://hips.hearstapps.com/hmg-prod/images/dan-trachtenberg-649d7815a7252.jpg?crop=0.550xw:0.375xh;0.254xw,0.116xh&resize=980:*'
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
                'photo' => 'https://ca-times.brightspotcdn.com/dims4/default/7f80c43/2147483647/strip/true/crop/4417x2945+0+0/resize/2400x1600!/quality/75/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2Fd2%2Fe5%2F97f637e442d8b385971d15bdc5c9%2Fla-et-robert-rodriguez-handout-27.JPG'
            ],
            [
                'id' => 9,
                'nom' => 'Lana Wachowski',
                'date' => '1965-06-21',
                'photo' => 'https://img.lemde.fr/2021/12/20/0/0/2095/3000/664/0/75/0/23c58f3_379763005-063-1359828195.jpg'
            ],
            [
                'id' => 10,
                'nom' => 'Lilly Watchwoski',
                'date' => '1967-12-29',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMjEzMTc2MDQ5OV5BMl5BanBnXkFtZTcwNjkzNDY0OA@@._V1_.jpg'
            ],
            [
                'id' => 11,
                'nom' => 'Keanu Reeves',
                'date' => '1964-09-02',
                'photo' => 'https://cdn.britannica.com/11/215011-050-3127A07E/American-actor-Keanu-Reeves-2014.jpg'
            ],
            [
                'id' => 12,
                'nom' => 'Michael Cera',
                'date' => '1988-06-07',
                'photo' => 'https://www.themoviedb.org/t/p/w500/lFKyW2C7xj7X4nWpOEbVIDGOKrH.jpg'
            ],
            [
                'id' => 13,
                'nom' => 'Miles Teller ',
                'date' => '1987-02-20',
                'photo' => 'https://ew.com/thmb/2JPWFgcSfeqjKrlt5GDPfIO70PY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/divergent-miles-teller-a500fb878d9d4fbf8c0e0c972b0dab85.jpg'
            ],
            [
                'id' => 14,
                'nom' => 'Matthew McConaughey',
                'date' => '1969-11-04',
                'photo' => 'https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2022/07/918/516/Matthew-McConaughey-young.jpg?ve=1&tl=1'
            ],
            [
                'id' => 15,
                'nom' => 'John David Washington',
                'date' => '1984-07-28',
                'photo' => 'https://www.themoviedb.org/t/p/w500/qoOp8XvZ4v7B0C9ZmtoRCl9CDSO.jpg'
            ],
            [
                'id' => 16,
                'nom' => 'Ezra Miller',
                'date' => '1992-09-30',
                'photo' => 'https://i.guim.co.uk/img/media/1bbbdb636e4555d95fb22b865cdef8e435bba902/0_26_4742_2847/master/4742.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=cb9aa60b7aea7f5634b7c593316d8a12'
            ],
            [
                'id' => 17,
                'nom' => 'Hiroyuki Sanada',
                'date' => '1960-10-12',
                'photo' => 'data:image/jpeg;base64,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'
            ],
            [
                'id' => 18,
                'nom' => 'Hiroyuki Sanada',
                'date' => '1992-09-30',
                'photo' => 'https://images.squarespace-cdn.com/content/v1/51b3dc8ee4b051b96ceb10de/1623950765561-9T5DT4NDM8XBNX2ZSDFW/hiroyuki+sanada.jpg'
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
                'photo' => 'https://i.pinimg.com/564x/fd/80/1b/fd801ba89f0528ec5791bbeb10481dfc.jpg'
            ]
        ]);  
    }
}
