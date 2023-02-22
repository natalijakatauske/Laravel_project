<?php

namespace Database\Seeders;

use App\Models\Front\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
            [
                'name' => 'Caesar Salad',
                'category_id' => 1,
                'description' => 'A Caesar salad is a green salad of romaine lettuce and croutons dressed with lemon juice, olive oil, egg, Worcestershire sauce, anchovies, garlic, Dijon mustard, Parmesan cheese, and black pepper.',
                'is_active' => 1,
            ],
            [
                'name' => 'Avocado Salmon Salad',
                'category_id' => 1,
                'description' => 'This summery salad is loded with crunchy cucumber, crisp lettuce and juicy pan seared salmon.',
                'is_active' => 1,
            ],
            [
                'name' => 'French Onion Soup',
                'category_id' => 2,
                'description' => 'French onion soup is a soup usually based on meat stock and onions, and often served gratinéed with croutons or a larger piece of bread covered with cheese floating on top.',
                'is_active' => 1,
            ],
            [
                'name' => 'Roasted Butternut Squash Soup',
                'category_id' => 2,
                'description' => 'The perfect butternut squash soup with plenty of natural sweetness, a bit of spice, and super creamy texture.',
                'is_active' => 1,
            ],
            [
                'name' => 'Crispy Onion Rings',
                'category_id' => 3,
                'description' => 'These onion rings are crispy on the outside, tender on the inside, and seasoned to perfection',
                'is_active' => 1,
            ],
            [
                'name' => 'Shrimp Tacos',
                'category_id' => 3,
                'description' => 'These shrimp tacos are loaded with plump juicy shrimp, crisp cabbage, avocado, cotija cheese, cilantro and an easy shrimp taco sauce that will win you over.',
                'is_active' => 1,
            ],
            [
                'name' => 'Chicken Marsala',
                'category_id' => 4,
                'description' => 'Chicken marsala is an Italian-American dish of chicken escalopes in a Marsala wine sauce.',
                'is_active' => 1,
            ],
            [
                'name' => 'Baked Salmon with Garlic and Dijon',
                'category_id' => 4,
                'description' => 'Baked salmon is juicy and flaky with a flavorful garlic, dijon, lemon glaze.',
                'is_active' => 1,
            ],
            [
                'name' => 'Lasagna',
                'category_id' => 4,
                'description' => 'Italian dish made of stacked layers of lasagna alternating with fillings such as ragù, béchamel sauce, vegetables, cheeses, and seasonings and spices.',
                'is_active' => 1,
            ],
            [
                'name' => 'Chocolate Soufflé',
                'category_id' => 5,
                'description' => 'Chocolate soufflé has a rich chocolate flavor with a fluffy and moist center.',
                'is_active' => 1,
            ],
            [
                'name' => 'Blueberry Pie',
                'category_id' => 5,
                'description' => 'Blueberry pie is a pie with a blueberry filling, bursting with sweet, juicy berries and topped with a classic lattice crust.',
                'is_active' => 1,
            ],
            [
                'name' => 'Strawberry Lemonade',
                'category_id' => 6,
                'description' => 'Strawberry Lemonade is a fresh summery drink with only 3 ingredients.',
                'is_active' => 1,
            ],
            [
                'name' => 'Hot Apple Cider',
                'category_id' => 6,
                'description' => 'Hot apple cider is so warming and comforting in the cooler months.',
                'is_active' => 1,
            ],
        ];

        foreach ($recipes as $recipe) {
            Recipe::create([
                'name' => $recipe['name'],
                'category_id' => $recipe['category_id'],
                'description' => $recipe['description'],
                'is_active' => $recipe['is_active'],
            ]);
        }
    }
}
