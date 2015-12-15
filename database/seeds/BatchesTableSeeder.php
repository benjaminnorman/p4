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
        for($i=1 ; $i<=9 ; $i++){
            $batch = new \p4\Batch();

            $counter = $i;

            $batch->batch_name = 'Batch Name ' . $counter;
            $batch->user_id = $counter;
            $batch->date_completed = Carbon\Carbon::now()->addDay($counter);
            $batch->recipe_used = $i;
            $batch->starting_gravity = 1.100;
            $batch->ending_gravity = 1.01;
            $batch->batch_notes = "This is a note about this batch";

            $batch->save();

        }
    }
}
