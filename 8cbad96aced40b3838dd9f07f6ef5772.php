<!DOCTYPE html>
<html>
<?php
// This is to check if the request is coming from a specific URL
$ref = $_SERVER['HTTP_REFERER'];

if($ref !== 'http://localhost/f17b2e37789a14d06e8e63c0a1a37c27.php') {
  die();
}

?>
<head>
<title>Level Three</title>
</head>
<style>
body {
	background-image: url("../media/three.jpg"); 
	background-repeat: no-repeat;
	background-size: cover;
	}
	</style>
<body>
<form name="loginForm" method="post" action="">
<table width="30%" bgcolor="" align="left">

<tr>
<td align="left" colspan=4><font size=30 color="white"><b>LEVEL THREE</b></font></td>
</tr>

<tr>
<td align="right"><font size=4 color="white"><b>Challenge:</b></font></td>
<td align="left"><font color="white" size=4> <output type="text" size=16 maxlength=16 name="challenge" id="challenge" value=""></output></font></td>
</tr>

<tr>
<td align="right"><font size=4 color="white"><b>Response:</b></font></td>
<td align="left"><input type="text" size=16 name="response" id="response" value=""></td>
</tr>

<tr>
<td align="right"><input type="submit" onclick="return secretmathcheck(this.form)" value="Send"></td>
</tr>

</table>

</form>

 
 
<script language="javascript">

function randomNumber(len) {
    var randomNumber;
    var n = '';

    for(var count = 0; count < len; count++) {
        randomNumber = Math.floor(Math.random() * 10);
        n += randomNumber.toString();
    }
    return n;
}

document.getElementById("challenge").value = randomNumber(2);

 
function secretmath(d)
{
var a;
var b = 3;
var c = 10;
var i;
var raw_magic = document.getElementById("challenge").value  //Get challenge value
var magic = Number(raw_magic); //Convert to a num, since JScript will take it as a string by default

for (i = 0; i < b%c; i++) { //Do some modulo math
  magic += magic; //Incremental addition
}

a = magic^d; //Bitwise XOR check

return a;

}
  
  
function secretmathcheck(form)
{
  
if(secretmath(document.getElementById("response").value) == 19) //Check the response and secretmath value
{
	window.open("http://localhost/35d6d33467aae9a2e3dccb4b6b027878.php");
	return true;
}
else
{
	alert("You're strong. But I could snap my fingers, and you'd cease to exist...")
	return false;
}
}
  
  
</script>

</body>
</html>
