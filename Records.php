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
     elem.style.backgroundColor = '#eaeaea';
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
		<h3>Your Records</h3>
		</div>
		<div style="margin:10px">
		<?php
		$records = mysql_query("select * from localuser where User='$login_user'");
		while($rec = mysql_fetch_array($records))
		{	echo "<center>";
			echo "<div class='col-xs-3' onmouseover='enter(this)' onmouseout='leave(this)' style='background-color:#eaeaea;margin-top:50px;margin-right:50px;margin-left:50px;border-radius:5px;border:solid;border-width:1px;border-color:black;padding:10px'>";		
			echo "<span class='glyphicon glyphicon-cutlery' style='font-size:25px'></span>"."<br>";
			echo "<h4>".$rec['Name']." - ".$rec['Id']."</h4><br>";
			$_SESSION['Id']= $rec['Id'];
			echo "<p>".$rec['LocalStreet'].","."<br>";
			echo $rec['Area'].","."<br>";
			echo $rec['City']."-".$rec['PostalCode']."<br><br>";
			echo "<b>Review : </b>".'"'.$rec['Review'].'"'."</p><br>";
			echo "<form action='DeleteRecord.php' method='post'>";
			echo "<input style='font-size:15px;border-radius:5px;border:solid;border-width:1px;background-color:gold;color:black' type='submit' value='Delete Record'/>";
			echo "</form>";
			echo "</div>";
		}	echo "</center>";
		?>
		</div>
		
	</body>
</html>