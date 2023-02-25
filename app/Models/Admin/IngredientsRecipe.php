<?php

namespace App\Models\Admin;

use App\Models\Front\Recipe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class IngredientsRecipe extends Model
{
    use HasFactory;

    public $table = 'ingredients_recipe';

    public function ingredients(): BelongsToMany
    {
        return $this->belongsToMany(Ingridient::class);
    }

    public function recipes(): BelongsToMany
    {
        return $this->belongsToMany(Recipe::class);
    }
}
