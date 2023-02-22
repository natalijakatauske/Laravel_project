<?php

namespace Database\Seeders;

use App\Models\Admin\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Salad',
            'is_active' => 1,
        ]);

        Category::create([
            'name' => 'Soup',
            'is_active' => 1,
        ]);

        Category::create([
            'name' => 'Appetizer',
            'is_active' => 1,
        ]);

        Category::create([
            'name' => 'Main',
            'is_active' => 1,
        ]);

        Category::create([
            'name' => 'Dessert',
            'is_active' => 1,
        ]);

        Category::create([
            'name' => 'Drink',
            'is_active' => 1,
        ]);
    }
}
