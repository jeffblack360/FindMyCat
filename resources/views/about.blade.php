@extends('master')

@section('header')

<h2>About this site</h2>

@stop

@section('content')

<p>There are over {{$number_of_cats}} cats on this site!</p>
<form>
    <p>
        Show list of:
        <select id="choice">
            <option value="">select</option>
            <option value="good">Good Guys</option>
            <option value="bad">Bad Guys</option>
        </select>
    </p>
    <p id="result"></p>
</form>

@stop
