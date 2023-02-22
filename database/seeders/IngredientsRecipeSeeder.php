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
                'ingredient_id' => 1,
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 2,
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 4,
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 1,
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
