@extends('layouts.master')

@section('title')

@stop

@section('head')

@stop

@section('content')
    <h1>Recipes</h1>
    @if(Auth::check())
        <div class="alert alert-success" role="alert">
            <a href="/recipes/create" class="alert-link"><u>Click here to add a new recipe</u></a>
        </div>
    @else
        <div class="alert alert-info" role="alert">
            <a href="/login" class="alert-link"><u>Log in to add a new recipe</u></a>
        </div>
    @endif

    <div class="well">
    @foreach($recipes as $recipe)

        <a href="/recipes/show/{{ $recipe->id }}">{{ $recipe['recipe_name'] }}</a>
        <br>
        <br>
    @endforeach
    </div>
@stop

@section('body')
    <script src="/js/recipes/show.js"></script>
@stop