@extends('master')

@section('header')
    <a href="{{url('/cats')}}"> Back to the overview </a>
    <h2>
        {{$cat->name}}
    </h2>

    <a href="{{url('cats/'.$cat->id.'/edit')}}">
        <span class="glyphicon glyphicon-edit"></span>Edit 
    </a>
    <a href="{{url('cats/'.$cat->id.'/delete')}}">
        <span class="glyphicon glyphicon-edit"></span>Delete 
    </a>
    Last edited: {{$cat->updated_at}}
@stop

@section('content')
    <p>Date of Birth: {{$cat->date_of_birth}}</p>
    <p>
        @if($cat->breed)
        Breed:
        <a href="{{url('cats/breeds/'.$cat->breed->name)}}">
            <span class="glyphicon glyphicon-edit"></span>{{$cat->breed->name}}
        </a>
        @endif
    </p>
@stop
