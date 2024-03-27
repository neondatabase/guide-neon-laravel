<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            [
                'name' => 'J.R.R. Tolkien',
                'bio' => 'The creator of Middle-earth and author of The Lord of the Rings.',
                'books' => [
                    ['title' => 'The Fellowship of the Ring'],
                    ['title' => 'The Two Towers'],
                    ['title' => 'The Return of the King'],
                ],
            ],
            [
                'name' => 'George R.R. Martin',
                'bio' => 'The author of the epic fantasy series A Song of Ice and Fire.',
                'books' => [
                    ['title' => 'A Game of Thrones'],
                    ['title' => 'A Clash of Kings'],
                    ['title' => 'A Storm of Swords'],
                ],
            ],
            [
                'name' => 'J.K. Rowling',
                'bio' => 'The creator of the Harry Potter series.',
                'books' => [
                    ['title' => 'Harry Potter and the Philosopher\'s Stone'],
                    ['title' => 'Harry Potter and the Chamber of Secrets'],
                ],
            ],
        ];

        foreach ($authors as $authorData) {
            $author = Author::create([
                'name' => $authorData['name'],
                'bio' => $authorData['bio'],
            ]);

            foreach ($authorData['books'] as $bookData) {
                $author->books()->create($bookData);
            }
        }
    }
}
