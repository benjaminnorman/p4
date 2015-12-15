@extends('layouts.master')

@section('title')
    Create a Recipe
@stop

@section('head')

@stop

@section('content')
    <div class="form-group" align="center">
        <form method='POST' action='/batch/create'>
            <div>
                <label>Batch Name: <br>
                    <input
                            type="text"
                            name="batch_name"
                            class="form-control"
                            id="batch_name">
                </label>
            </div>

            <div>
                <label>Recipe Used: <br>
                    <select name="recipe_used" class="form-control">
                        <option value="">Select...</option>

                        @foreach($recipes as $recipe)

                            <option value="{{ $recipe->id }}">Recipe {{ $recipe->id }}:  {{ $recipe->recipe_name }}</option>

                        @endforeach

                    </select>
                </label>
            </div>

            <div>
                <label>Starting Gravity: <br>
                    <input
                            type="text"
                            name="starting_gravity"
                            class="form-control"
                            id="starting_gravity">
                </label>
            </div>

            <div>
                <label>Ending Gravity: <br>
                    <input
                            type="text"
                            name="ending_gravity"
                            class="form-control"
                            id="ending_gravity">
                </label>
            </div>

            <div>
                <label>Date Completed: <br>
                    <input
                            type="date"
                            name="date_completed"
                            class="form-control"
                            id="date_completed">
                </label>
            </div>

            <div>
                <label>Batch Notes: <br>
                <textarea
                        style="height: 250px; width: 500px;"
                        name="batch_notes"
                        class="form-control"
                        id="batch_notes">
                </textarea>
                </label>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Add Batch</button>
            </div>

        </form>
    </div>
@stop