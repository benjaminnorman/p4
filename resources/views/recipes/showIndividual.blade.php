@extends('layouts.master')

@section('title')
    Show Recipe
@stop

@section('head')

@stop

@section('content')

    @if(empty($recipe))
        That recipe does not exist.
        <br>
        It may have been deleted, or never existed at all.
        <br>
        Why not <a href="/recipes/create"><strong>create one</strong>?</a>

    @else
            <h1>{{$recipe['recipe_name']}}</h1>
            Recipe Name: {{ $recipe['recipe_name'] }}
            <br>
            Honey Type: {{ $recipe['honey_type'] }}
            <br>
            Yeast Type: {{ $recipe['yeast_type'] }}
            <br>
            Difficulty: {{ $recipe['difficulty'] }}
            <br>
            <br>
            <div class='form-group'>
                <label for='recipe_text'>* Recipe Text:</label>
                    <textarea
                        style="height: 250px; width: 500px;"
                        name="recipe_text"
                        class="form-control"
                        id="recipe_text" disabled>
                        {{$recipe->recipe_text}}
                    </textarea>
            </div>
            <br>

        @if(Auth::id() == $recipe->user_id)
            <h4><a href="/recipes/edit/{{$recipe->id}}">Edit Recipe</a></h4>
            <h4><a href="/recipes/confirm-delete/{{$recipe->id}}">Delete Recipe</a></h4>
        @endif

    @endif

@stop

@section('body')
    <script src="/js/recipes/show.js"></script>
@stop