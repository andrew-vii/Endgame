<html>
<?php
$_SESSION['loggedIn'] = true; 
?>
<head>
<title>Level Zer0</title>
</head>
<style>
body {
	background-image: url("../media/zero.jpg"); 
	background-size: cover;
	background-repeat: no-repeat;
	}
	</style>
<body>
<form name="loginForm" method="post" action="">
<table width="70%" bgcolor="" align="right">

<tr>
<td align="center"colspan=4><font size=30 color="white"><b>Cyber Recruiting Challenge</b></font></td>
</tr>

<tr>
<td align="center"colspan=8><font size=6 color="white"><b>Level Zer0</b></font></td>
</tr>
	
<tr>
<td align="right"><font size=4 color="white"><b>Username:</b></font></td>
<td align="left"><input type="text" size=20 name="userid" value="th@n0s"></td>
</tr>

<tr>
<td align="right"><font size=4 color="white"><b>Password:</b></font></td>
<td align="left"><input type="text" size=20 name="pwd"></td>
</tr>

<tr>
<td align="right"><input type="submit" onclick="return check(this.form)" value="Login"></td>
</tr>
	

</table>
</form>
<script language="javascript">
function check(form)
{

if(form.userid.value == "th@n0s" && form.pwd.value == "shouldhaveaimedforthehead")
{
	window.open("http://localhost/b8a9f715dbb64fd5c56e7783c6820a61.php");
	return true;
}
else
{
	alert("Reality is often...disappointing")
	return false;
}
}
</script>

</body>
</html>