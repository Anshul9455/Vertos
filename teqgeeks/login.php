   <?php
$dbp=NULL;
 if(isset($_POST['check']))
 {
    $e=$_POST["id"];
    $p=$_POST["password"];

    $DB_Connect = mysqli_connect('localhost','root','','student') or die('Error Establishing DB Connection');
   
  
           $queryy = "select * from student_info where email='$e'";
   
       $Result = mysqli_query($DB_Connect,$queryy) or die('Error Fetching User info');
        
       if($Result!=NULL)
       {
             while($DATA_ROW = mysqli_fetch_array($Result))
         {  
          $id = $DATA_ROW['email'];
          $n = $DATA_ROW['name'];
          $dbp = $DATA_ROW['password'];
          $dob = $DATA_ROW['age'];
          $g = $DATA_ROW['gender'];
          //$q = $DATA_ROW['s_question'];
          //$a = $DATA_ROW['s_answer'];
          //$p = $DATA_ROW['profile'];
         }

        if("$p"=="$dbp")
        {
        	session_start();
			$_SESSION["idd"]=$_POST["id"];
			//echo '<form action="safar.php" methode="post"><input type="hidden"</form>';
			//$_SESSION["profile"]=$_POST["$p"];
          	header("location:dashboard.php");
        }
        else
        {
          $message = "wrong  password";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
      } 
      else
      {
        $message = "wrong email ";
            echo "<script type='text/javascript'>alert('$message');</script>";
      } 
    } 

  ?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Website Title -->
	<title>Teq Geeks</title>

	<!-- Styles -->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,500,700" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/material-design-iconic-font.css" rel="stylesheet">
	<link href="css/swiper.css" rel="stylesheet">
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!-- Website Title -->
		<title>Teq Geeks</title>


		<!-- Styles -->
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,500,700" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">
		<link href="css/material-design-iconic-font.css" rel="stylesheet">
		<link href="css/swiper.css" rel="stylesheet">
		<link href="css/magnific-popup.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">

		<!-- Favicon  -->
		<link rel="icon" href="images/favicon.png">

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>

	<body data-spy="scroll" data-target=".navbar-fixed-top">

		<!-- Preloader -->
		<div class="spinner-wrapper">
			<div class="spinner">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>




		<!-- NAVIGATION -->
		<div class="navbar navbar-default navbar-fixed-top fade-in" role="navigation">
			<div class="container-fluid">
				<div class="row">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
						<a class="navbar-brand page-scroll" href="header.html"><img src="images/logo.png" alt="logo"></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="navbar-collapse collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a class="page-scroll" href="index.php">HOME</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- end of navigation -->


		<!-- HEADER -->
		<header id="header" class="header" style="background-image:url(images/coding_background.jpeg);margin-top:-5%;">
			<div class="container-fluid">
				<div class="flex-container-wrapper">
					<!-- IE fix for vertical alignment in flex box -->
					<div class="header-content">
						<div class="row" style="margin-top:10%;">
							<div class="col-md-6 text-center">
								<img class="header_image" src="images/logo_1.png"></img>
							</div>
							<div class="col-sm-1 col-md-1"></div>
							<div class="col-md-3 form-group text-center" style="margin-top:5%;">
								<form action="<?php $_PHP_SELF ?>" method="POST">
									<h2 class="">Log in</h2><br>
									<input type="email" class="form-control login_text" id="email" name="id" placeholder="Enter your email address" required/><br>
									<input type="password" class="form-control login_text" id="password" name="password" placeholder="Enter your Password" required/><br>
									<button type="submit" class="login_btton" name="check">Login</button>
								</form>
							</div>
						</div>
					</div>
					<!-- end of container -->
				</div>
				<!-- end of header-content -->
			</div>
			<!-- end of IE vertical alignment fix -->
		</header>
		<!-- end of header -->


		<!-- PAYMENT CONTENT -->


		<!-- SCRIPTS -->
		<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
		<!-- jQuery v2.2.4 - necessary for Bootstrap's JavaScript plugins -->
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<!-- Bootstrap v3.3.7 -->
		<script src="js/jquery.easing.min.js" type="text/javascript"></script>
		<!-- jQuery Easing v1.3 for smooth scrolling between anchors -->
		<script src="js/jquery.countdown.min.js" type="text/javascript"></script>
		<!-- The Final Countdown v2.2.0 plugin for jQuery -->
		<script src="js/swiper.min.js" type="text/javascript"></script>
		<!-- Swiper v3.4.2 for image gallery swiper -->
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<!-- Magnific Popup v1.1.0 for lightboxes -->
		<script src="js/waypoints.min.js" type="text/javascript"></script>
		<!-- jQuery Waypoints v2.0.3 required by Counter-Up -->
		<script src="js/jquery.counterup.min.js" type="text/javascript"></script>
		<!-- Counter-Up v1.0 for statistics -->
		<script src="js/validator.min.js" type="text/javascript"></script>
		<!--  Validator.js v0.11.8 Bootstrap plugin that validates the registration form -->
		<script src="js/scripts.js" type="text/javascript"></script>
		<!-- Custom scripts -->
	</body>

	<!-- Mirrored from inovatik.com/argo-training-course-landing-page/01-dedicated-form-page/payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jul 2018 20:06:23 GMT -->

	</html>