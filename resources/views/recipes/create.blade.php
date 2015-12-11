@extends('layouts.master')

@section('title')
    Create a Recipe
@stop

@section('head')

@stop

@section('content')
<div class="form-group" align="center">
    <form method='POST' action=''>
        <br><br>
        <div class="alert alert-info"><h3>Enter Ingredients: </h3></div>
        <label>Recipe Name: <br>
            <input type="text" name="recipe_name" class="form-control">
        </label>
        <br>
        <label>Honey Type: <br>
            <input type="text" name="honey_type" class="form-control">
        </label>
        <label>Yeast Type: <br>
            <input type="text" name="yeast_type" class="form-control">
        </label>
        <label>Difficulty: <br>
            <select name="difficulty" class="form-control">
                <option value="">Select...</option>
                <option value="easy">Easy</option>
                <option value="medium">Meadium</option>
                <option value="hard">Hard</option>
            </select>
        </label>
        <br>
        <label>Recipe + Instructions: <br>
            <textarea style="height: 250px; width: 500px;" name="recipe_text" class="form-control"></textarea>
        </label>

    </form>
</div>
@stop