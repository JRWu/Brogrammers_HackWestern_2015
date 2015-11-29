<!doctype html>
<html>
<head>

    <title>Bootstrap</title>
    <meta name = "viewport" content ="width=device-width, initial-scale=1.0">
    <link href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel = "stylesheet">
    <link href = "./css/styles.css" rel = "stylesheet">

    <script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script language = "javascript" type ="text/javascript">
        function getCheckedBoxes(chkboxName){
            //console.log('clal')
            var checkboxes = document.getElementsByName(chkboxName);
            //console.log(checkboxes)
            var checkboxesChecked = [];
            // Loop over them all
            $('input[type="checkbox"]').each(function(){
                //console.log('looping')
                // stick to the checked ones onto an array
                if(this.checked){
                    checkboxesChecked.push(1);
                } else {
                    checkboxesChecked.push(0);
                }
                //console.log(checkboxesChecked)
            })
            // return the array if it is non-empty or null
            //return checkboxesChecked.length > 0 ? checkboxesChecked : null;
        }
    </script>
</head>
<body>

<div class = "container" align = "center">
        <h2>Partner</h2>
        Check all that applies!!
        <br><br/>
        Art Gallery: <input type = "checkbox" name = "gallery"/>
        <br><br/>
        Restaurant: <input type = "checkbox" name = "restaurant"/>
        <br><br/>
        Amusement Park: <input type = "checkbox" name = "park"/>
        <br><br/>
        Camping: <input type = "checkbox" name = "camping"/>
        <br><br/>
        Rave/Edm: <input type ="checkbox" name = "rave"/>
        <br><br/>
        Bars: <input type = "checkbox" name = "bars"/>
        <br><br/>
        Pool <input type = "checkbox" name = "pool" />
        <br><br/>
        Golf: <input type = "checkbox" name = "golf"/>
        <br><br/>
        Concert: <input type = "checkbox" name = "concert"/>
        <br><br/>
        Sushi: <input type = "checkbox" name = "sushi"/>
        <br><br/>
        Laser Tag: <input type = "checkbox" name = "laser"/>
        <br><br/>
        Movies/Drive-in: <input type = "checkbox" name = "movies"/>
        <br><br/>
        Spa: <input type = "checkbox" name = "spa"/>
        <br><br/>
        <input type = "submit" value = "Submit!" class = "btn btn-default onClick = "getCheckedBoxes();"/>
    </div>

</body>
</html>