@extends('layouts.master')

@section('title')
    Show Batch
@stop

@section('head')

@stop

@section('content')

    @if(empty($batch))
        That batch does not exist.
        <br>
        It may have been deleted, or never existed at all.
        <br>
        Why not <a href="/batches/create"><strong>create one</strong>?</a>

    @else
        <h1>{{$batch['batch_name']}}</h1>
        Batch Name: {{ $batch['batch_name'] }}
        <br>

        <a href="/recipes/show/{{ $batch['recipe_used'] }}">Recipe Used: {{ $batch['recipe_used'] }}</a>
        <br>
        Starting Gravity: {{ $batch['starting_gravity'] }}
        <br>
        Ending Gravity: {{ $batch['ending_gravity'] }}
        <br>
        Date Completed: {{ $batch['date_completed'] }}
        <br>
        <br>
        <div class='form-group'>
            <label for='batch_notes'>* Batch Notes:</label>
                <textarea
                        style="height: 250px; width: 500px;"
                        name="batch_notes"
                        class="form-control"
                        id="batch_notes" disabled>{{$batch->batch_notes}}</textarea>
        </div>
        <br>

        @if(Auth::id() == $batch->user_id)
        <h4><a href="/batches/edit/{{$batch->id}}">Edit Batch</a></h4>

        <h4><a href="/batches/confirm-delete/{{$batch->id}}">Delete Batch</a></h4>
        @endif
    @endif
@stop

@section('body')
    <script src="/js/batches/show.js"></script>
@stop