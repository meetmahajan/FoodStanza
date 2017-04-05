<!DOCTYPE html>
<html>

	<head>
	 <link href="LoginStyleSheet.css" rel="stylesheet" />
        <title>FoodStanza</title>
        <link rel="stylesheet" type="text/css" href="Phase2.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
		<script> function enter(elem){
     elem.style.backgroundColor = '#f5aaaa';
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
        <div style="margin-top:260px" align="center">
		<form action="u_Global_Search.php" method="post">
            <table>
                <tr>
                    <td>
                        <select name="City" onmouseover="enter(this)" onmouseout="leave(this)" class="btn btn-default" style="font-size:large;margin:10px;background-color:#eaeaea;color:black">
                            <option value="Ahmedabad" selected>Ahmedabad</option>
                        </select>
                    </td>
                    <td>
                        <select name="Area" onmouseover="enter(this)" onmouseout="leave(this)" class="btn btn-default" style="font-size:large;margin:10px;background-color:#eaeaea;color:black">
                            <option value="Rajendra Park">Rajendra Park</option>
                            <option value="Rabari Colony">Rabari Colony</option>
                            <option value="Sureliya">Sureliya</option>
                            <option value="Soni ni Chal">Soni ni Chal</option>
                            <option value="WonderPoint">WonderPoint</option>
                        </select>
                    </td>
                    <td>
                        <select name="FoodType" onmouseover="enter(this)" onmouseout="leave(this)" class="btn btn-default" style="font-size:large;margin:10px;background-color:#eaeaea;color:black">
                            <option value="Veg" selected>Veg</option>
                            <option value="Egg">Egg</option>
                            <option value="Non-Veg">Non-Veg</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" style="background-color:gold;font-size:large" value="Search" class="btn btn-default" />
                    </td>
                </tr>
            </table>
        </form>
        </div>
	</body>
	<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>
</html>