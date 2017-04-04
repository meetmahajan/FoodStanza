<?php
include_once('connection.php');
		$uname=$_POST['Name'];
		$email=$_POST['Email'];
		$password=$_POST['Password'];
		
		
		$adminuser="INSERT INTO user VALUES('$uname','$email','$password')";
		mysql_query($adminuser,$conn);		
		header("Location: index.php");
?>