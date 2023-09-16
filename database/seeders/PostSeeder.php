<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'user_id'=>1,
            'title'=>"دنیای سوفی",
            'content'=>"سقراط یکی از داشمندان بزرگ بوده است و جلوتر از قرن خود بوده است.",
            'category_id'=>1,
            'created_at'=>now(),
        ]);
        DB::table('posts')->insert([
            'user_id'=>2,
            'title'=>"مردی بنام اوه",
            'content'=>"او چقدر زیبا بود به اندازه خورشید.",
            'category_id'=>1,
            'created_at'=>now(),
        ]);
        DB::table('posts')->insert([
            'user_id'=>1,
            'title'=>"به روز رسانی جدید",
            'content'=>"به دلیل مشکلات  در زیر ساخت ما سایت خود را بروز کرده ایم.",
            'category_id'=>3,
            'created_at'=>now(),
        ]);
    }
}
