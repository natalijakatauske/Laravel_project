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
                'description' => 'A Caesar salad is a green salad of romaine lettuce and croutons dressed with lemon juice, olive oil, egg, Worcestershire sauce, anchovies, garlic, Dijon mustard, Parmesan cheese, and black pepper.
                Whisk together garlic, dijon, lemon juice, olive oil and salt. Chop the romaine, sprinkle with shredded cheese and croutons. Drizzle with dressing.',
                'is_active' => 1,
            ],
            [
                'name' => 'Avocado Salmon Salad',
                'category_id' => 1,
                'description' => 'This summery salad is loded with crunchy cucumber, crisp lettuce and juicy pan seared salmon.
                Whisk together lemon juice, olive oil, sea salt. Cook salmmon and spoon the dressing over each filet. Chop romaine, cucumber, radishes, onion, avocados. Drizzle with dressing. Add salmon. Enjoy!',
                'is_active' => 1,
            ],
            [
                'name' => 'French Onion Soup',
                'category_id' => 2,
                'description' => 'French onion soup is a soup usually based on meat stock and onions, and often served gratinéed with croutons or a larger piece of bread covered with cheese floating on top.
                Slice onions, saute stirring, sprinkle the onions with sugar, add minced garlic. Add sherry, beef stock, salt, simmer for 30 minutes. Bread slice and bake. Soup serve with hot cheesy toats.',
                'is_active' => 1,
            ],
            [
                'name' => 'Roasted Butternut Squash Soup',
                'category_id' => 2,
                'description' => 'The perfect butternut squash soup with plenty of natural sweetness, a bit of spice, and super creamy texture.
                Chop all vegetables and bake for 35-40 minutes. Transfer the roasted veggies to a blender, adding some of the stock and water and blend until smooth. Set over medium heat, add cinnamon, nutmeg, butter, maple syrup. Serve with bacon.',
                'is_active' => 1,
            ],
            [
                'name' => 'Crispy Onion Rings',
                'category_id' => 3,
                'description' => 'These onion rings are crispy on the outside, tender on the inside, and seasoned to perfection.
                Whisk together milk with vinegar, sour cream. In separate bowl wish together flour, salt, minced garlic. Dip onion rings in milk mixture, then dredge with flour. Repeat a second time. Fry onion rings for about 3 minutes. Enjoy!',
                'is_active' => 1,
            ],
            [
                'name' => 'Shrimp Tacos',
                'category_id' => 3,
                'description' => 'These shrimp tacos are loaded with plump juicy shrimp, crisp cabbage, avocado, cotija cheese, cilantro and an easy shrimp taco sauce that will win you over.
                Cook shrimps, saute 1-2 minutes per side. Toast tortillas over open gas stovetop about 10 seconds. Slice cabbage, dice avocado, onion, cilantro. Build tacos arranging toppings and shrimp over tortilla. Whisk together all sauce ingredients(sour cream, mayo, lemon juice, garlic, Sriracha souce) and serve with tacos.',
                'is_active' => 1,
            ],
            [
                'name' => 'Chicken Marsala',
                'category_id' => 4,
                'description' => 'Chicken marsala is an Italian-American dish of chicken escalopes in a Marsala wine sauce.
                Cut chicken breats, season with salt, then saute about 3-4 minutes per side, set it aside. Saute mushrooms, stir in onion, minced garlic, add marsala wine and beef stock and while stirring add heavy cream, season with salt. Return chicken to pan. Spoon the sauce over the chicken and keep on the heat about 2 minutes.',
                'is_active' => 1,
            ],
            [
                'name' => 'Baked Salmon with Garlic and Dijon',
                'category_id' => 4,
                'description' => 'Baked salmon is juicy and flaky with a flavorful garlic, dijon, lemon glaze.
                Preheat oven. Slice salmon. In a small bowl combine minced garlic, oil, lemon juice, Dijon, salt. Generously spread the marinade over the salmon, then top each peace with a slice of lemon. Bake for 12-15 minutes.',
                'is_active' => 1,
            ],
            [
                'name' => 'Lasagna',
                'category_id' => 4,
                'description' => 'Italian dish made of stacked layers of lasagna alternating with fillings such as ragù, béchamel sauce, vegetables, cheeses, and seasonings and spices.
                Place a deep pan over medium heat, add olive oil, ground beef, diced onion, pressed garlic. Then add wine and marinara, salt, pepper, sugar, cook 5 minutes. Cheese sauce: combine cottage cheese, Ricotta, mozzarella, egg. Spread meat sauce in the bottom of a deep dish, add noodles, spread meat sauce, sprinkle with cheese, then cheese sauce. Repeat. Cover with foil and bake for 45 minutes.',
                'is_active' => 1,
            ],
            [
                'name' => 'Chocolate Soufflé',
                'category_id' => 5,
                'description' => 'Chocolate soufflé has a rich chocolate flavor with a fluffy and moist center.
                Combine warm chocolate and softened butter, then wish in yolks, vanilla, salt. Separately beat egg whites until soft peaks, add sugar and beat until mixture is glossy and shiny. Fold egg whites into the chocolate mixture. Divide the mixture evenly between the prepared ramekins. Bake for 13-16 minutes.',
                'is_active' => 1,
            ],
            [
                'name' => 'Blueberry Pie',
                'category_id' => 5,
                'description' => 'Blueberry pie is a pie with a blueberry filling, bursting with sweet, juicy berries and topped with a classic lattice crust.
                Place flour, sugar and salt into the bowl of a food processor and pulse a few times to combine. Add cold diced butter, then ice water and pulse. Roll the first disk and transfer to a deep pan. Combine blueberries, lemon zest, lemon juice, sugar, flour, cinnamon, transfer into the dough-lines pie pan. Place another dough disk to the top. Bake 50-60 mintes.',
                'is_active' => 1,
            ],
            [
                'name' => 'Strawberry Lemonade',
                'category_id' => 6,
                'description' => 'There is nothing like fresh Strawberry Lemonade. If you are craving something cold and refreshing, this is it!
                Make lemonade: in a small saucepan combine water with sugar, bring just to a simmer, remove from the heat, cool. Squezze lemon juice. Blend together strawberries and basil leaves until smooth. Stir strawberry mixture, remaining sliced strawberries and lemon slices into the lemonade and serve over glasses filled with ice.',
                'is_active' => 1,
            ],
            [
                'name' => 'Hot Apple Cider',
                'category_id' => 6,
                'description' => 'Hot apple cider is so warming and comforting in the cooler months.
                Chop apples and place them in a large pot, slice prange and add to the pot(no need to peel the skin). Add cinnamon sticks, whole nutmeg, whole cloves. Drizzle the top with honey, then pour in water. Lightly boil uncovered for 1 hour. Strain your cider through a fine mesh colander. Serve hot.',
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
