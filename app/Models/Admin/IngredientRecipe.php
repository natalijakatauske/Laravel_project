<?php

namespace App\Models\Admin;

use App\Models\Front\Recipe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class IngredientRecipe extends Model
{
    use HasFactory;

    public $table = 'ingredient_recipe';
}
