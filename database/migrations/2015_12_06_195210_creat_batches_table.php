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
            $table->integer('created_by');
            $table->date('date_completed');
            $table->integer('recipe_used');
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