<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 11/14/2015
 * Time: 1:27 PM
 */

namespace p4\Http\Controllers;

//use p4\Http\Controllers\Controller;

class BatchController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
     * Responds to requests to GET /books
     */
    public function getIndex() {
        return 'List all the batches';
    }

    /**
     * Responds to requests to GET /batches/show/{id}
     */
    public function getShow($ID = null) {
        return view('batches.show')->with('batchID', $ID);
    }

    /**
     * Responds to requests to GET /batches/create
     */
    public function getCreate() {
        return view('batches.create');
    }

    /**
     * Responds to requests to POST /batches/create
     */
    public function postCreate($batchID = null) {
        return view('batches.create')->with('batchID', $batchID);
    }
}