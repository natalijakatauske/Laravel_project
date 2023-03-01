<?php

namespace Database\Seeders;

use App\Models\Admin\IngredientsRecipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientsRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients_recipe = [
            [
                'recipe_id' => 1,
                'ingredient_id' => 2,
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 3,
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 4,
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 18,
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 27,
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 1,
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 2,
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 7,
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 11,
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 27,
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 12,
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 3,
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 18,
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 4,
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 5,
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 5,
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 4,
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 13,
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 8,
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 25,
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 12,
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 9,
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 25,
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 21,
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 18,
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 23,
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 22,
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 1,
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 10,
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 12,
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 25,
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 18,
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 16,
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 6,
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 5,
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 12,
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 18,
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 25,
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 7,
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 18,
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 20,
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 27,
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 25,
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 17,
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 3,
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 16,
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 10,
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 27,
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 28,
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 14,
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 6,
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 9,
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 26,
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 25,
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 15,
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 26,
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 9,
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 8,
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 28,
            ],
            [
                'recipe_id' => 12,
                'ingredient_id' => 19,
            ],
            [
                'recipe_id' => 12,
                'ingredient_id' => 8,
            ],
            [
                'recipe_id' => 12,
                'ingredient_id' => 20,
            ],
            [
                'recipe_id' => 12,
                'ingredient_id' => 27,
            ],
            [
                'recipe_id' => 13,
                'ingredient_id' => 24,
            ],
            [
                'recipe_id' => 13,
                'ingredient_id' => 8,
            ],
            [
                'recipe_id' => 13,
                'ingredient_id' => 20,
            ],
            [
                'recipe_id' => 13,
                'ingredient_id' => 27,
            ],
        ];
 
        foreach ($ingredients_recipe as $item) {
            IngredientsRecipe::create([
                'recipe_id' => $item['recipe_id'],
                'ingredient_id' => $item['ingredient_id'],
            ]);
        }
    }
}
