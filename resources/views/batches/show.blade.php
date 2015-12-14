@extends('layouts.master')

@section('title')
    Show Batches
@stop

@section('head')

@stop

@section('content')
    <h1>Showing Batches</h1>
    @if(Auth::check())
        <div class="alert alert-info" role="alert">
            <a href="/batches/create" class="alert-link"><u>Click here to add a new batch</u></a>
        </div>
    @else
        <div class="alert alert-info" role="alert">
            <a href="/login" class="alert-link"><u>Log in to add a new batch</u></a>
        </div>
    @endif

    @foreach($batches as $batch)

        <a href="/batches/show/{{ $batch->id }}">{{ $batch['batch_name'] }}</a>
        <br>
        <br>
    @endforeach
@stop

@section('body')
    <script src="/js/batches/show.js"></script>
@stop