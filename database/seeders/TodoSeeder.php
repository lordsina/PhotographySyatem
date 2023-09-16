<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('todos')->insert([
            "user_id"=>1,
            "title"=>"خرید وسایل",
            "description"=>"گوشت - ماست - سوسیس",
            "completed"=>true,
            'created_at'=>now(),
        ]);
        DB::table('todos')->insert([
            "user_id"=>1,
            "title"=>"خرید",
            "description"=>"ماژول",
            "completed"=>false,
            'created_at'=>now(),
        ]);
        DB::table('todos')->insert([
            "user_id"=>1,
            "title"=>"گیتار",
            "description"=>"تمرین درس خوان مارتین",
            "completed"=>true,
            'created_at'=>now(),
        ]);
        DB::table('todos')->insert([
            "user_id"=>2,
            "title"=>"وسایل تحریر",
            "description"=>"قلم -۰ مداد",
            "completed"=>true,
            'created_at'=>now(),
        ]);

    }
}
