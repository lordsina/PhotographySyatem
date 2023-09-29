<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $post=new Post();
        $post->title="دنیای سوفی";
        $post->content="سقراط یکی از داشمندان بزرگ بوده است و جلوتر از قرن خود بوده است.";
        $post->category_id=1;
        $post->user_id=1;
        $post->save();

        $post=new Post();
        $post->title="خوش آمدید";
        $post->content="چطوری؟";
        $post->category_id=1;
        $post->user_id=2;
        $post->save();

        $post=new Post();
        $post->title="سلام";
        $post->content="پست جدید";
        $post->category_id=3;
        $post->user_id=1;
        $post->save();

    }
}
