<?php

use Illuminate\Database\Seeder;


class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++){
            $recipe = new \p4\Recipe();

            //used for seeding w/ incrementing number for unique entries
            $counter = $i;

            $recipe->recipe_name = 'Recipe Name ' . $counter;
            $recipe->honey_type = 'Honey Type ' . $counter;
            $recipe->yeast_type = 'Yeast Type ' . $counter;
            $recipe->user_id = $counter;
            $recipe->difficulty = 'Difficulty Level ' . $counter;
            $recipe->recipe_text = 'Recipe Text ' . $counter;

            $recipe->save();
        }
    }
}