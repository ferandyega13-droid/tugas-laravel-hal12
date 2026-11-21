<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'Ferandy Ega Putra Pratama',
            'email' => 'ferandyega12@gmail.com',
            'password' => Hash::make('123456'), // Ganti password jika perlu
            'foto' => '',
            'role' => 'admin',
        ]);
    }
}