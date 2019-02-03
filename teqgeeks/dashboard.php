<?php
session_start();
 $e=$_SESSION["idd"];
    $stats=NULL;
            $DB_Connect = mysqli_connect('localhost','root','','student') or die('Error Establishing DB Connection');
   
               // $e="test1@gmail.com";
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
        // $img = $DATA_ROW['profile'];
         }
     }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student's Dashbord</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css">

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
	
	<style type="text/css">
		body {
  padding-top: 50px;
  //background: linear-gradient(45deg, red,yellow);
  background:#2d7979;
  
}
footer {
  padding-left: 15px;
  padding-right: 15px;
}

/*
 * Off Canvas
 * --------------------------------------------------
 */
@media screen and (max-width: 768px) {
  .row-offcanvas {
    position: relative;
    -webkit-transition: all 0.25s ease-out;
    -moz-transition: all 0.25s ease-out;
    transition: all 0.25s ease-out;
    background:#ecf0f1;
  }

  .row-offcanvas-left
  .sidebar-offcanvas {
    left: -40%;
  }

  .row-offcanvas-left.active {
    left: 40%;
  }

  .sidebar-offcanvas {
    position: absolute;
    top: 0;
    width: 40%;
    margin-left: 12px;
  }
}

#sidebar {
    padding:15px;
    margin-top:10px;
}

.search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.navbar input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  color: black;
  letter-spacing: 4px;        
    text-shadow: 0 0 2px #292929;       
    word-spacing: 20px;
    border-radius:;
}

.search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 990px) {
  .navbar .search-container {
    float: none;
  }
 .navbar input[type=text], .navbar .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .navbar input[type=text] {
    border: 1px solid #ccc;  
  }
}
.container-fluid .sidebar-nav .nav a{
    color:#fff !important;
    font-weight: 500;
    border-radius: 5px;
    }
    .container-fluid .sidebar-nav .nav a:hover{
    color:#000 !important;
    }
.profile_image img{
    border-radius: 25%;
    border:2px solid #fff;
    background: #fff; 
}
.profile_image p{
    color:#fff;
}
</style>

	<script>
		$(document).ready(function() {
  			$('[data-toggle=offcanvas]').click(function() {
    			$('.row-offcanvas').toggleClass('active');
  			});
		});
	</script>
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top">



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
                        <li ><a class="page-scroll" href="#header">HOME</a></li>
                        <li class="active"><a class="page-scroll" >DASHBOARD</a></li>
                        <li><a class="page-scroll" href="#courses">OUR COURSES</a></li>
                        <li><a class="page-scroll" >ABOUT US</a></li>
                        <li><a class="page-scroll" href="#footer">CONTACT</a></li>
                        <li>
                            <div class="search-container" style="border-radius:25%">
                                <form action="/action_page.php">
                                  <input type="text" placeholder="Search.." name="search">
                                  <button type="submit"><i class="fa fa-circle" class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div> <!-- end of navigation -->

<div class="container-fluid" style="margin-top: 32px; ">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <div class="sidebar-nav" style="color: red;">
                <ul class="nav" style="color:red;">
                    <div class="profile_image">
                        <center><img src="images\profile_avtar.png" height="70" width="70"><br><p><?php if(isset($_SESSION["idd"]))
                                //echo $_SESSION["idd"];
                                echo "$n";
                                else{header("location:index.php");}
                            ?></p></center>
                    </div>

                    <li class="active"><a href="#">Online</a></li>
                    <li ><a href="#">Tutorial</a></li>
                    <li class="nav-divider"></li>
                    <li><a href="#">My Profile</a></li>  
                    <li><a href="#">My Purchases</a></li>   
                    <li><a href="#">Settings</a></li>
                    <li class="nav-divider"></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="student/logout.php">Logout</a></li>
                </ul>
            </div>
            <!--/.well -->
        </div>
        <!--/span-->

        <div class="col-xs-12 col-sm-9" style="background:#2d7979;">
            <br>
            <div class="jumbotron" style="background: rgba(244,63,63,0.8);">
                <a href="#" class="visible-xs" data-toggle="offcanvas"><i class="fa fa-lg fa-reorder"></i></a>
                <h3><u>My Courses</u></h3>
                <p>You have not opted any course yet.</p>
            </div>
            <h2 class="text-center">Our Top Courses</h2>
            <img class="decorative-line" src="images/decorative-line.svg" alt="decorative line">
            <div class="row">
                <div class="col-6 col-sm-6 col-lg-4">
                    
                    <div class="course-pane">
                    <a href="python.php">
                        <div class="course-image">
                            <img class="img-responsive img-rounded" src="images/python_django.png" alt="course">
                        </div>
                    </a>
                    <div class="course-info text-center">
                        <a href="python.php">
                            <h5>Python + Django</h5>
                            <p>Backend Developer Course</p>
                            <p style="font-weight:400;font-size:1.9rem;">Rs.  <strike>6,499</strike> + GST</p>
                            <button class="enrollbtn">Enroll</button>
                        </a>
                    </div>
                </div>
                    
                </div>
                <!--/span-->
                <div class="col-6 col-sm-6 col-lg-4">
                    <div class="course-pane">
                    <a class="popup-with-move-anim" href="pyml.html">
                        <div class="course-image">
                            <img class="img-responsive img-rounded" src="images/python_machine_learning.png" alt="course">
                        </div>
                    </a>
                    <div class="course-info text-center">
                        <a class="popup-with-move-anim" href="pyml.html">
                            <h5>Python + Machine Learning</h5>
                            <p>Package</p>
                            <p style="font-weight:400;font-size:1.9rem;">Rs.  10,499 + GST</p>
                            <button class="enrollbtn">Enroll</button>
                        </a>
                    </div>
                </div>  
                   
                </div>
                <!--/span-->

                <div class="col-6 col-sm-6 col-lg-4">
                    <div class="course-pane">
                    <a class="popup-with-move-anim" href="ml.html">
                        <div class="course-image">
                            <img class="img-responsive img-rounded" src="images/machine_learning.png" alt="course">
                        </div>
                    </a>
                    <div class="course-info text-center">
                        <a class="popup-with-move-anim" href="ml.html">
                            <h5>Machine Learning</h5>
                            <p>(Using Python)</p>
                            <p style="font-weight:400;font-size:1.9rem;">Rs.  7,499 + GST</p>
                            <button class="enrollbtn">Enroll</button>
                        </a>
                    </div>
                </div>
                </div>
                <!--/span-->
                
                <!--/span-->
            </div>
            <!--/row-->
        </div>
        <!--/span-->


    </div>
    <!--/row-->
</div>
<!--/.container-->
<!-- FOOTER -->
    <div id="footer" class="footer"  style="background:">
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