@extends('master')

@section('header')
<div class="container">
    <div class="row">
        <div class="span9 centred">

            <h2>User Registration</h2>
        </div>
    </div>
</div>

@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="span9 centred">

            {!! Form::open() !!}

            <div class="form-group">
                {!! Form::label('Username') !!}
                {!! Form::text('name') !!}
            </div>

            <div class="form-group">
                {!! Form::label('Email') !!}
                {!! Form::text('email') !!}
            </div>

            <div class="form-group">
                {!! Form::label('Password') !!}
                {!! Form::text('password') !!}
            </div>

            {!! Form::submit("Login", array("class"=>"btn btn-default")) !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop
