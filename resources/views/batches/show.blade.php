@extends('layouts.master')

@section('title')
    Show Batches
@stop

@section('head')
    GooblegobbleHead
@stop

@section('content')
    @if($batchID)
        <h1>Show Batch: {{ $batchID }}</h1>
    @else
        <h1>No Batch Chosen</h1>
    @endif
@stop

@section('body')
    GoogbleGobbleBody
@stop