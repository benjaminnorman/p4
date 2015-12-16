<?php

namespace p4\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use p4\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BatchController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
     * Responds to requests to GET /batches/mybatches
     */
    public function getUsersBatches(Request $request) {
        $batches = \p4\Batch::where('user_id', '=', Auth::id())->get();
        return view('batches.show')->with('batches', $batches);
    }

    /**
     * Responds to requests to GET /batches/show/{id}
     */
    public function getBatch($id) {
        $batches = \p4\Batch::where('id', '=', $id)->get();
        return view('batches.showIndividual')->with('batches', $batches);
    }

    /**
     * Responds to requests to GET /batches/show
     */
    public function getShow() {
        $batches = \p4\Batch::all();
        return view('batches.show')->with('batches', $batches);
    }


    /**
     * Responds to requests to GET /batches/create
     */
    public function getCreate() {
        //get list of recipes currently in the database for selection by the user
        $recipes = \p4\Recipe::all();

        //return 'Form to create a new batch';
        return view('batches.create')->with('recipes', $recipes);
    }

    /**
     * Responds to requests to POST /batches/create
     */
    public function postCreate(Request $request) {

        //TODO: add validation here
        $batch = new \p4\Batch();
        $batch->batch_name = $request->batch_name;
        $batch->date_completed = $request->date_completed;
        $batch->user_id = Auth::id();
        $batch->recipe_used = $request->recipe_used;
        $batch->starting_gravity = $request->starting_gravity;
        $batch->ending_gravity = $request->ending_gravity;
        $batch->batch_notes = $request->batch_notes;
        $batch->save();

        \Session::flash('flash_message', 'Your batch has been added!');

        return redirect('/batches/show');
    }

    /**
     * Responds to requests to get /batches/confirm-delete/{id}
     */
    public function getConfirmDelete($id){
        $batch = \p4\Batch::find($id);

        return view('batches.delete')->with('batch', $batch);
    }

    /**
     * Responds to requests to get /batches/delete/{id}
     */
    public function getDoDelete($id){
        $batch = \p4\Batch::find($id);

        if(is_null($batch)) {
            //TODO:: \Session::flash('flash_message','Batch not found.');
            return redirect('/batches/show');
        }

        //If the logged in user owns the batch they can delete it
        if(Auth::id() == $batch->user_id){
            $batch->delete();
            \Session::flash('flash_message',$batch->batch_name.' was deleted.');
            return redirect('/batches/show');
        }
        else{
            echo 'no dice grandma - getDoDelete';
            \Session::flash('flash_message',$batch->batch_name.' does not belong to you. You cannot delete it.');
            return redirect('/batches/show');
        }
    }

    public function getEdit($id = null){
        $batch = \p4\Batch::find($id);

        return view('batches.edit')->with('batch', $batch);
    }

    public function postEdit(Request $request){
        $batch = \p4\Batch::find($request->id);

        if(Auth::id() == $batch->user_id){
            $batch->batch_name = $request->batch_name;
            $batch->date_completed = $request->date_completed;
            $batch->starting_gravity = $request->starting_gravity;
            $batch->ending_gravity = $request->ending_gravity;
            $batch->batch_notes = $request->batch_notes;

            $batch->save();

            \Session::flash('flash_message', $batch->batch_name.' has been successfully edited!');

            return redirect('/batches/show/'.$batch->id);
        }
        else{
            echo 'No dice grandma - postEdit';
            \Session::flash('flash_message',$batch->batch_name.' does not belong to you. You cannot edit it.');
        }

    }

}