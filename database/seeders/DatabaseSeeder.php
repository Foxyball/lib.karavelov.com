<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // $this->call(UsersSeeder::class);
        // $this->call(AuthorSeeder::class);
        // $this->call(GenreSeeder::class);
        // $this->call(PublisherSeeder::class);
        //  $this->call(BookSeeder::class);
        $this->call(OrderSeeder::class);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
