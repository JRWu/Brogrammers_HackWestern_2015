<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>1-800 Hotline Bling</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../styles/friends.css"/>

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

    </script>
</head>
<body>
<section id="plans">
    <div align = "center">
        <h1>Friend</h1>
        Check all that apply:
        <br></br>
        Tennis/Badminton: <input type = "checkbox" name = "Tennis" >
        <br></br>
        Snowboarding/Skiing: <input type = "checkbox" name = "Skiing">
        <br></br>
        Amusement Park: <input type = "checkbox" name = "Park">
        <br></br>
        Camping: <input type = "checkbox" name = "Camping">
        <br></br>
        Rave/Edm: <input type ="checkbox" name = "Rave">
        <br></br>
        Pool <input type = "checkbox" name = "Pool" >
        <br></br>
        Beach: <input type = "checkbox" name = "Beach">
        <br></br>
        Mini Put: <input type = "checkbox" name = "Golf">
        <br></br>
        Concert: <input type = "checkbox" name = "Concert">
        <br></br>
        Sushi: <input type = "checkbox" name = "Sushi">
        <br></br>
        Boating/Water Sports: <input type = "checkbox" name = "Boat">
        <br></br>
        Laser Tag: <input type = "checkbox" name = "Laser">
        <br></br>
        Paintball/Airsoft: <input = "checkbox" name = "Guns">
        <br></br>
        Movies/Drive-in <input type = "checkbox" name = "Movies">
        <br></br>
        Shooting Range: <input type = "checkbox" name = "Range">
        <br></br>
        Bars: <input type = "checkbox" name = "Bars">
        <br></br>
        Max Radius (in KMs): <input type = "number" name ="radius">
        <br></br>
        <input type = "submit" value = "Submit!">
    </div>

</section>
<section id="contact">
    <h1>Contact</h1>
    <table>
     <tr>
         <td>Edmund Luong</td>
         <td>Symon Luu</td>
         <td>Valmir Verbani</td>
         <td>Jerry Wu</td>
     </tr>
     <tr>
         <td>Western University</td>
         <td>Fanshawe College</td>
         <td>Western University</td>
         <td>Western University</td>
     </tr>
     <tr>
         <td>eluong3 at uwo dot ca</td>
         <td>s_luu at fanshaweonline dot ca</td>
         <td>jwu424 at uwo dot ca</td>
         <td>vverbani at uwo dot ca</td>
     </tr>
         <td>Computer Science</td>
         <td>Web Development</td>
         <td>Computer Science</td>
         <td>Computer Science</td>
     </table>
    <p> &copy; 2015, Inc - All Rights Reserved</p>
</section>

<nav>
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="#plans" class="scroll">Plans</a></li>
        <li><a href="#contact" class="scroll">Contact</a></li>
    </ul>
</nav>

</body>
</html>