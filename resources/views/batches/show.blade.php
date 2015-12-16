@extends('layouts.master')

@section('title')

@stop

@section('head')

@stop

@section('content')
    <h2>Batches</h2>
    @if(Auth::check())

        <div class="alert alert-success" role="alert">
            <a href="/batches/create" class="alert-link"><u>Click here to add a new batch</u></a>
        </div>
    @else
        <div class="alert alert-info" role="alert">
            <a href="/login" class="alert-link"><u>Log in to add a new batch</u></a>
        </div>
    @endif

    <div class="well">

    @foreach($batches as $batch)

        <a href="/batches/show/{{ $batch->id }}">{{ $batch['batch_name'] }}</a>
        <br>
        <br>
    @endforeach
    </div>

@stop

@section('body')
    <script src="/js/batches/show.js"></script>
@stop