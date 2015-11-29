<!DOCTYPE html>
<html>
<head>
    <title>Come My Way</title>
    <meta name = "viewport" content ="width=device-width, initial-scale=1.0">
    <link href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel = "stylesheet">
    <link href = "./css/family.css" rel = "stylesheet">
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
    <h1>Family</h1>
    <div class = "container" id="checkboxes">
        Check all that apply:
        <br><br/>
        Amusement Park: <input type = "checkbox" name = "amusement_park"/>
        <br><br/>
        Camping: <input type = "checkbox" name = "campground"/>
        <br><br/>
        Pool: <input type = "checkbox" name = "pool"/>
        <br><br/>
        Movies/Drive-in: <input type = "checkbox" name = "movie_theater"/>
        <br><br/>
        Concert: <input type = "checkbox" name = "concert"/>
        <br><br/>
        Park: <input type = "checkbox" name = "park"/>
        <br><br/>
        Laser Tag: <input type = "checkbox" name = "laser"/>
        <br><br/>
        Sushi: <input type = "checkbox" name = "sushi"/>
        <br><br/>
        Golf: <input type = "checkbox" name = "golf"/>
        <br><br/>
        Museum: <input type = "checkbox" name = "museum"/>
        <br><br/>
        Restaurants: <input type = "checkbox" name = "restaurant"/>
        <br><br/>
        Cafe: <input type = "checkbox" name = "cafe"/>
        <br><br/>
        <input type = "submit" value = "Submit!" class = "btn btn-default" onClick = "getCheckedBoxes();"/>
    </div>
</div>
</body>
</html>
