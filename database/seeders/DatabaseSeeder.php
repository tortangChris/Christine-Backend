<?php

namespace Database\Seeders;

use App\Models\Book; // Add Book model import
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed book data
        Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'published_year' => 1925,
            'genre' => 'Fiction',
            'description' => 'A novel set in the Jazz Age that critiques the American Dream.',
        ]);

        Book::create([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'published_year' => 1960,
            'genre' => 'Fiction',
            'description' => 'A novel of racial injustice in the Deep South.',
        ]);

        Book::create([
            'title' => '1984',
            'author' => 'George Orwell',
            'published_year' => 1949,
            'genre' => 'Dystopian Fiction',
            'description' => 'A dystopian novel that critiques totalitarian regimes.',
        ]);

        // Optionally, you can still keep your User seed if needed
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
