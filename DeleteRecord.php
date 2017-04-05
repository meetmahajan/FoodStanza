<?php
session_start();
		$User=$_SESSION['login_user'];
include_once('connection.php');
		$Id=$_SESSION['Id'];
		$adminuser="DELETE FROM localuser WHERE User='$User' And Id='$Id'";
		mysql_query($adminuser,$conn);
		unset($_SESSION['Id']);
		header("Location: Records.php");
?>
