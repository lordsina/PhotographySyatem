<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Bookcomment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Nette\Utils\Random;

class BookCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //     Book::factory()
    //     ->has(
    //         Bookcomment::factory()
    //         ->count(5)
    //         //->state(function (array $attributes,User $user){
    //        //     return ['user_id'=>$user->all()->random()];
    //    // })
    //     )
    //     ->create();

        // $book=Book::factory()->create();

        // $bookcomments=Bookcomment::factory()
        // ->count(3)
        // ->for($book)
        // ->create();
        
    }
}
