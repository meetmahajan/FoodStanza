<html>
<body style="margin:0px;padding:0px">
<?php

$conn=mysql_connect("localhost","FoodStanza","Food");
	if(!$conn)
	{
		die('Error in connection'.mysql_error());
	}
		
$db=mysql_select_db("foodstanza",$conn);


?>
</body>
</html>