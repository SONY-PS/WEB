<?php

session_start();
$con = new mysqli("localhost","root","","sample_php");


if(isset($_POST['s']))
{
  if (!$con) 
   {
      echo "Connection failed";
   } 

else
  {  

     $un=$_POST['em'];
     $pwd=$_POST['pa'];

     $sql="SELECT * FROM `tbl_student` WHERE email='$un' and password='$pwd'";

     $result = $con->query($sql); 

     if(mysqli_num_rows($result)>0)
     {
        $rows = mysqli_fetch_array($result); 
        $id=$rows[0];

        $_SESSION['login_id']=$id;

      
        header("location:/posting/Std_home.php");
      }

    else
    {
      ?>
      <script>
      alert('invalid user')
      </script>
      <?php
      
      header("refresh:1; url=stu_login.php");
    }

  }
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>S_Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
   
   <form method="POST" class="form"> 


     <br><br>
     <h1 align="center" style="font-weight: bolder;">Welcome To Student Login Page</h1>
     <br><br>
     <div class="home_div" align="center">
        <p style="font-weight: bolder;">Please Fill the Fields</p>
        <table align="center" style="font-weight: bolder;">
        	<tr>
        		<td>Email</td>
        		<td><input type="email" required placeholder="Username" name="em"></td>
        	</tr>
        	<tr>
        		<td>Password</td>
        		<td height="40"><input type="Password" required placeholder="Password" name="pa"></td>
        	</tr>

        	<tr>

        		<td></td>
        		<td height="40">
        			<input type="submit" value="STUDENT LOGIN" name="s" class="button">

        		</td>
        	</tr>

          <tr>

            <td></td>
            <td height="40">
               <a href="Home.php">Back To Home</a><br><br>

            </td>
          </tr>
        	
        </table>
        
    </div>

  </form>


</body>
</html>