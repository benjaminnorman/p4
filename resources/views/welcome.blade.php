@extends('layouts.master')

@section('title')
    Home
@stop

@section('head')

@stop

@section('content')
    <div align="center">
        <h1>Welcome to Kvasir's Wisdom!</h1>
        Please use the tabs to explore recipes and batches, or create your own!
    </div>
    <br>
    <div>
        <img
            src='http://vikingdrinkinghorns.com/wp-content/uploads/2013/08/a-drinking-horn-300x200.jpg'
            style='width:400px'
            alt="Kvasir's Wisdom Logo"
            class='img-rounded'
            >
    </div>

@stop

@section('body')
    <script src="/js/recipes/show.js"></script>
@stop
