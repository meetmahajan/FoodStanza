<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <link href="index.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function verify()
        {
                    var pass = document.getElementById("Password");
                    var cnfmpass = document.getElementById("CnfmPassword");

                    if (pass.value != cnfmpass.value) {
                        alert("Password doesn't match! Please re-enter Password.");
                        pass.focus();
                        pass.select();
                        return false;
                    }

                    else {
                        return true;
                    }
        }




    </script>
</head>
<body  class="in_background">

    <nav style="background-color:transparent;border:0px;padding:5px;" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header" height="50px">
                <a style="font-family:Edwardian Script ITC;font-size:80px;color:white;margin:20px" class="navbar-brand" href="home.php">FoodStanza</a>
            </div>
            <a style="float:right;background-color:gold;font-family:'Arial';color:black;font-size:20px;margin:20px" href="index.php" class="btn btn-danger navbar-btn" role="button"><span class="glyphicon glyphicon-user"></span>  Sign in</a>
        </div>
    </nav>
    <div class="col-xs-12" style="margin-top:150px" align="center">
        <p class="in_center">Create your FoodStanza Account</p>
    </div>
        <div class="col-xs-12" style="margin-top:10px" align="center">
            <form id="Signup" method="post" action="#.php">
                <table>
                    <tr>
                        <td>
                            <input class="in_box" type="text" placeholder="Full Name" required name="User" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input class="in_box" type="email" placeholder="E-Mail" required name="UserName" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input class="in_box" type="password" placeholder="Password" required id="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input class="in_box" type="password" placeholder="Confirm Password" required id="CnfmPassword" onblur="verify();" />
                        </td>
                    </tr>

                    <tr>
                        <td align="center">
                            <input style="margin:10px;font-size:large;font-family:Arial;color:black;min-width:254px;background-color:gold;border-color:red;" class="btn btn-danger navbar-btn" type="submit" value="Sign Up" name="submit" onsubmit="verify();" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    <div>
    </div>
</body>
</html>
