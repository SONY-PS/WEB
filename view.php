<?php
$con =new mysqli("localhost","root","","sample_php");
$sql ="select * from login";
$res =$con->query($sql);


?>
<html>
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>view</title>
</head>
<body>
<h1 align="center">view page</h1>
<table align="center" border="2">
<tr>
<td>id</td>
<td>name</td>
<td>password</td>
</tr>
<?php  while($row=mysqli_fetch_assoc($res)){
   ?>
<tr>
<td>	<?php echo $row['l_id']; ?>	</td>
<td>	<?php echo $row['unm']; ?>	</td>
<td>	<?php echo $row['password']; ?>	</td>
</tr>
<?php
}
?>
</table>
</body>
</html>