<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usagers')->insert([
            [       
                'id' => 1,
                'email' => 'Meow@Meow.com',
                'password' => 'Meow',
                'username' => 'Meow',
                'nom' => 'Meow',
                'prenom' => 'Meow',
                'role' => 'admin',
            ]
            ]);
        
        
    }
}
