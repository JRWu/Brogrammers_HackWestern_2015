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
    <script language = "javascript" type ="text/javascript">
        function getCheckedBoxes(chkboxName){
            console.log('clal')
            var checkboxes = document.getElementsByName(chkboxName);
            console.log(checkboxes)
            var checkboxesChecked = [];
            // Loop over them all
            $('input[type="checkbox"]').each(function(){
                console.log('looping')
                // stick to the checked ones onto an array
                if(this.checked){
                    checkboxesChecked.push(1);
                } else {
                    checkboxesChecked.push(0);
                }
                console.log(checkboxesChecked)
            })
            // return the array if it is non-empty or null
            //return checkboxesChecked.length > 0 ? checkboxesChecked : null;
        }
    </script>
</head>
<body>
<section id="plans">
    <div align = "center">
        <h1>Friend</h1>
        Check all that apply:
        <br><br/>
        Tennis/Badminton: <input type = "checkbox" name = "tennis"/>
        <br><br/>
        Snowboarding/Skiing: <input type = "checkbox" name = "skiing"/>
        <br><br/>
        Amusement Park: <input type = "checkbox" name = "park"/>
        <br><br/>
        Camping: <input type = "checkbox" name = "camping"/>
        <br><br/>
        Rave/Edm: <input type ="checkbox" name = "rave"/>
        <br><br/>
        Pool <input type = "checkbox" name = "pool"/>
        <br><br/>
        Beach: <input type = "checkbox" name = "beach"/>
        <br><br/>
        Mini Put: <input type = "checkbox" name = "golf"/>
        <br><br/>
        Concert: <input type = "checkbox" name = "concert"/>
        <br><br/>
        Sushi: <input type = "checkbox" name = "sushi"/>
        <br><br/>
        Boating/Water Sports: <input type = "checkbox" name = "boat"/>
        <br><br/>
        Laser Tag: <input type = "checkbox" name = "laser"/>
        <br><br/>
        Paintball/Airsoft: <input type = "checkbox" name = "guns"/>
        <br><br/>
        Movies/Drive-in <input type = "checkbox" name = "movies"/>
        <br><br/>
        Shooting Range: <input type = "checkbox" name = "range"/>
        <br><br/>
        Bars: <input type = "checkbox" name = "bars"/>
        <br><br/>
        <input type = "submit" value = "Submit!" onClick = "getCheckedBoxes();"/>
    </div>
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
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="#plans" class="scroll">Plans</a></li>
        <li><a href="#contact" class="scroll">Contact</a></li>
    </ul>
</nav>

</body>
</html>