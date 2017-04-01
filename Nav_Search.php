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

<body class="in_background2">
    <div>
        <nav style="background-color:black;border:0px;padding:5px;" class="navbar navbar-inverse navbar-fixed-top">
            <div class="col-xs-12">
                <a style="font-family:Edwardian Script ITC;font-size:80px;color:white;margin:20px" class="navbar-brand" href="home.php">FoodStanza</a>
                <form class="navbar-form navbar-right" action="Nav_Search.php" method="post">
                    <input required style="font-size:20px;margin:20px;background-color:lightyellow;color:grey" type="text" class="form-control" placeholder="Search City" name="City">
                    <input type="submit" style="background-color:gold;" value="Search" class="btn btn-default" />
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li style="font-size:18px;margin-top:20px"><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign In</a></li>
                    <li style="font-size:18px;margin-top:20px"><a href="SignUp.php"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div align="center" style="margin-top:150px;">
        <form action="Global_Search.php" method="post">
            <table>
                <tr>
                    <td>
                        <select name="City" class="btn btn-default" style="font-size:medium;margin:10px;background-color:lightyellow;color:grey">
                            <option value="Ahmedabad" selected>Ahmedabad</option>
                        </select>
                    </td>
                    <td>
                        <select name="Area" class="btn btn-default" style="font-size:medium;margin:10px;background-color:lightyellow;color:grey">
                            <option value="Rajendra Park">Rajendra Park</option>
                            <option value="Rabari Colony">Rabari Colony</option>
                            <option value="Sureliya">Sureliya</option>
                            <option value="Soni ni Chal">Soni ni Chal</option>
                            <option value="WonderPoint">WonderPoint</option>
                        </select>
                    </td>
                    <td>
                        <select name="FoodType" class="btn btn-default" style="font-size:medium;margin:10px;background-color:lightyellow;color:grey">
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
	
    <div style="margin:10px">
        <?php
        include_once('connection.php');
        $city = $_POST["City"];
        $display = mysql_query("select * from streetfood where city='$city'");
        echo "<table border='1' width='100%' cellspacing='4' cellpadding='4' class='table table-bordered' style='font-weight:bold;color:white;border-color:yellow;margin:1px;padding:0px;font-size:16pt'>
            ";
            echo "
            <tr align='center'>
                ";
                echo "
                <td>
                    ";
                    echo "<b>Code</b>";
                    echo "
                </td>";
                echo "
                <td>
                    ";
                    echo "<b>Food Type</b>";
                    echo "
                </td>";
                echo "
                <td>
                    ";
                    echo "<b>Stall Name</b>";
                    echo "
                </td>";
                echo "
                <td>
                    ";
                    echo "<b>Address</b>";
                    echo "
                </td>";
                echo "
                <td>
                    ";
                    echo "<b>Phone Number</b>";
                    echo "
                </td>";
                echo "
            </tr>";
            while($row = mysql_fetch_array($display))
            {


            $i = $row['URL'];
            echo "
            <tr align='center'>
                ";
                echo "
                <td>
                    ";
                    echo "<a href='$i' style='color:lightred'>
                        ";
                        echo $row['Code'];
                        echo "
                    </a>";
                    echo "
                </td>";
                echo "
                <td>
                    ";
                    echo $row['FoodType'];
                    echo "
                </td>";
                echo "
                <td>
                    ";
                    echo "<a href='$i' style='color:lightred'>
                        ";
                        echo $row['StallName'];
                        echo "<a>
                            ";
                            echo "
                </td>";
                echo "
                <td>
                    ";
                    echo $row['Address'].",".$row['Area'].",".$row['City'];
                    echo "
                </td>";
                echo "
                <td>
                    ";
                    echo $row['PhoneNumber'];
                    echo "
                </td>";
                echo "
            </tr>";

            }
            echo "
        </table>";

        ?>
    </div>
</body>
</html>
