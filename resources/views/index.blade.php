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
                        {{--<p align = "center">You are probably wondering what to do tonight or where to go, right? Well you are in the right spot! " " helps you decide on exactly--}}
                            {{--what you want to do and where to go. We have been in the exact same spot as you way more times than we can honestly count.--}}
                            {{--That's why we built this website that will help you figure out what activities to participate in! Our website allows--}}
                            {{--the user to chose who to go with: family member, with friends, or with their significant other. After this is chosen,--}}
                            {{--the user's location is taken and a radius is formed around it. Once this is done, the user decides on what events--}}
                            {{--he/she is most interested in. After these simple steps are completed, a map will show all the activities that the user--}}
                            {{--can participate in, whether it's just to watch a movie with their significant other, go to the bars with their friends--}}
                            {{--or to go camping with family.</p>--}}

                        <a href="{{ url('/family') }}" class = "btn btn-default">Family</a>
                        <a href="{{ url('/friends') }}" class = "btn btn-default">Friend</a>
                        <a href="{{ url('/partner') }}" class = "btn btn-default">Partner</a>

                    </div>
        </div>

        <script href="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>