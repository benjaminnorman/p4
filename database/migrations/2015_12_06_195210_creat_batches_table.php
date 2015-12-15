<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {

            //increment the recipe id
            $table->increments('id');

            //generate the columns to track changes to a row
            $table->timestamps();

            //generate the other columns for each recipe
            $table->string('batch_name');
            $table->integer('user_id');
            $table->date('date_completed');

            //this will be the foreign key
            $table->integer('recipe_used')->unsigned();
            $table->foreign('recipe_used')->references('id')->on('recipes');

            $table->decimal('starting_gravity');
            $table->decimal('ending_gravity');
            $table->string('batch_notes');
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