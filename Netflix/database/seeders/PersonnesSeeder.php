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
                'photo' => 'https://th.bing.com/th/id/R.e77a86aa90885692e578f071d635378a?rik=Mu5RwzlsyLFj%2fQ&riu=http%3a%2f%2fbr.web.img3.acsta.net%2fpictures%2f18%2f07%2f26%2f21%2f58%2f5869922.jpg&ehk=zID%2bH9z0VxLqG%2fDanmRGFtRD8wpiNw4Wuq78AT3Gprw%3d&risl=&pid=ImgRaw&r=0'
            ],
            [
                'id' => 3,
                'nom' => 'Christopher Nolan',
                'date' => '1970-07-30',
                'photo' => 'https://th.bing.com/th/id/OIP.t_V68JZejEfG8A-QK7D97wHaE7?pid=ImgDet&rs=1'
            ],
            [
                'id' => 4,
                'nom' => 'Greg Berlanti',
                'date' => '1972-05-24',
                'photo' => 'https://th.bing.com/th/id/R.d1bba014500487ee45980647f9d75fd1?rik=i1E%2bsOTYqt3Pyw&riu=http%3a%2f%2fbr.web.img3.acsta.net%2fpictures%2f19%2f10%2f29%2f20%2f54%2f2334002.jpg&ehk=VDYt2anukXf7fYsU19C5oVEQ5rNjK%2bE23OHWhPOwYN8%3d&risl=&pid=ImgRaw&r=0'
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
                'photo' => 'data:image/jpeg;base64,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'
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
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMjEzMTc2MDQ5OV5BMl5BanBnXkFtZTcwNjkzNDY0OA@@._V1_.jpg'
            ],
            [
                'id' => 10,
                'nom' => 'Lilly Watchwoski',
                'date' => '1967-12-29',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMjEzMTc2MDQ5OV5BMl5BanBnXkFtZTcwNjkzNDY0OA@@._V1_.jpg'
            ]
        ]);  
    }
}
