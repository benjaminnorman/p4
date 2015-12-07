@extends('layouts.master')

@section('title')
    Show Recipes
@stop

@section('head')
    Gooblegobble
@stop

@section('content')

    @if($recipeID)
        <h1>Show Recipe: {{ $recipeID }}</h1>

    @else
        <h1>No Recipe Available</h1>
    @endif
@stop

@section('body')
    <script src="/js/recipes/show.js"></script>
@stop