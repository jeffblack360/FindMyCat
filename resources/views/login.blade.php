@extends('master')

@section('header')
    <h2>Please Log In</h2>
@stop

@section('content')

 {!! Form::open() !!}
 
    <div class="form-group">
        {!! Form::label('Username') !!}
        {!! Form::text('name') !!}
    </div>
 
    <div class="form-group">
        {!! Form::label('Password') !!}
        {!! Form::text('password') !!}
    </div>
 
    {!! Form::submit("Login", array("class"=>"btn btn-default")) !!}
    
    {!! Form::close() !!}
    
@stop
