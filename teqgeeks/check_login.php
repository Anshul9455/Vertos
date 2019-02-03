<?php
session_start();
$_SESSION['error'] = "";
$_SESSION['success'] = "";

if(isset($_POST['email']))
{
  $err="";
  $con = mysqli_connect("localhost", "", "", "student");
  if($con -> connect_error)
  {
	   $err = "success in database".$con->connect_error;
		$_SESSION['error'] = "Database error";
  } 
	else{ $err = "Erro in database"; }

    $email = $_POST['email'];
    $email = trim($email);
    $password = $_POST['password']; 
    $password = trim($password);
    
	$_SESSION['email'] = $_POST['email'];
	
    if($email=='')
    {
      $_SESSION['error'] = "Email cannot empty";
      header("Location: login.php");
    }
    else if($password=='')
    {
      $_SESSION['success'] = "Password cannot be empty";
      header("Location: index.php"); 
    }
    else
    {
      $sql="select * from student where email = '$email' and password = '$password'";
      $res = $con -> query($sql);
		$num = $res -> num_rows;
      if($res -> num_rows > 0)
      {
        $_SESSION['success'] = "User found";
        header("Location:student/dashboard.php"); 
      }
      else
      {
          $_SESSION['error'] = "Something went wrong";
          header("Location: python.php"); 
      }
    }
  }
?>