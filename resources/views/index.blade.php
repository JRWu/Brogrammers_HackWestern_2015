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
    <p></p>
</section>
<section id="plans">
    <h1>Who are you going with?</h1>
    <p><a href="#">Family</a></p>
    <p><a href="#">Friend</a></p>
    <p><a href="#">Partner</a></p>
</section>
<section id="contact">
    <h1>Who are you going with?</h1>
    <p><a href="#">Family</a></p>
    <p><a href="#">Friend</a></p>
    <p><a href="#">Partner</a></p>
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