<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            //increment the recipe id
            $table->increments('id');

            //generate the columns to track changes to a row
            $table->timestamps();

            //generate the other columns for each recipe
            $table->string('recipe_name');
            $table->string('honey_type');
            $table->string('yeast_type');
            $table->integer('user_id');
            $table->string('difficulty');
            $table->string('recipe_text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop the table
        Schema::drop('recipes');
    }
}
