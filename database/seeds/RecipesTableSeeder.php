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
        //
        DB::table('recipes')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'recipe_name' => 'Delicious Recipe 1',
            'honey_type' => 'Delicious Honey Type 1',
            'yeast_type' => 'Wine Yeast 1',
            'created_by' => 0,
            'difficulty' => 'Very Easy',
            'recipe_text' => 'This is a really great recipe. Add some honey to the water, add yeast, then you have mead!'
        ]);
    }
}