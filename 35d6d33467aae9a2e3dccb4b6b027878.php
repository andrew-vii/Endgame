<!DOCTYPE html>
<html>
<?php
// This is to check if the request is coming from a specific URL
$ref = $_SERVER['HTTP_REFERER'];

if($ref !== 'http://localhost/8cbad96aced40b3838dd9f07f6ef5772.php') {
  die();
}

?>
<head>
<title>Challenge Complete</title>
</head>
<style>
body {
	background-image: url("../media/four.jpg"); 
	background-repeat: no-repeat;
	background-size: cover;
	}
	</style>
<body>
<form name="loginForm" method="post" action="">
<table width="100%" bgcolor="" align="center">

<tr>
<td align="center" colspan=2><font size=30 color="white"><b>THE END</b></font></td>
</tr>
	
<tr>
<td align="center" colspan=2><font size=10 color="white"><b>You have my respect. I hope the people of Earth remember you.</b></font></td>
</tr>


</table>

</form>



</body>
</html>
