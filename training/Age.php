<?php
$res = false;
if (isset($_POST["submit"])) {
$dob_val = $_POST["dob"];
$dob = new DateTime($dob_val);
$today = new DateTime('today');
$obj = date_diff($dob, $today, FALSE);
$msgres = "<p> Date Of Birth is $dob_val  And Age is : $obj->y </p>";
$msgres .= "<p>Year : ".$obj->y." Months : ".$obj->m." Days : ".$obj->d."</p>";
$res = true;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Age</title>
    </head>
    <body>
      <form method="post">
 <p> Select The Date Of Birth : <input type="date" name="dob" required /></p>
<p> <input type="submit" name="submit" value="Result"> </p>
<?php
if ($res) {
echo "<div class='resultdiv'>  $msgres </div>";
}
?>
        
      </form>
</body>
</html>

<!--<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Age</title>
    </head>
    <body>


        Age:<input type="date" id="txtYear" onblur="CalculateAge();" required />
        <input type="button" value="Calculate Age" onclick="CalculateAge();" />
        <span id="Age"></span>

    <script type="text/javascript">
        function CalculateAge() {
//            var curYear = new Date().getUTCFullYear();
//            var age = curYear - document.getElementById('txtYear').value; 
// var date = (this).datepicker('getDate');
//            var year  = date.getFullYear();  
            var curYear = new Date().getFullYear();
            var age = curYear - document.getElementById('txtYear').value;
           
    document.getElementById('Age').innerHTML = age;
        }
         
    </script>
           </body>
</html>-->