@extends('layouts.master')

@section('title')
    Create a Batch
@stop

@section('head')

@stop

@section('content')
<div class="form-group" align="center">
    <form method='POST' action='/batches/create'>

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
            <button type="submit" class="btn btn-primary">Add Batch</button>
        </div>

    </form>
</div>
@stop