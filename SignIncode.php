<?php
	session_start();
	include_once('connection.php');
			$username=$_POST['UserName'];
			$password=$_POST['Password'];

			$adminuser="SELECT Password FROM user WHERE  Email='$username'";
			$result=mysql_query($adminuser); 
			while($row=mysql_fetch_array($result))
			{
				$pwd=$row['Password'];
			}
					
		if($password == $pwd)
			{
				header("Location:u_home.php");
				$_SESSION['login_user']=$username;
			}
			else
			{
				print "";
				header("Location:w_index.php");
			}
		
	
?>