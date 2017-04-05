<?php

$conn=mysql_connect("localhost","FoodStanza","food");
	if(!$conn)
	{
		die('Error in connection'.mysql_error());
	}
		
$db=mysql_select_db("foodstanza",$conn);


?>
</body>
</html>
