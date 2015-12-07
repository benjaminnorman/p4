<?php

use Illuminate\Database\Seeder;

class BatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('batches')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'batch_name' => 'Great Batch 1',
            'created_by' => 0,
            'date_completed' => Carbon\Carbon::now()->addDay(),
            'recipe_used' => 0,
            'starting_gravity' => 1.100,
            'ending_gravity' => 1.010,
            'batch_notes' => 'This is a great batch!'
        ]);
    }
}
