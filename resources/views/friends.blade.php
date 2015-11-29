<!DOCTYPE html>
<html>
<head>
    <title>Watch Me Whip</title>
    <meta name = "viewport" content ="width=device-width, initial-scale=1.0">
    <link href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel = "stylesheet">
    <link href = "./css/friends.css" rel = "stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script language = "javascript" type ="text/javascript">
        function getCheckedBoxes(chkboxName)
        {
            var checkboxes = document.getElementsByName(chkboxName);
            var checkboxesChecked = [];
            $('input[type="checkbox"]').each(function()
            {
                if(this.checked)
                {
                    checkboxesChecked.push(1);
                }
                else
                {
                    checkboxesChecked.push(0);
                }
            })
            return checkboxesChecked.length > 0 ? checkboxesChecked : null;
        }
    </script>
</head>
<body>
<div class = "container" align = "center">
    <h1>Friend</h1>
    <div class = "container" id="checkboxes">
        Check all that apply:
        <br><br/>
        Amusement Park: <input type = "checkbox" name = "amusement_park"/>
        <br><br/>
        Camping: <input type = "checkbox" name = "campground"/>
        <br><br/>
        Rave/Edm: <input type ="checkbox" name = "rave"/>
        <br><br/>
        Pool <input type = "checkbox" name = "pool"/>
        <br><br/>
        Golf: <input type = "checkbox" name = "golf"/>
        <br><br/>
        Concert: <input type = "checkbox" name = "concert"/>
        <br><br/>
        Sushi: <input type = "checkbox" name = "sushi"/>
        <br><br/>
        Laser Tag: <input type = "checkbox" name = "laser"/>
        <br><br/>
        Paintball: <input type = "checkbox" name = "paintball"/>
        <br><br/>
        Movies/Drive-in <input type = "checkbox" name = "movie_theater"/>
        <br><br/>
        Bars: <input type = "checkbox" name = "bar"/>
        <br><br/>
        Spa: <input type = "checkbox" name = "spa"/>
        <br><br/>
        Park: <input type = "checkbox" name = "park"/>
        <br><br/>
        <input type = "submit" value = "Submit!" class = "btn btn-default"  onClick = "getCheckedBoxes();"/>
    </div>
</div>
</body>
</html>