@extends('layouts.master')

@section('title')
    Create a Recipe
@stop

@section('head')

@stop

@section('content')
<div class="form-group" align="center">
    <form method='POST' action='/recipes/create'>

        <div>
            <label>Recipe Name: <br>
                <input
                    type="text"
                    name="recipe_name"
                    class="form-control"
                    id="recipe_name">
            </label>
        </div>

        <div>
            <label>Honey Type: <br>
                <input
                    type="text"
                    name="honey_type"
                    class="form-control"
                    id="honey_type">
            </label>
        </div>

        <div>
            <label>Yeast Type: <br>
                <input
                    type="text"
                    name="yeast_type"
                    class="form-control"
                    id="yeast_type">
            </label>
        </div>

        <div>
            <label>Difficulty: <br>
                <select name="difficulty" class="form-control">
                    <option value="">Select...</option>
                    <option value="easy">Easy</option>
                    <option value="medium">Meadium</option>
                    <option value="hard">Hard</option>
                </select>
            </label>
        </div>

        <div>
            <label>Recipe + Instructions: <br>
                <textarea
                        style="height: 250px; width: 500px;"
                        name="recipe_text"
                        class="form-control"
                        id="recipe_text">
                </textarea>
            </label>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Add Recipe</button>
        </div>

    </form>
</div>
@stop