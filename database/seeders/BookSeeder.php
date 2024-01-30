<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'date_add' => '2024-01-28 07:43:41',
                'book' => 'Хъшове',
                'author_id' => '19',
                'genre_id' => '20',
                'publisher_id' => '9',
                'date_publisher_year' => '1900',
                'isbn_number' => '736782',
                'qty' => '3',
                'pages' => '20',
            ],
            [
                'date_add'=>'2024-01-28 07:43:41',
                'book'=>'Бай Ганьо',
                'author_id'=>'9',
                'genre_id'=>'7',
                'publisher_id'=>'4',
                'date_publisher_year'=>'2008',
                'isbn_number'=>'63948279',
                'qty'=>'5',
                'pages'=>'256',
            ],
            [
                'date_add'=>'2024-01-28 07:43:41',
                'book'=>'Българи от старо време',
                'author_id'=>'2',
                'genre_id'=>'2',
                'publisher_id'=>'1',
                'date_publisher_year'=>'123',
                'isbn_number'=>'63948279',
                'qty'=>'123',
                'pages'=>'123',
            ],
            [
                'date_add'=>'2024-01-28 07:43:41',
                'book'=>'Немили-недраги',
                'author_id'=>'1',
                'genre_id'=>'2',
                'publisher_id'=>'2',
                'date_publisher_year'=>'123',
                'isbn_number'=>'63948279',
                'qty'=>'123',
                'pages'=>'123',
            ],
            [
                'date_add' => '2024-01-28 07:43:41',
                'book' => 'Железният Светилник',
                'author_id' => '16',
                'genre_id' => '2',
                'publisher_id' => '2',
                'date_publisher_year' => '1900',
                'isbn_number' => '736782',
                'qty' => '3',
                'pages' => '20',
            ],
            [
                'date_add' => '2024-01-28 07:43:41',
                'book' => 'Балкански синдром',
                'author_id' => '19',
                'genre_id' => '20',
                'publisher_id' => '5',
                'date_publisher_year' => '1900',
                'isbn_number' => '736782',
                'qty' => '3',
                'pages' => '20',
            ],
            [
                'date_add'=>'2024-01-28 07:43:41',
                'book'=>'Тютюн',
                'author_id'=>'19',
                'genre_id'=>'2',
                'publisher_id'=>'5',
                'date_publisher_year'=>'2008',
                'isbn_number'=>'63948279',
                'qty'=>'5',
                'pages'=>'256',
            ]
        ]);
    }
}
