@extends('layouts.master')

@section('title')
    Create a Batch
@stop

@section('head')

@stop

@section('content')
<div class="form-group" align="center">
    <form method='POST' action=''>
        <br><br>
        <div class="alert alert-info"><h3>Enter Batch Info: </h3></div>
        <label>Batch Name: <br>
            <input type="text" name="batch_name" class="form-control">
        </label>
    </form>
</div>
@stop