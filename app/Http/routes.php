<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//============================================================
//Recipe Routes


Route::group(['middleware' => 'auth'], function(){

    Route::get('/recipes/create', 'RecipeController@getCreate');
    Route::post('/recipes/create', 'RecipeController@postCreate');

    Route::get('/recipes/myrecipes', 'RecipeController@getUsersRecipes');

    Route::get('/recipes/delete/{id?}', 'RecipeController@getDoDelete');
    Route::get('/recipes/confirm-delete/{id}', 'RecipeController@getConfirmDelete');

    Route::get('recipes/edit/{id?}', 'RecipeController@getEdit');
    Route::post('recipes/edit', 'RecipeController@postEdit');

});
Route::get('/recipes/show', 'RecipeController@getShow');
Route::get('/recipes/show/{id?}', 'RecipeController@getRecipe');



//=============================================================
//Batch Routes

Route::group(['middleware' => 'auth'], function() {

    Route::get('/batches/create', 'BatchController@getCreate');
    Route::post('/batches/create', 'BatchController@postCreate');
    Route::get('/batches/create/{id?}', 'BatchController@getCreate');

    Route::get('/batches/mybatches', 'BatchController@getUsersBatches');

    Route::get('/batches/delete/{id?}', 'BatchController@getDoDelete');
    Route::get('/batches/confirm-delete/{id}', 'BatchController@getConfirmDelete');

    Route::get('batches/edit/{id?}', 'BatchController@getEdit');
    Route::post('batches/edit', 'BatchController@postEdit');

});
Route::get('/batches/show', 'BatchController@getShow');
Route::get('/batches/show/{id?}', 'BatchController@getBatch');


//=============================================================
//Authentication Routes
# Show login form
Route::get('/login', 'Auth\AuthController@getLogin');

# Process login form
Route::post('/login', 'Auth\AuthController@postLogin');

# Process logout
Route::get('/logout', 'Auth\AuthController@getLogout');

# Show registration form
Route::get('/register', 'Auth\AuthController@getRegister');

# Process registration form
Route::post('/register', 'Auth\AuthController@postRegister');


//==============================================================
//Test route for database connection
Route::get('/debug', function() {
    echo '<pre>';
    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';
    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";
    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});