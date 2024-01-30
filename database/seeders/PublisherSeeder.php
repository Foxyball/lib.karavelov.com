<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('publishers')->insert([
            [
                'date_add' => '2024-01-28 07:43:41',
                'publisher' => 'Ровита',
                'created_at' => now(),
            ],
            [
                'date_add' => '2024-01-28 07:43:41',
                'publisher' => 'Одри',
                'created_at' => now(),
            ],
            [
                'date_add' => '2024-01-28 07:43:41',
                'publisher' => 'Кръгозор',
                'created_at' => now(),
            ],
            [
                'date_add' => '2024-01-28 07:43:41',
                'publisher' => 'Ирис',
                'created_at' => now(),
            ],
            [
                'date_add' => '2024-01-28 07:43:41',
                'publisher' => 'бгучебник',
                'created_at' => now(),
            ],
            [
                'date_add' => '2024-01-28 07:43:41',
                'publisher' => 'Зиг Заг',
                'created_at' => now(),
            ],
            [
                'date_add' => '2024-01-28 07:43:41',
                'publisher' => 'Елмас',
                'created_at' => now(),
            ],
            [
                'date_add' => '2024-01-28 07:43:41',
                'publisher' => 'Егмонт',
                'created_at' => now(),
            ],
            [
                'date_add' => '2024-01-28 07:43:41',
                'publisher' => 'Агато',
                'created_at' => now(),
            ],
            [
                'date_add' => '2024-01-28 07:43:41',
                'publisher' => 'Перо',
                'created_at' => now(),
            ],
            [
                'date_add' => '2024-01-28 07:43:41',
                'publisher' => 'Хермес',
                'created_at' => now(),
            ],
            [
                'date_add' => '2024-01-28 07:43:41',
                'publisher' => 'Анубис',
                'created_at' => now(),
            ],
            [
                'date_add' => '2024-01-28 07:43:41',
                'publisher' => 'Просвета',
                'created_at' => now(),
            ],
            [
                'date_add' => '2024-01-28 07:43:41',
                'publisher' => 'Сиела',
                'created_at' => now(),
            ]
        ]);
    }
}
