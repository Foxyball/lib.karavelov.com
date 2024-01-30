<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'status' => '1',
                'date_add' => '2024-01-28 07:43:41',
                'date_end' => '2024-02-04 07:43:41',
                'user_id' => '2',
                'user_id_text' => 'Test',
                'user_fullname' => 'Христо Събев',
                'book_1_id' => '1',
                'book_1_title' => 'Хъшове',
            ]
        ]);
    }
}
