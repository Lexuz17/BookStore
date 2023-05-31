<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'title' => 'The Kite Runner',
                'author' => 'Khaled Hosseini',
                'language' => 'Inggris',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1579036753i/77203.jpg',
                'genre' => 'Motivation',
                'price' => 76,
                'publication_date' => '2003-05-29',
                'publisher' => 'Riverhead Books',
                'description' => "The Kite Runner, written by Khaled Hosseini, tells the extraordinary story of an unlikely friendship between a wealthy Afgha boy, named Amir, and Hassan, the son of his father's servant — who he later finds out, after Hassan's death.",
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => 'The Chronicles of Narnia',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1449868701l/11127._SY475_.jpg',
                'genre' => 'Novel',
                'price' => 20,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => 'The Alchemist',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1466865681l/25076674._SY475_.jpg',
                'genre' => 'Novel',
                'price' => 81,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => 'The Giving Tree',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'https://upload.wikimedia.org/wikipedia/en/7/79/The_Giving_Tree.jpg',
                'genre' => 'Novel',
                'price' => 61,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => 'Slaughtherhouse-five',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1440319389l/4981._SY475_.jpg',
                'genre' => 'Novel',
                'price' => 61,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => 'Green Eggs and Ham',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'https://upload.wikimedia.org/wikipedia/en/1/11/Green_Eggs_and_Ham.jpg',
                'genre' => 'Novel',
                'price' => 24,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => 'The Little House Cookbook',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'https://media.s-bol.com/v2qVw5zBZYnX/550x612.jpg',
                'genre' => 'Novel',
                'price' => 73,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => 'The Secret Garden',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1327873635l/2998.jpg',
                'genre' => 'Novel',
                'price' => 77,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => 'Brave New World / Brave New World Revisited',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'http://prodimage.images-bn.com/pimages/9780060776091_p0_v1_s1200x630.jpg',
                'genre' => 'Novel',
                'price' => 54,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => 'Romeo and Juliet',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'http://prodimage.images-bn.com/pimages/9781451621709_p0_v5_s1200x630.jpg',
                'genre' => 'Novel',
                'price' => 49,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => 'Lord of the Files',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1356913748l/6495605.jpg',
                'genre' => 'Novel',
                'price' => 18,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => 'The Stranger',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1590930002i/49552.jpg',
                'genre' => 'Novel',
                'price' => 74,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => 'Charlotte\'s Web',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/51tP8AeYLPL._SX331_BO1,204,203,200_.jpg',
                'genre' => 'Novel',
                'price' => 39,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => 'Uncle Tom\'s Cabin',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1414349231i/46787.jpg',
                'genre' => 'Novel',
                'price' => 49,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => '1984',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'https://ebooks.gramedia.com/ebook-covers/72131/image_highres/BLK_12022541459.jpg',
                'genre' => 'Novel',
                'price' => 55,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => 'Siddhartha',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1629378189l/52036._SY475_.jpg',
                'genre' => 'Novel',
                'price' => 51,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => 'A Clockwork Orange',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/51FTcHNhQqL.jpg',
                'genre' => 'Novel',
                'price' => 42,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(20, 80)
            ],
            [
                'title' => 'Les Mis rables',
                'author' => fake()->name(),
                'language' => 'Inggris',
                'cover' => 'https://images-na.ssl-images-amazon.com/images/I/81SGVhaL+dL.jpg',
                'genre' => 'Novel',
                'price' => 65,
                'publication_date' => fake()->date(),
                'publisher' => fake()->name(),
                'description' => fake()->sentence(100),
                'stock' => fake()->numberBetween(1, 80)
            ],
        ];

        foreach($books as $book){
            Book::create($book);
        }
    }
}
