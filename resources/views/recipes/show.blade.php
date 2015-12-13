@extends('layouts.master')

@section('title')
    Show Recipes
@stop

@section('head')

@stop

@section('content')
    <h1>Showing Recipes</h1>
    @if(Auth::check())
        <div class="alert alert-info" role="alert">
            <a href="/recipes/create" class="alert-link"><u>Click here to add a new recipe</u></a>
        </div>
    @else
        <div class="alert alert-info" role="alert">
            <a href="/login" class="alert-link"><u>Log in to add a new recipe</u></a>
        </div>
    @endif

    @foreach($recipes as $recipe)

        <a href="/recipes/show/{{ $recipe->id }}">{{ $recipe['recipe_name'] }}</a>
        <br>
        <br>
    @endforeach
@stop

@section('body')
    <script src="/js/recipes/show.js"></script>
@stop