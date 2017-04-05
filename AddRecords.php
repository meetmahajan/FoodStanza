<?php
session_start();
		$User=$_SESSION['login_user'];
include_once('connection.php');
		$Name=$_POST['Name'];
		$Id=$_POST['Id'];
		$LocalStreet=$_POST['LocalStreet'];
		$Area=$_POST['Area'];
		$City=$_POST['City'];
		$State=$_POST['State'];
		$PostalCode=$_POST['PostalCode'];
		$Review=$_POST['Review'];
		$adminuser="INSERT INTO localuser VALUES('$Id','$User','$Name','$LocalStreet','$Area','$City','$PostalCode','$State','$Review')";
		mysql_query($adminuser,$conn);		
		header("Location: u_home.php");
?>
