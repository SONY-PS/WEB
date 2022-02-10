<?php
$con = new mysqli("localhost","root","","sample_php");
if(isset($_POST['sb']))
{
$u= $_POST['un'];
$p= $_POST['pa'];

$sql="INSERT INTO `login`( `unm`, `password`) VALUES ('$u','$p')";
$res=$con->query($sql);
if($res)
{echo "INSERTED";
}
else{echo "FAILED";
}
}
?>
<html>
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Post form</title>
</head>
<body>
<h1 align="center">POSTING PHP</h1>
<form method="POST">
<table align="center">
<tr>
<td>User name</td>
<td><input type="text" name="un"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" name="pa"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="sb" value="FORM SUBMIT"></td>
</tr>
</table>

</form>
</body>
</html>