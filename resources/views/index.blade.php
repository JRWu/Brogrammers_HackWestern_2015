<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Your Studio</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../styles/main.css"/>

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
<section id="home">
    <h1>About us</h1>
    <p align = "center">You are probably wondering what to do tonight or where to go, right? Well you are in the right spot! " " helps you decide on exactly
    what you want to do and where to go. We have been in the exact same spot as you way more times than we can honestly count.
    That's why we built this website that will help you figure out what activities to participate in! Our website allows
    the user to chose who to go with: family member, with friends, or with their significant other. After this is chosen,
    the user's location is taken and a radius is formed around it. Once this is done, the user decides on what events
    he/she is most interested in. After these simple steps are completed, a map will show all the activities that the user
    can participate in, whether it's just to watch a movie with their significant other, go to the bars with their friends
    or to go camping with family.</p>
</section>
<section id="plans">
    <h1>Who are you going with?</h1>
    <p><a href="#">Family</a></p>
    <p><a href="#">Friend</a></p>
    <p><a href="#">Partner</a></p>
</section>
<section id="contact">
    <h1>Contact</h1>
    <table align = "center">
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
    <p align = "center"> &copy; 2015, Inc - All Rights Reserved</p>
</section>

<nav>
    <ul>
        <li><a href="#home" class="scroll">Home</a></li>
        <li><a href="#plans" class="scroll">Plans</a></li>
        <li><a href="#contact" class="scroll">Contact</a></li>
    </ul>
</nav>

</body>
</html>