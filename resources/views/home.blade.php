@extends('master')

@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Lost your cat?</h1>
        <p>Let us help you find your lost cat. Just add some details about your feline friend to our searchable database so others can help you locate that special member of your family. Our database will map the area your pet was last seen and allow others in your area to assist in locating your family friend. You can even add photos! </p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn More &raquo;</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Search</h2>
            <p>Have you found a lost kitty in your area?  Someone is anxiously awaiting the return of their special family pet. Press the button below to search our database of lost feline friends in your area and bring a smile to a family! </p>
            <p><a class="btn btn-default" href="cats/" role="button">Search Now &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Adoption</h2>
            <p>Looking for the perfect pet? There are thousands of furry friends waiting to find a loving home. We can help you find the perfect new member for your family. Rescue a little friend for your family today! </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>

    <hr>
</div> <!-- /container -->

@endsection
