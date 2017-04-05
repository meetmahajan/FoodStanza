<!DOCTYPE html>
<html>

	<head>
	 <link href="LoginStyleSheet.css" rel="stylesheet" />
        <title>FoodStanza</title>
        <link rel="stylesheet" type="text/css" href="css/Phase2.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
		<script> function enter(elem){
     elem.style.backgroundColor = 'lightblue';
	}
	 function leave(elem){
     elem.style.backgroundColor = 'white';
	}</script>
	</head>

	<body style="background-color:#eaeaea">
	<?php
		include_once('connection.php');
		session_start();
		$login_user=$_SESSION['login_user'];
		$display = mysql_query("select * from user where Email='$login_user'");
		while($row = mysql_fetch_array($display))
		{
			$Name=$row['Name'];			
		}
		?>
	<nav style="background-color:black;border:0px;padding:0px;" class="navbar navbar-inverse navbar-fixed-top">
            <div class="col-xs-12">
                    <a style="font-family:'Times New Roman';font-size:40px;color:white;margin:5px" class="navbar-brand" href="u_home.php">FoodStanza</a>
                    <ul class="nav navbar-nav navbar-right">
                        <li style="font-size:18px;margin-top:5px"><a href="#index.php"><span class="glyphicon glyphicon-user"></span> <?php echo $Name;?></a></li>
						<li style="font-size:18px;margin-top:5px"><a href="insert.php"><span class="glyphicon glyphicon-pencil"></span> Insert</a></li>
						<li style="font-size:18px;margin-top:5px"><a href="Records.php"><span class="glyphicon glyphicon-th-list"></span> View Records</a></li>
                        <li style="font-size:18px;margin-top:5px"><a href="SignOut.php"><span class="glyphicon glyphicon-log-out"></span> Sign Out</a></li>
                    </ul>
                </div>
        </nav>
        <div style="margin-top:130px" align="center">
		<h3>Add your Favrouite <b>Food Stall</b></h3>
		<br>
		<form action="AddRecords.php" method="post">
				<input required style="border:solid;border-width:1px;border-color:grey;border-radius:5px;font-size:15px;width:300px;" type="text" placeholder="Stall Name" name="Name" onmouseover="enter(this)" onmouseout="leave(this)">
				<br>
				<br>
				<input required style="border:solid;border-width:1px;border-color:grey;border-radius:5px;font-size:15px;width:300px;" type="text" placeholder="Id" name="Id" onmouseover="enter(this)" onmouseout="leave(this)">
				<br>
				<br>
				<input required style="border:solid;border-width:1px;border-color:grey;border-radius:5px;font-size:15px;width:300px;" type="text" placeholder="LocalStreet" name="LocalStreet" onmouseover="enter(this)" onmouseout="leave(this)">
				<br>
				<br>
				<input required style="border:solid;border-width:1px;border-color:grey;border-radius:5px;font-size:15px;width:150px;float:center;" type="text" placeholder="Area" name="Area" onmouseover="enter(this)" onmouseout="leave(this)">
				<input  required style="border:solid;border-width:1px;border-color:grey;border-radius:5px;font-size:15px;width:150px;float:center;" type="text" placeholder="City" name="City" onmouseover="enter(this)" onmouseout="leave(this)">
				<br>
				<br>
				<input required style="border:solid;border-width:1px;border-color:grey;border-radius:5px;font-size:15px;width:150px;float:center;" type="text" placeholder="State" name="State" onmouseover="enter(this)" onmouseout="leave(this)">
				<input required style="border:solid;border-width:1px;border-color:grey;border-radius:5px;font-size:15px;width:150px;float:center;" type="text" placeholder="PostalCode" name="PostalCode" onmouseover="enter(this)" onmouseout="leave(this)">
				<br>
				<br>
				<textarea style="border:solid;border-width:1px;border-color:grey;border-radius:5px;font-size:15px;width:300px;" placeholder="Review" name="Review" rows="5" cols="25" onmouseover="enter(this)" onmouseout="leave(this)"></textarea>
				<br>
				<br>
				<input type="submit" style="font-size:18px;border-radius:5px;border:solid;border-width:1px;background-color:gold;color:black" value="Add Records"/>
        </form>
        </div>
		
	</body>
</html>