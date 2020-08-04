<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['login']))
{
	$email=$_POST['username'];
	$pass=md5($_POST['pwd']);
	$sql="select * from user_master where password='".$pass."' and email='".$email."'";
	$result=$conn->query($sql);
	$data3= $result->fetch_assoc();
	if($result->num_rows >0)
	{ 
	$student=$data3['first_name'];
	$student1=$data3['last_name'];
	$_SESSION["student"]="yes";
    $_SESSION["student1"]=$email;
	$_SESSION["firstname"]=$student;
	$_SESSION["lastname"]=$student1;
	header('location: home.php');
	}
	
	
	
	$sql1="select * from faculty_registeration where password='".$pass."' and email='".$email."'";
	$result1=$conn->query($sql1);
	if($result1->num_rows >0)
	{ 
	      $sql2="select * from faculty_registeration where email ='".$email."'";
			$result2= $conn -> query($sql2);
			$data1= $result2->fetch_assoc();
		
				if($data1["role"]=="Faculty")
					{
						$faculty=$data1['first_name'];
                      $_SESSION["faculty"]="yes";
					  $email=$data1['email'];
					  $_SESSION["email"]=$email;
					   $_SESSION["name"]=$faculty;
	                  header('location: faculty/faculty_home.php');
	}
	else if($data1["role"]=="Admin")
	{
		  $admin=$data1['first_name'];
		$_SESSION["admin"]="yes";
		  $_SESSION["name"]=$admin;
		 header('location: admin/admin_home.php');
	}
	else
	{
		echo "<script>alert('invalid')</script>";
		}
	}
	else
	{
		echo "<script>alert('Your password is incorect')</script>";
		}
	
}
	
	

$conn->close();
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login form</title>
<style type="text/css">
body,td,th {
	font-size: 16px;
}
</style>
</head>

<body>
 
 <?php include 'header.php';?>
 
 
 <div class="container">
                       
                        <!-- === BEGIN CONTENT === -->
                        <div class="container">
                            <div class="row margin-vert-30">
                                <!-- Login Box -->
                                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                    <form class="login-page" action="" method="post">
                                        <div class="login-header margin-bottom-30">
                                            <h2>Login to your account</h2>
                                        </div>
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input placeholder="Username" class="form-control" type="text" name="username">
                                        </div>
                                       
                                        <div class="input-group margin-bottom-20">
                                            <span class="input-group-addon">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                            <input placeholder="Password" class="form-control" type="password" name="pwd">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                               <a class="color-green" href="sign_up.php"><h4>Register your account</h4></a></p>
                                        <p>
                                            
                                            </div>
                                            <div class="col-md-6">
                                            <input type="submit" name="login" value="Login" class="btn btn-primary pull-right"/>
                                              
                                            </div>
                                        </div>
                                        <hr>
                                        <h4>Forgot Password</h4>
                                        <p>
                                            <a class="color-green" href="forgotpassword.php">Click here</a> to reset your password.</p>
                                    </form>
                                </div>
                                <!-- End Login Box -->
                            </div>
                        </div>
                        <!-- === END CONTENT === -->
                            </div>
                            
                        
<?php include 'footer.php';?>
                         
</body>
</html>