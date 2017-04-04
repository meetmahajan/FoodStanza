<!DOCTYPE html>
<html lang="en">
<head>
    <title>FoodStanza</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="in_background1">
    <div>
        <nav style="background-color:transparent;border:0px;padding:5px;" class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header" height="50px">
                    <a style="font-family:Edwardian Script ITC;font-size:80px;color:white;margin:20px" class="navbar-brand" href="home.php">FoodStanza</a>
                </div>
                <a style="float:right;background-color:gold;font-family:'Arial';color:black;font-size:20px;margin:20px" href="home.php" class="btn btn-danger navbar-btn" role="button">Skip  <span class="glyphicon glyphicon-log-in"></span>  Sign in</a>
            </div>
        </nav>
    </div>

    <div align="center" class="in_login">
        
        
        <form action="#" method="post" name="SignIn">
            <table>
                <tr>
                    <td align="center">
                        <p class="in_center">Sign in to continue to FoodStanza</p>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input class="in_box" type="email" placeholder="Email" name="UserName" required/>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input class="in_box" type="password" placeholder="Password" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <a  class="in_forgot" href="#.php"><span>Forgot Password</span></a>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input style="margin:10px;font-size:large;font-family:Arial;color:black;min-width:254px;background-color:gold;border-color:red;" class="btn btn-danger navbar-btn" type="Submit" value="Sign in" />
                    </td>
                </tr>
               
            </table>        
        </form>

    </div>
    <div style="margin-top:30px" align="center">
	
	<p class="in_white" style="font-size:20px">&nbsp &nbsp  &nbsp&nbsp&nbsp&nbsp Not Member yet?</p>
    <a class="in_signup"href="SignUp.php" style="font-size:20px">&nbsp &nbsp  &nbsp&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-user"></span> Sign Up</a>
	
	</div>
    
</body>
</html>
