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
                'nom' => 'Edgar Wright',
                'date' => '1974-04-18',
                'photo' => 'https://th.bing.com/th/id/OIP.t_V68JZejEfG8A-QK7D97wHaE7?pid=ImgDet&rs=1'
            ],
            [
                'id' => 5,
                'nom' => 'Edgar Wright',
                'date' => '1974-04-18',
                'photo' => 'https://th.bing.com/th/id/OIP.t_V68JZejEfG8A-QK7D97wHaE7?pid=ImgDet&rs=1'
            ],
            [
                'id' => 6,
                'nom' => 'Edgar Wright',
                'date' => '1974-04-18',
                'photo' => 'https://th.bing.com/th/id/OIP.t_V68JZejEfG8A-QK7D97wHaE7?pid=ImgDet&rs=1'
            ],
            [
                'id' => 7,
                'nom' => 'Edgar Wright',
                'date' => '1974-04-18',
                'photo' => 'https://th.bing.com/th/id/OIP.t_V68JZejEfG8A-QK7D97wHaE7?pid=ImgDet&rs=1'
            ],
            [
                'id' => 8,
                'nom' => 'Edgar Wright',
                'date' => '1974-04-18',
                'photo' => 'https://th.bing.com/th/id/OIP.t_V68JZejEfG8A-QK7D97wHaE7?pid=ImgDet&rs=1'
            ],
            [
                'id' => 9,
                'nom' => 'Edgar Wright',
                'date' => '1974-04-18',
                'photo' => 'https://th.bing.com/th/id/OIP.t_V68JZejEfG8A-QK7D97wHaE7?pid=ImgDet&rs=1'
            ],
            [
                'id' => 10,
                'nom' => 'Edgar Wright',
                'date' => '1974-04-18',
                'photo' => 'https://th.bing.com/th/id/OIP.t_V68JZejEfG8A-QK7D97wHaE7?pid=ImgDet&rs=1'
            ]
        ]);  
    }
}
