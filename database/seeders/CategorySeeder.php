<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => "کتاب",
        ]);

        Category::create([
            'name' => "پست",
        ]);

        Category::create([
            'name' => "اخبار",
        ]);
    }
}
