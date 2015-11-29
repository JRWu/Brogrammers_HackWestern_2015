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

                    {!! Form::text('location', null, ['style' => 'color: black; width: 40em; height: 3em;', 'placeholder' => 'SEARCH FOR LOCATION...']) !!}

                    {!! Form::submit('Search', ['class' => 'btn btn-default', 'style' => 'height:2.9em;']) !!}

                    <div class="col-md-12" style="background-color: transparent; margin-top: 10em;">
                        <div class="col-md-6">
                            <div>
                                {!! Form::label('restaurant', 'Restaurants') !!}
                                {!! Form::checkbox('restaurant') !!}
                            </div>
                            <div>
                                {!! Form::label('campground', 'Camping') !!}
                                {!! Form::checkbox('campground') !!}
                            </div>
                            <div>
                                {!! Form::label('bar', 'Bars') !!}
                                {!! Form::checkbox('bar') !!}
                            </div>
                            <div>
                                {!! Form::label('pool', 'Pools/Swimming') !!}
                                {!! Form::checkbox('pool') !!}
                            </div>
                            <div>
                                {!! Form::label('movie_theater', 'Movies/Drive-in') !!}
                                {!! Form::checkbox('movie_theater') !!}
                            </div>
                            <div>
                                {!! Form::label('concert', 'Concert') !!}
                                {!! Form::checkbox('concert') !!}
                            </div>
                            <div>
                                {!! Form::label('park', 'Park') !!}
                                {!! Form::checkbox('park') !!}
                            </div>
                            <div>
                                {!! Form::label('rave', 'Raves/EDM') !!}
                                {!! Form::checkbox('rave') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                {!! Form::label('sushi', 'Sushi') !!}
                                {!! Form::checkbox('sushi') !!}
                            </div>
                            <div>
                                {!! Form::label('golf', 'Golf') !!}
                                {!! Form::checkbox('golf') !!}
                            </div>
                            <div>
                                {!! Form::label('museum', 'Museums') !!}
                                {!! Form::checkbox('museum') !!}
                            </div>
                            <div>
                                {!! Form::label('amusement_park', 'Amusement Park') !!}
                                {!! Form::checkbox('amusement_park') !!}
                            </div>
                            <div>
                                {!! Form::label('cafe', 'Cafes') !!}
                                {!! Form::checkbox('cafe') !!}
                            </div>
                            <div>
                                {!! Form::label('spa', 'Spas') !!}
                                {!! Form::checkbox('spa') !!}
                            </div>
                            <div>
                                {!! Form::label('festival', 'Festivals') !!}
                                {!! Form::checkbox('festival') !!}
                            </div>
                            <div>
                                {!! Form::label('art_gallery', 'Art Galleries') !!}
                                {!! Form::checkbox('art_gallery') !!}
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
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
