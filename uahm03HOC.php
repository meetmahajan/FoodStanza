<!DOCTYPE html>
<html>
	<?php
	include_once('connection.php'); 
	$display = mysql_query("select * from streetfood where Code='GUAHM03HOC'");
	while($row = mysql_fetch_array($display))
			{
				$Name=$row['StallName'];
				$Code=$row['Code'];
				$Address=$row['Address'];
				$City=$row['City'];
				$State=$row['State'];
				$Type=$row['FoodType'];
				$Available=$row['Available'];
				$Mobile=$row['PhoneNumber'];
				$OTime=$row['OpenTime'];
				$CTime=$row['CloseTime'];
			}
	?>
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
	</head>

	<body>
	<nav style="background-color:black;border:0px;padding:0px;" class="navbar navbar-inverse navbar-fixed-top">
            <div class="col-xs-12">
                    <a style="font-family:'Times New Roman';font-size:40px;color:white;margin:5px" class="navbar-brand" href="u_home.php">FoodStanza</a>
                  
                </div>
        </nav>
        <div style="margin-top:60px">
            <div class="container main-container">

                <h1><?php echo $Name;?></h1>
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <!-- First slide -->
                        <div class="item active img1">
                         </div> 
                        <!-- Second slide -->
                        <div class="item img2">
                        </div>
                        <!-- Third slide -->
                        <div class="item img3">
                        </div>

                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
            <div class="col-xs-3" style="height:150px;margin-top:20px;margin-left:112px;border-radius:5px;border:solid;border-width:1px;">
			<h4 align="center"><span class="glyphicon glyphicon-menu-hamburger"></span> <b>Description</b></h4>
			<br>
			<p align="center" style="font-size:12pt;padding-bottom:5px;">
			xyz<br>
			byn<br>
			bnhjm<br>
			</p>
			</div>
			<div class="col-xs-3" style="height:150px;margin-top:20px;margin-left:58px;border-radius:5px;border:solid;border-width:1px;">
			<h4 align="center"><span class="glyphicon glyphicon-home"></span> <b>Address</b></h4>
			<br>
			<p align="center" style="font-size:12pt;padding-bottom:5px;">
			<?php
			echo $Address.","."<br>".$City.","."<br>".$State;
			?>
			</p>
			</div>
			<div class="col-xs-3" style="height:150px;margin-top:20px;margin-left:58px;border-radius:5px;border:solid;border-width:1px;">
			<h4 align="center"><span class="glyphicon glyphicon-phone"></span> <b>Contact</b></h4>
			<br>
			<p align="center" style="font-size:12pt;padding-bottom:5px;">
			<?php
			echo "<b>Phone Number :</b>"." "."(+91)".$Mobile; 
			?>
			</p>
			</div>
			<div class="col-xs-3" style="height:150px;margin-top:20px;margin-bottom:20px;margin-left:112px;border-radius:5px;border:solid;border-width:1px;">
			<h4 align="center"><span class="glyphicon glyphicon-dashboard"></span> <b>Available</b></h4>
			<br>
			<p align="center" style="font-size:12pt;padding-bottom:5px;">
			<?php
			echo "<b>Opening Time :</b>"."&nbsp&nbsp&nbsp".$OTime."<br>";
			echo "<b>Closing Time :</b>"."&nbsp&nbsp &nbsp".$CTime."<br>";
			?>
			</p>
			</div>
			<div class="col-xs-3" style="height:150px;margin-top:20px;margin-bottom:20px;margin-left:58px;border-radius:5px;border:solid;border-width:1px;">
			<h4 align="center"><span class="glyphicon glyphicon-apple"></span> <b>Type</b></h4>
			<br>
			<p align="center" style="font-size:12pt;padding-bottom:5px;">
			<?php
			echo $Type; 
			?>
			</p>
			</div>
			<div class="col-xs-3" style="height:150px;margin-top:20px;margin-bottom:20px;margin-left:58px;border-radius:5px;border:solid;border-width:1px;">
			<h4 align="center"><span class="glyphicon glyphicon-list-alt"></span> <b>Code</b></h4>
			<br>
			<p align="center" style="font-size:12pt;padding-bottom:5px;">
			<?php
			echo $Code; 
			?>
			</p>
			</div>
            <script>
                (function ($) {

                    //Function to animate slider captions 
                    function doAnimations(elems) {
                        //Cache the animationend event in a variable
                        var animEndEv = 'webkitAnimationEnd animationend';

                        elems.each(function () {
                            var $this = $(this),
                                $animationType = $this.data('animation');
                            $this.addClass($animationType).one(animEndEv, function () {
                                $this.removeClass($animationType);
                            });
                        });
                    }

                    //Variables on page load 
                    var $myCarousel = $('#carousel-example-generic'),
                        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

                    //Initialize carousel 
                    $myCarousel.carousel();

                    //Animate captions in first slide on page load 
                    doAnimations($firstAnimatingElems);

                    //Pause carousel  
                    $myCarousel.carousel('pause');


                    //Other slides to be animated on carousel slide event 
                    $myCarousel.on('slide.bs.carousel', function (e) {
                        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
                        doAnimations($animatingElems);
                    });

                })(jQuery);
            </script>
        </div>
	</body>
</html>