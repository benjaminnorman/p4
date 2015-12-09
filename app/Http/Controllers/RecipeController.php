<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 11/14/2015
 * Time: 1:42 PM
 */


namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class RecipeController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
     * Responds to requests to GET /recipes
     */
    public function getIndex() {
        return 'List all the recipes';
    }

    /**
     * Responds to requests to GET /recipes/show/{id}
     */
    public function getShow() {
        $allRecipes = \p4\Recipe::all();
        return view('recipes.show')->with('allRecipes', $allRecipes);
    }
 /*
    public function getShowIndividual($recipeID) {
        return view('recipes.showIndividual')->with($recipeID);
    }
*/
    /**
     * Responds to requests to GET /recipes/create
     */
    public function getCreate() {
        //return 'Form to create a new recipe';
        return view('recipes.create');
    }

    /**
     * Responds to requests to POST /recipe/create
     */
    public function postCreate($recipeID = null) {
        return view('recipes.show')->with('recipeID', $recipeID);
    }
}