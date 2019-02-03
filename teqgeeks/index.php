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
	<script src="js/particles.js" type="text/javascript"></script>
	<script src="js/particle-network.min.js" type="text/javascript"></script>
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
					<a class="navbar-brand page-scroll" href="#"><img src="images/logo.png" alt="logo"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="navbar-collapse collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a class="page-scroll" href="#header">HOME</a></li>
						<li><a class="page-scroll" href="#testimonials">HOW IT WORKS?</a></li>
						<li><a class="page-scroll" href="#courses">OUR COURSES</a></li>
						<li><a class="page-scroll" href="#instructors">ABOUT US</a></li>
						<li><a class="page-scroll" href="#footer">CONTACT</a></li>
						<li class="btn-sm"><form action="signup.php" method="POST"><button type="submit"class="login_btton">SIGN UP</button></form></li>
						<li class="btn-sm"><form action="login.php" method="POST"><button type="submit"class="login_btton">LOG IN</button></form></li>
					</ul>
				</div>
				
			</div>
        </div>
    </div> <!-- end of navigation -->
	
	
	<!-- HEADER -->
	<div class="particle-canvas">
	<header id="header" class="header">
	<div class="container-fluid header-content">
		<div class="row">
			<div class="col-md-6 text-center">
				<img class="header_image" src="images/logo_1.png"></img>
			</div>
			<div class="col-md-6">
				
				<h1>Python & Django</h1>
				<p>Enroll for a Backend Developer Course  <br>Learn Python/Django </p>
				<a class="button-solid large page-scroll" href="#">Enroll NOW</a>
			</div>
		</div>
	</div>
		
	</header><!-- end of header -->
	</div>
	
	
	
	
	<!-- TESTIMONIALS -->
	<div class="testimonials" id="testimonials">
		<div class="container">
			<div class="row">
				<h3 style="margin-top:-2%;">How it Works ?</h3>
				<div class="col-md-3 text-left fade-in one">
					<img src="images/enroll_icon.png">
					<h4>Enroll</h4>
					<p>Join a course of your interest</p>
				</div>
			  <div class="col-md-3 text-left fade-in two">
					<img src="images/learn_icon.png">
				<h4>Learn</h4>
				  <p>Attend classes and work on assignments.</p>
				</div>
				<div class="col-md-3 text-left fade-in one">
					<img src="images/make_logo.png">
					<h4>Make</h4>
					<p>Detailed guidance for making projects.</p>
				</div>
				<div class="col-md-3 text-left fade-in two">
					<img src="images/job_icon.png">
					<h4>Job</h4>
					<p>Talk about projects during interviews.</p>
				</div>
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div> <!-- end of testimonials -->
	
	<!-- Our Courses -->
	<div id="courses" class="courses">
		<div class="container text-center">
			<h2 class="text-center">Our Courses</h2>
			<img class="decorative-line" src="images/decorative-line.svg" alt="decorative line">
			<div class="row">
				<div class="course-pane">
					<a href="#">
						<div class="course-image">
							<img class="img-responsive img-rounded" src="images/python_django.png" alt="course">
						</div>
					</a>
					<div class="course-info text-center">
						<a href="#">
							<h5>Python + Django</h5>
							<p>Backend Developer Course</p>
							<p style="font-weight:400;font-size:1.9rem;">Rs.  <strike>6,499</strike> + GST</p>
							<button class="enrollbtn">Enroll</button>
						</a>
					</div>
				</div>
				<div class="course-pane">
					<a href="#">
						<div class="course-image">
							<img class="img-responsive img-rounded" src="images/machine_learning.png" alt="course">
						</div>
					</a>
					<div class="course-info text-center">
						<a href="#">
							<h5>Machine Learning</h5>
							<p>(Using Python)</p>
							<p style="font-weight:400;font-size:1.9rem;">Rs.  7,499 + GST</p>
							<button class="enrollbtn">Enroll</button>
						</a>
					</div>
				</div>
				<div class="course-pane">
					<a  href="#">
						<div class="course-image">
							<img class="img-responsive img-rounded" src="images/python_machine_learning.png" alt="course">
						</div>
					</a>
					<div class="course-info text-center">
						<a href="#">
							<h5>Python + Machine Learning</h5>
							<p>Package</p>
							<p style="font-weight:400;font-size:1.9rem;">Rs.  10,499 + GST</p>
							<button class="enrollbtn">Enroll</button>
						</a>
					</div>
				</div>
			</div>
		</div> <!-- end of container -->
	</div>
	
	
	
	<!-- end of Our Courses-->

	
	<!-- INSTRUCTORS -->
	<div id="instructors" class="instructors">
		<div class="container text-center">
			<h2 class="text-center">Instructors</h2>
			<img class="decorative-line" src="images/decorative-line.svg" alt="decorative line">
			<div class="row">
				
				<div class="instructor-pane">
					<a class="popup-with-move-anim" href="#instructor-2">
						<div class="instructor-image">
							<img class="img-responsive img-rounded" src="images/instructor-2.jpg" alt="instructor">
						</div>
					</a>
					<div class="instructor-info text-center">
						<a class="popup-with-move-anim" href="#instructor-2">
							<h5>Anshul Srivastava</h5>
							<p>CEO</p>
						</a>
						<div class="instructor-social">
							<span class="fa-stack fa">
								<a href="#your-link-here">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
								</a>
							</span>
							<span class="fa-stack fa">
								<a href="#your-link-here">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
								</a>
							</span>
							<span class="fa-stack fa">
								<a href="#your-link-here">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
								</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end of container -->
	</div> <!-- end of instructors -->
	
	<!-- FOOTER -->
	<div id="footer" class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-pane">
						<h4>Contact Details</h4>
						<div class="footer-details">
							<p>Teq Geeks is an online training course that will teach you how to sell online</p>
							<!-- <p><i class="fa fa-map-marker" aria-hidden="true"></i> 22 Innovative Area, San Francisco, CA 94043, California, USA</p> -->
							<!-- <p><i class="fa fa-phone" aria-hidden="true"><a class="phone-number" href="tel:003024630820">+30 2463 0820</a></i>--><p><i class="fa fa-mobile"  aria-hidden="true"><a class="phone-number" href="tel:+918360008477">+91 8360008477</a></i> 
							<!-- <i class="fa fa-envelope-o" aria-hidden="true"><a href="mailto:contact@argo.com">contact@argo.com</a></i>&nbsp;&nbsp;<i class="fa fa-chrome" aria-hidden="true"><a href="#your-link">www.argo.com</a></i>--></p> 
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="footer-pane">
						<h4>Social Networks</h4>
						<!-- Social Icons Container -->
						<div class="social-icons-container">
							<span class="fa-stack fa-lg">
								<a href="#your-link-here">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
								</a>
							</span>
							<span class="fa-stack fa-lg">
								<a href="#your-link-here">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
								</a>
							</span>
							<span class="fa-stack fa-lg">
								<a href="#your-link-here">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
								</a>
							</span>
							<span class="fa-stack fa-lg">
								<a href="#your-link-here">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
								</a>
							</span>
							<span class="fa-stack fa-lg">
								<a href="#your-link-here">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
								</a>
							</span>
							<span class="fa-stack fa-lg">
								<a href="#your-link-here">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
								</a>
							</span>
						</div> <!-- end of social icons container -->
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="footer-pane">
						<!-- Contact Form -->
						<form id="ContactForm" data-toggle="validator">
							<div class="form-group first">
								<input type="text" class="form-control-input" id="cname" placeholder="Name" required>
							</div>
							<div class="form-group second">
								<input type="email" class="form-control-input" id="cemail" placeholder="Email" required>
							</div>
							<div class="form-group third">
								<textarea class="form-control-textarea" id="cmessage" placeholder="Write your message here" rows="4" required></textarea>
							</div>
							<button type="submit" class="form-control-submit-button">SUBMIT</button>
							<div class="form-message">
								<div id="cmsgSubmit" class="h3 text-center hidden"></div>
							</div>
						</form>
					</div>
				</div>
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div> <!-- end of footer -->
	
	<div id="login" role="dialog" class="modal fade instructor-details-container zoom-anim-dialog mfp-hide">
		 <div class="modal-dialog">
		 <div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<img class="img-responsive img-rounded" src="images/instructor-1.jpg" alt="details image">
			<div class="col-md-5">
				<h3>Pauline Smith</h3>
				<hr>
				<h4>Online Marketing Specialist</h4>
				<p>Pauline has a broad industry experience built while working for famous corporations and innovative startups which makes her a great instructor.</p>
				<ul>
					<li>Highly enthusiastic problem solver</li>
					<li>Loves to share information with peers</li>
				</ul>
				<div class="instructor-quote">
					<p>"I absolutely loved to work with Pauline's team while she was Marketing Manager at Delloite. She's a seriously dedicated person and loves to develop awesome digital courses."</p>
					<span><strong>John Monroe</strong> - General Manager, Delloite</span>
				</div>
				<div class="buttons">
					<a class="button-outline mfp-close as-button" href="#instructors">BACK</a> <a class="button-solid mfp-close as-button page-scroll" href="#header">REGISTER NOW</a>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- COPYRIGHT -->
	<div class="copyright">
		<div class="container text-center">
			<span>Copyright © Teq Geeks</span>
		</div> <!-- end of container -->
	</div> <!-- end of copyright -->
			
	
	<!-- SCRIPTS -->
	<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script> <!-- jQuery v2.2.4 - necessary for Bootstrap's JavaScript plugins -->
	<script src="js/bootstrap.min.js" type="text/javascript"></script> <!-- Bootstrap v3.3.7 -->
	<script src="js/jquery.easing.min.js" type="text/javascript"></script> <!-- jQuery Easing v1.3 for smooth scrolling between anchors -->
	<script src="js/jquery.countdown.min.js" type="text/javascript"></script> <!-- The Final Countdown v2.2.0 plugin for jQuery -->
	<script src="js/swiper.min.js" type="text/javascript"></script> <!-- Swiper v3.4.2 for image gallery swiper -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script> <!-- Magnific Popup v1.1.0 for lightboxes -->
	<script src="js/waypoints.min.js" type="text/javascript"></script> <!-- jQuery Waypoints v2.0.3 required by Counter-Up -->
	<script src="js/jquery.counterup.min.js" type="text/javascript"></script> <!-- Counter-Up v1.0 for statistics -->
	<script src="js/validator.min.js" type="text/javascript"></script> <!--  Validator.js v0.11.8 Bootstrap plugin that validates the registration form -->
	<script src="js/scripts.js" type="text/javascript"></script> <!-- Custom scripts -->
	
</body>
</html>