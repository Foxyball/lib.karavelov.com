<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'author' => 'Димитър Димов',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Станислав Стратиев',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Емилиян Станев',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Дора Габе',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Димитър Талев',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Никола Вапцаров',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Йордан Радичков',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Димчо Дебелянов',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Атанас Далчев',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Елисавета Багряна',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Гео Милев',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Алеко Константинов',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Пейо Яворов',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Елин Пелин',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Йордан Йовков',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Пенчо Славейков',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Христо Смирненски',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Любен Каравелов',
                'date_add' => now(),
                'created_at' => now(),
            ],
            [
                'author' => 'Иван Вазов',
                'date_add' => now(),
                'created_at' => now(),
            ]
        ]);
    }
}
