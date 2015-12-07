@extends('layouts.master')

@section('title')
    Show Recipes
@stop

@section('head')
    Gooblegobble
@stop

@section('content')
    <h1>Showing All Recipes</h1>
    @foreach($allRecipes as $recipe)
        {{ $recipe['recipe_name'] }}
    @endforeach
@stop

@section('body')
    <script src="/js/recipes/show.js"></script>
@stop