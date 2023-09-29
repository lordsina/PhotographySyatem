<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Todo;
// use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


                    // Inserting records for user with ID 1
        Todo::create([
            "user_id" => 1,
            "title" => "خرید وسایل",
            "description" => "گوشت - ماست - سوسیس",
            "completed" => true,
        ]);

        Todo::create([
            "user_id" => 1,
            "title" => "خرید",
            "description" => "ماژول",
            "completed" => false,
        ]);

        Todo::create([
            "user_id" => 1,
            "title" => "گیتار",
            "description" => "تمرین درس خوان مارتین",
            "completed" => true,
        ]);

        // Inserting a record for user with ID 2
        Todo::create([
            "user_id" => 2,
            "title" => "وسایل تحریر",
            "description" => "قلم -۰ مداد",
            "completed" => true,
        ]);

        // DB::table('todos')->insert([
        //     "user_id"=>2,
        //     "title"=>"وسایل تحریر",
        //     "description"=>"قلم -۰ مداد",
        //     "completed"=>true,
        //     'created_at'=>now(),
        // ]);

    }
}
