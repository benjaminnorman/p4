@extends('layouts.master')

@section('content')

    <p>Already have an account? <a href='/login'>Login here...</a></p>

    <h1>Register</h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form class="form-horizontal" method='POST' action='/register'>
        {!! csrf_field() !!}
        <div>
        <div class='form-group'>
            <label for='name' class="col-sm-4 control-label">Name</label>
            <div class="col-sm-5">
                <input type='text' name='name' id='name' class="form-control" value='{{ old('name') }}'>
            </div>
        </div>

        <div class='form-group'>
            <label for='email' class="col-sm-4 control-label">Email</label>
            <div class="col-sm-5">
                <input type='text' name='email' id='email' class="form-control" value='{{ old('email') }}'>
            </div>
        </div>

        <div class='form-group'>
            <label for='password' class="col-sm-4 control-label">Password</label>
            <div class="col-sm-5">
                <input type='password' name='password' id='password' class="form-control" value='{{ old('password') }}'>
            </div>
        </div>

        <div class='form-group'>
            <label for='password_confirmation' class="col-sm-4 control-label">Confirm password</label>
            <div class="col-sm-5">
                <input type='password' name='password_confirmation' id='password_confirmation' class="form-control" value='{{ old('password') }}'>
            </div>
        </div>

        <button type='submit' class='btn btn-primary'>Register</button>
        </div>
    </form>

@stop