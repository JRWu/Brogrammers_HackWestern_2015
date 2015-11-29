<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap</title>
        <meta name = "viewport" content ="width=device-width, initial-scale=1.0">
        <link href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel = "stylesheet">
        <link href = "./css/styles.css" rel = "stylesheet">
    </head>

    <body>
    <!-- Main page, 3 -->
        <div class = "container" >
            <div class = "text-center">
                <h1 align = "center">Plan A Date</h1>
                <a href="{{ url('/family') }}" class = "btn btn-default">Family</a>
                <a href="{{ url('/friends') }}" class = "btn btn-default">Friend</a>
                <a href="{{ url('/partner') }}" class = "btn btn-default">Partner</a>
            </div>
        </div>

        <script href="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>