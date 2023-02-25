<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // DB::statement('INSERT INTO ingredients_recipe (`recipe_id`, `ingredient_id`)
        // SELECT `id` as `recipe_id`, `ingredient_id` FROM recipes
        // WHERE ingredient_id IS NOT NULL');

        // DB::statement('INSERT INTO ingredients_recipe (`recipe_id`)
        // SELECT `id` as `recipe_id` FROM recipes');

        // DB::statement('INSERT INTO ingredients_recipe (`ingredient_id`)
        // SELECT `id` as `ingredient_id` FROM ingredients');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
