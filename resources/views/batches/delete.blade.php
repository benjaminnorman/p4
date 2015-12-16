@extends('layouts.master')

@section('title')
    Delete a Batch
@stop

@section('content')

    <h1>Delete Batch</h1>

    <p>Are you sure you want to delete <em>{{$batch->batch_name}}</em>?</p>

    <p><a href='/batches/delete/{{$batch->id}}'>Yes...</a></p>

@stop