@extends('layouts.master')

@section('title')
    Edit Recipe
@stop


@section('content')

    <h1>Edit Recipe</h1>

    <form method='POST' action='/batches/edit'>

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <input type='hidden' name='id' value='{{ $batch->id }}'>

        <div class="form-group">
            <label>Batch ID:</label>
            <label for="id"></label>
            <input
                type="text"
                id="id"
                name="id"
                value="{{$batch->id}}"
                disabled>
        </div>

        <div class='form-group'>
            <label>* Batch Name:</label>
            <label for="batch_name"></label>
            <input
                    type='text'
                    id='batch_name'
                    name='batch_name'
                    value='{{$batch->batch_name}}'
                    >
        </div>

        <div class="form-group">
            <label for="recipe_used">Recipe Used</label>
            <label>
                <select name="difficulty" class="form-control" disabled>
                    <option selected="selected">Recipe {{$batch->recipe_used}}</option>
                </select>
            </label>
        </div>

        <div class='form-group'>
            <label>* Starting Gravity:</label>
            <label for="starting_gravity"></label>
            <input
                    type='number'
                    id='starting_gravity'
                    name='starting_gravity'
                    value='{{$batch->starting_gravity}}'
                    >
        </div>

        <div class='form-group'>
            <label>* Ending Gravity:</label>
            <label for="ending_gravity"></label>
            <input
                    type='number'
                    id='ending_gravity'
                    name='ending_gravity'
                    value='{{$batch->ending_gravity}}'
                    >
        </div>

        <div>
            <label>Date Completed: <br>
                <input
                        type="date"
                        name="date_completed"
                        class="form-control"
                        id="date_completed"
                        value="{{$batch->date_completed}}">
            </label>
        </div>

        <div class='form-group'>
            <label for='batch_notes'>* Batch Notes:</label>
                <textarea
                        style="height: 250px; width: 500px;"
                        name="batch_notes"
                        class="form-control"
                        id="batch_notes">
                    {{$batch->batch_notes}}
                </textarea>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>

@stop