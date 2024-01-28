<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Христо Събев',
                'email' => 'thefoxybg@gmail.com',
                'password' => Hash::make('password'),
                'gsm' => '0888888888',
                'birth_date' => '2003-04-10',
                'address' => 'Dobrich, Bulgaria',
                'role' => 'admin',
                'active' => '1',
                'created_at' => now(),
            ],
            [
                'name' => 'Демо читател',
                'email' => 'libuser@karavelov.com',
                'password' => Hash::make('password'),
                'gsm' => '0888888888',
                'birth_date' => '1999-01-01',
                'address' => 'Dobrich, Bulgaria',
                'role' => 'user',
                'active' => '1',
                'created_at' => now(),
            ],
            [
                'name' => 'Демо библиотекар',
                'email' => 'lib@karavelov.com',
                'password' => Hash::make('password'),
                'gsm' => '0888888888',
                'birth_date' => '1980-05-03',
                'address' => 'Dobrich, Bulgaria',
                'role' => 'admin',
                'active' => '1',
                'created_at' => now(),
            ],
            [
                'name' => 'Мартин Петров',
                'email' => 'martin@dhstudio.bg',
                'password' => Hash::make('password'),
                'gsm' => '0888888888',
                'birth_date' => '1980-05-03',
                'address' => 'Dobrich, Bulgaria',
                'role' => 'user',
                'active' => '1',
                'created_at' => now(),
            ]
        ]);
    }
}
