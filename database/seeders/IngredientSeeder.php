<?php

namespace Database\Seeders;

use App\Models\Admin\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ingredient::create([
            'name' => 'Avocado',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Lettuce',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Cheese',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Bread',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Beef stock',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Heavy cream',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Salmon',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Water',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Flour',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Tomato',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Cucumber',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Onion',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Squash',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Chocolate',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Blueberry',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Chicken',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Pasta',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Garlic',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Strawberry',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Honey',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Milk',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Shrimp',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Tacos',
            'is_active' => 1,
        ]);

        Ingredient::create([
            'name' => 'Apple',
            'is_active' => 1,
        ]);
        Ingredient::create([
            'name' => 'Apple',
            'is_active' => 1,
        ]);
        Ingredient::create([
            'name' => 'Salt',
            'is_active' => 1,
        ]);
        Ingredient::create([
            'name' => 'Egg',
            'is_active' => 1,
        ]);
        Ingredient::create([
            'name' => 'Olive Oil',
            'is_active' => 1,
        ]);
        Ingredient::create([
            'name' => 'Lemon',
            'is_active' => 1,
        ]);
        Ingredient::create([
            'name' => 'Dijon mustard',
            'is_active' => 1,
        ]);
    }
}
