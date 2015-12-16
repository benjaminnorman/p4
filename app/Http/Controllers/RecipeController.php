<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 11/14/2015
 * Time: 1:42 PM
 */


namespace p4\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use p4\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RecipeController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
     * Responds to requests to GET /recipes/myrecipes
     */
    public function getUsersRecipes(Request $request) {
        $recipes = \p4\Recipe::where('user_id', '=', Auth::id())->get();
        return view('recipes.show')->with('recipes', $recipes);
    }

    /**
     * Responds to requests to GET /recipes/show/{id}
     */
    public function getRecipe($id) {
        $recipe = \p4\Recipe::where('id', '=', $id)->first();
        return view('recipes.showIndividual')->with('recipe', $recipe);
    }

    /**
     * Responds to requests to GET /recipes/show
     */
    public function getShow() {
        $recipes = \p4\Recipe::all();
        return view('recipes.show')->with('recipes', $recipes);
    }


    /**
     * Responds to requests to GET /recipes/create
     */
    public function getCreate() {
        //return 'Form to create a new recipe';
        return view('recipes.create');
    }

    /**
     * Responds to requests to POST /recipes/create
     */
    public function postCreate(Request $request) {

        //TODO: add validation here
        $recipe = new \p4\Recipe();
        $recipe->recipe_name = $request->recipe_name;
        $recipe->honey_type = $request->honey_type;
        $recipe->user_id = Auth::id();
        $recipe->yeast_type = $request->yeast_type;
        $recipe->difficulty = $request->difficulty;
        $recipe->recipe_text = $request->recipe_text;
        $recipe->save();

        \Session::flash('flash_message', 'Your recipe for '.$recipe->recipe_name.', has been added!');

        return redirect('/recipes/show');
    }

    /**
     * Responds to requests to get /recipes/confirm-delete/{id}
     */
    public function getConfirmDelete($id){
        $recipe = \p4\Recipe::find($id);

        return view('recipes.delete')->with('recipe', $recipe);
    }

    /**
     * Responds to requests to get /recipes/delete/{id}
     */
    public function getDoDelete($id){
        $recipe = \p4\Recipe::find($id);

        if(is_null($recipe)) {
            \Session::flash('flash_message','Recipe '.$recipe->recipe_name.' not found.');
            return redirect('\recipes/show');
        }

        //If the logged in user owns the recipe they can delete it
        if(Auth::id() == $recipe->user_id){
            $recipe->delete();
            \Session::flash('flash_message','The recipe '.$recipe->recipe_name.' was deleted.');
            return redirect('/recipes/show');
        }
        else{
            \Session::flash('flash_message','The recipe '.$recipe->recipe_name.' does not belong to you. You cannot delete it.');
        }
    }

    public function getEdit($id = null){
        $recipe = \p4\Recipe::find($id);

        return view('recipes.edit')->with('recipe', $recipe);
    }

    public function postEdit(Request $request){
        $recipe = \p4\Recipe::find($request->id);

        if(Auth::id() == $recipe->user_id){
            $recipe->recipe_name = $request->recipe_name;
            $recipe->honey_type = $request->honey_type;
            $recipe->yeast_type = $request->yeast_type;
            $recipe->difficulty = $request->difficulty;
            $recipe->recipe_text = $request->recipe_text;

            $recipe->save();

            return redirect('/recipes/show/'.$recipe->id);
        }
        else{
            \Session::flash('flash_message','The recipe' .$recipe->recipe_name.' does not belong to you. You cannot edit it.');
        }

    }

}