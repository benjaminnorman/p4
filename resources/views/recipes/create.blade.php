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
        <label>Ingredients  <b>Delicious</b>: <br>
            <input type="text" name="ingredient1" class="form-control">
        </label>
    </form>
</div>
@stop