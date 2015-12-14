@extends('layouts.master')

@section('title')
    Edit Recipe
@stop


@section('content')

    <h1>Edit Recipe</h1>

    <form method='POST' action='/recipes/edit'>

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <input type='hidden' name='id' value='{{ $recipe->id }}'>

        <div class="form-group">
            <label>Recipe ID:</label>
            <label for="id"></label>
            <input
                type="text"
                id="id"
                name="id"
                value="{{$recipe->id}}"
                disabled>
        </div>

        <div class='form-group'>
            <label>* Recipe Name:</label>
            <label for="recipe_name"></label>
            <input
                    type='text'
                    id='recipe_name'
                    name='recipe_name'
                    value='{{$recipe->recipe_name}}'
                    >
        </div>

        <div class='form-group'>
            <label for='honey_type'>* Honey Type:</label>
            <input
                    type='text'
                    id='honey_type'
                    name='honey_type'
                    value='{{$recipe->honey_type}}'
                    >
        </div>

        <div class='form-group'>
            <label for='yeast_type'>* Yeast Type:</label>
            <input
                    type='text'
                    id='yeast_type'
                    name='yeast_type'
                    value='{{$recipe->yeast_type}}'
                    >
        </div>

        <div class="form-group">
            <label for="difficulty">* Difficulty</label>
            <label>
                <select name="difficulty" class="form-control">
                    <option selected="selected">{{$recipe->difficulty}}</option>
                    <option value="Easy">Easy</option>
                    <option value="Meadium">Meadium</option>
                    <option value="Hard">Hard</option>
                </select>
            </label>
        </div>

        <div class='form-group'>
            <label for='recipe_text'>* Recipe Text:</label>
                <textarea
                        style="height: 250px; width: 500px;"
                        name="recipe_text"
                        class="form-control"
                        id="recipe_text">
                    {{$recipe->recipe_text}}
                </textarea>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>

@stop