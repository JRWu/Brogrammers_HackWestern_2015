<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Date-Mate</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/dm-bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">Date-Mate</h1>
                    {!! Form::open(['url' => '/results', 'method' => 'POST'])  !!}

                    {!! Form::text('location', null, ['style' => 'color: black; width: 40em; height: 3em; text-align: center', 'placeholder' => 'SEARCH FOR LOCATION...']) !!}

                    {!! Form::submit('Search', ['class' => 'btn btn-default', 'style' => 'height:2.9em;']) !!}

                    <div class="col-md-12" style="background-color: transparent; margin-top: 10em;">
                        <div class="col-md-6">
                            <div>
                                {!! Form::checkbox('restaurant') !!}
                                {!! Form::label('restaurant', 'Restaurants') !!}
                            </div>
                            <div>
                                {!! Form::checkbox('campground') !!}
                                {!! Form::label('campground', 'Camping') !!}
                            </div>
                            <div>
                                {!! Form::checkbox('bar') !!}
                                {!! Form::label('bar', 'Bars') !!}
                            </div>
                            <div>
                                {!! Form::checkbox('pool') !!}
                                {!! Form::label('pool', 'Pools/Swimming') !!}
                            </div>
                            <div>
                                {!! Form::checkbox('movie_theater') !!}
                                {!! Form::label('movie_theater', 'Movies/Drive-in') !!}
                            </div>
                            <div>
                                {!! Form::checkbox('concert') !!}
                                {!! Form::label('concert', 'Concert') !!}
                            </div>
                            <div>
                                {!! Form::checkbox('park') !!}
                                {!! Form::label('park', 'Park') !!}
                            </div>
                            <div>
                                {!! Form::checkbox('rave') !!}
                                {!! Form::label('rave', 'Raves/EDM') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                {!! Form::checkbox('sushi') !!}
                                {!! Form::label('sushi', 'Sushi') !!}
                            </div>
                            <div>
                                {!! Form::checkbox('golf') !!}
                                {!! Form::label('golf', 'Golf') !!}
                            </div>
                            <div>
                                {!! Form::checkbox('museum') !!}
                                {!! Form::label('museum', 'Museums') !!}
                            </div>
                            <div>
                                {!! Form::checkbox('amusement_park') !!}
                                {!! Form::label('amusement_park', 'Amusement Park') !!}
                            </div>
                            <div>
                                {!! Form::checkbox('cafe') !!}
                                {!! Form::label('cafe', 'Cafes') !!}
                            </div>
                            <div>
                                {!! Form::checkbox('spa') !!}
                                {!! Form::label('spa', 'Spas') !!}
                            </div>
                            <div>
                                {!! Form::checkbox('festival') !!}
                                {!! Form::label('festival', 'Festivals') !!}
                            </div>
                            <div>
                                {!! Form::checkbox('art_gallery') !!}
                                {!! Form::label('art_gallery', 'Art Galleries') !!}
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div>
        <a href="https://goo.gl/OkuOMI">Need help...?</a>
    </div>
</header>

<!-- jQuery -->
<script src="js/dm-jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/dm-bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/dm-jquery.easing.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/dm-grayscale.js"></script>

</body>

</html>
