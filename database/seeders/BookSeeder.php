<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Bookcomment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory(10)
        ->has(Bookcomment::factory()->count(3))
        ->create();

        
    }
}
