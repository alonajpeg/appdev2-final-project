<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Alona Pegarit', 'email' => 'alonajoy@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'Suna Rinatarou', 'email' => 'sunarintarou@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'Hinata Shoyo', 'email' => 'hinatashoyo@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'Kageyama Tobio', 'email' => 'kageyamatobio@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'Oikawa Tooru', 'email' => 'oikawatooru@gmail.com', 'password' => Hash::make('password')]
        ]);
 
    }
}
