@extends('layouts.master')

@section('title')
    Show Recipe
@stop

@section('head')

@stop

@section('content')
    <h1>Showing Recipe</h1>
    @foreach($recipes as $recipe)
        Recipe Name: {{ $recipe['recipe_name'] }}
        <br>
        Honey Type: {{ $recipe['honey_type'] }}
        <br>
        Yeast Type: {{ $recipe['yeast_type'] }}
        <br>
        Recipe Text: {{ $recipe['recipe_text'] }}
        <br>
        <br>
    @endforeach

    <h4>Edit Recipe</h4>

    <h4><a href="/recipes/confirm-delete/{{$recipe->id}}">Delete Recipe</a></h4>

@stop

@section('body')
    <script src="/js/recipes/show.js"></script>
@stop