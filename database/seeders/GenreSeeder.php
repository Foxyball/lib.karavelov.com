<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                'genre' => 'Драма',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Трагедия',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Комедия',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Сатира',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Стихотворение',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Песен',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Балада',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Поема',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Химн',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Елегия',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Сонет',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Ода',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Анекдот',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Приказка',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Идилия',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Разказ',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Епопея',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Легенда',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Пространно житие',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Повест',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'genre' => 'Роман',
                'date_add' => now(),
                'created_at' => now(),
            ]
        ]);
    }
}
