<!DOCTYPE html>
<html>
<head>

    <title>Bootstrap</title>
    <meta name = "viewport" content ="width=device-width, initial-scale=1.0">
    <link href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel = "stylesheet">
    <link href = "./css/styles.css" rel = "stylesheet">
    <script href="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
    <div class = "container" align = "center">
        <h2>Family</h2>
        Check all that apply:
        <br><br/>
        Amusement Park: <input type = "checkbox" name = "park"/>
        <br><br/>
        Camping: <input type = "checkbox" name = "camping"/>
        <br><br/>
        Pool: <input type = "checkbox" name = "pool"/>
        <br><br/>
        Movies/Drive-in: <input type = "checkbox" name = "movies"/>
        <br><br/>
        Concert: <input type = "checkbox" name = "sushi"/>
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
        <input type = "submit" value = "Submit!" class = "btn btn-default" onClick = "getCheckedBoxes();"/>

    </div>

{{--<section id="contact">--}}
    {{--<h1>Contact</h1>--}}
    {{--<table align = "center">--}}
        {{--<tr>--}}
            {{--<td>Edmund Luong <br/> Western University <br/>--}}
                {{--eluong3 (at) uwo (dot) ca <br/> Computer Science</td>--}}
            {{--<td>Jerry Wu <br/> Western University <br/>--}}
                {{--jwu424 (at) uwo (dot) ca <br/> Computer Science</td>--}}
            {{--<td>Valmir Verbani <br/> Western University <br/>--}}
                {{--vverbani (at) uwo (dot) ca <br/> Computer Science</td>--}}
            {{--<td>Symon Luu <br/> Fanshawe College <br/>--}}
                {{--s_luu (at) fanshaweonline (dot) ca <br/> Internet Web Development & Applications</td>--}}
        {{--</tr>--}}
    {{--</table>--}}
    {{--&copy; 2015, Inc - All Rights Reserved--}}
</body>
</html>
