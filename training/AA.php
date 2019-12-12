<html>
<head>
<title>your age</title>
</head>

<body>
<div>

<h3>Enter your Birth Date</h3> </div>
<div><input type="date" id="birthdate" /> 
 <input type="button" value="Submit" id="acceptbutton" /> </div>

<script>
function getAge(){
var newDateObject = new Date();

var newObjectCurrentYear = newDateObject.getFullYear();

var userDateObject = document.getElementById("birthdate").value;

var userDateObjectPieces = userDateObject.split("-");

var userObjectYear = userDateObjectPieces[0];

if ( newObjectCurrentYear > userObjectYear){
var currentAge = parseInt(newObjectCurrentYear) - parseInt(userObjectYear);
alert("Your Current Age is: " + currentAge + " " +(currentAge>1?"years":"year"));
}

else{
alert("Birth-Year must be lower than Current-Year.\nPlease Enter Again.");
}

}

var simpleButton = document.getElementById("acceptbutton");
simpleButton.addEventListener("click",getAge);
</script>
</body>
</html>