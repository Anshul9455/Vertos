<?php
session_start();
if(isset($_SESSION['success']))
{
// Create connection
$con = mysqli_connect("localhost", "u501711582_tequs", "teQ_GeeKs@8837", "u501711582_teqgs");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['verify'])) 
{	
	$email=$_SESSION['email'];
	$transition_id=$_POST['transition_id'];
	$insert = "update student SET transition_id='$transition_id' Where email='$email'";
	//$res = $con -> query($insert);
	$i=0;
	if($con->query($insert) === TRUE)	
	{ 
		echo"<script> alert('Verify Soon');</script>";
	}
	else
	{
		?>
		<script> alert("Error");</script><?php
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header"> 
    	<a class="navbar-brand page-scroll" href="dashboard.html"><img src="../images/logo.png" alt="logo"/></a> 
    </div>
    <div class="navbar-collapse collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a class="page-scroll" href="logout.php">Log Out</a></li>
					</ul>
				</div>
				
  </div>
</nav>
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 col-md-2 sidenav">
      <p><img class="avtar" src="../images/profile_avtar.png"</p>
      <p>
      <h3 class="studentname" id="student_name"><?php //echo $firstname+$middlename+$lastname?></h3>
      </p>
      <p>
      <h4 class="college" id="college">Lovely Professional University</h4>
      </p>
      <p class="qualification" id="qualification">Master of Computer Application</p>
      <p>
        <button type="button" class="enroll">Enrollments</button>
      </p>
    </div>
    <div class="col-sm-8 text-left">
      <h1>Welcome Student</h1>
      <div class="text-center transition">
        <h2 class="text">Verify Your Payment</h2>
        <div class="input_field">
          <form action="" method="POST">
            <input class="form-control-input" type="text" name="transition_id" id="transition_id"  placeholder="Enter your Transition ID" required/>
			
            <br>
            <input class="btn btn-success submit" type="submit" id="verify" name="verify" value="Verify">
          </form>
        </div>
      </div>
      <div class="course_details">
        <h2 class="text">Python + Django Course</h2>
        <hr class="hrr">
        <div class="input_field text-center">
        	<h3>Classes will Start 23 July 2018</h3>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<?php
}
else
{
    header("Location:../python.php");
}
?>