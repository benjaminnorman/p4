@extends('layouts.master')

@section('content')

    <p>Don't have an account? <a href='/register'>Register here...</a></p>

    <h1>Login</h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form class="form-horizontal" method='POST' action='/login'>

        {!! csrf_field() !!}

        <div class='form-group'>
            <label for='email' class="col-sm-4 control-label">Email</label>
            <div class="col-sm-5">
                <input type='text' name='email' id='email' class="form-control" value='{{ old('email') }}'>
            </div>
        </div>

        <div class='form-group'>
            <label for='email' class="col-sm-4 control-label">Password</label>
            <div class="col-sm-5">
                <input type='text' name='password' id='password' class="form-control" value='{{ old('password') }}'>
            </div>
        </div>

        <div class='form-group'>
            <input type='checkbox' name='remember' class="form-control" id='remember'>
            <label for='remember' class='checkboxLabel'>Remember me</label>
        </div>

        <button type='submit' class='btn btn-primary'>Login</button>
    </form>

@stop