<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>1-800 Hotline Bling</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../styles/map.css"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Internet Explorer HTML5 enabling code: -->

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- JavaScript Includes -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
            });
        });

        var x = document.getElementById("demo");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        /*function showPosition(position) {
            x.innerHTML = "Latitude: " + position.coords.latitude +
                    "<br>Longitude: " + position.coords.longitude;
        }*/

        // Create a JSON Object Array
        var geoLocJSON = new Array();

        // onSuccess Geolocation
        function showPosition(position)
        {
            // Testing for data
            var element = document.getElementById('geoLocation');
            /*element.innerHTML =
                    'Latitude: ' + position.coords.latitude + '<br />' +
                    'Longitude: ' + position.coords.longitude + '<br/>' +
                    '<hr />' + element.innerHTML;*/

            if (typeof element !== 'undefined' && element !=null)
            {
                document.getElementById('geoLocation').innerHTML =
                        'Latitude: ' + position.coords.latitude + '<br />' +
                        'Longitude: ' + position.coords.longitude + '<br/>' +
                        '<hr />' + element.innerHTML;
            }

            var myJSON =
            {
                "geoLoc":
                {
                    "Lat":position.coords.latitude,
                    "Long":position.coords.longitude
                }
            };

            if (jQuery.isEmptyObject(myJSON))
            {
                console.log("Empty Object");
            }

            geoLocJSON.push(myJSON);
        }

    </script>
</head>
<body onload="getLocation();">
<section id="home">
    <div class = "container">
    <h1>About us</h1>
    <p align = "center">You are probably wondering what to do tonight or where to go, right?<br/> Well you are in the right spot! " " helps you decide on exactly
        what you want to do and where to go. <br/>We have been in the exact same spot as you way more times than we can honestly count.<br/>
        That's why we built this website that will help you figure out what activities to participate in!<br/> Our website allows
        the user to chose who to go with: family member, with friends, or with their significant other.<br/> After this is chosen,
        the user's location is taken and a radius is formed around it.<br/> Once this is done, the user decides on what events
        he/she is most interested in.<br/> After these simple steps are completed, a map will show all the activities that the user
        can participate in,<br/> whether it's just to watch a movie with their significant other, go to the bars with their friends
        or to go camping with family.</p>
    <p id="demo"></p>
    </div>
</section>
<section id="plans">
    <h1>Who are you going with?</h1>
    <p><a href="{{ url('/family') }}">Family</a></p>
    <p><a href="{{ url('/friends') }}">Friend</a></p>
    <p><a href="{{ url('/partner') }}">Partner</a></p>
</section>
<section id="contact">
    <h1>Contact</h1>
    <table align = "center">
        <tr>
            <td>Edmund Luong <br/> Western University <br/>
                eluong3 (at) uwo (dot) ca <br/> Computer Science</td>
            <td>Jerry Wu <br/> Western University <br/>
                jwu424 (at) uwo (dot) ca <br/> Computer Science</td>
            <td>Valmir Verbani <br/> Western University <br/>
                vverbani (at) uwo (dot) ca <br/> Computer Science</td>
            <td>Symon Luu <br/> Fanshawe College <br/>
                s_luu (at) fanshaweonline (dot) ca <br/> Internet Web Development & Applications</td>
        </tr>
    </table>
    &copy; 2015, Inc - All Rights Reserved
</section>

<nav>
    <ul>
        <li><a href="#home" class="scroll">Home</a></li>
        <li><a href="#plans" class="scroll">Plans</a></li>
        <li><a href="#contact" c
               lass="scroll">Contact</a></li>
    </ul>
</nav>

</body>
</html>