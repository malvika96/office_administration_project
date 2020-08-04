<?php

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
if(isset($_POST['submit']))
{
	$cpassword=$_POST['old'];
	$npassword=$_POST['new'];
	$email=$_POST['email'];
		
			$sql1="select * from user_master where email='$email'";
			$result1= $conn -> query($sql1);
			$data1= $result1->fetch_assoc();
			$pass=$data1['email'];
		if ($result1->num_rows > 0) 
	{
			$sql2="update user_master set password='$npassword' where email='$pass'";
			$result2= $conn -> query($sql2);
		if ($conn->query($sql2) == TRUE) 
	{
		echo "<script>alert('Your Password sucessfully changed')</script>";
			
	}
	else
	
	{
		echo "<script>alert('Error for change password')</script>";
		}
	
	} 
	else
	{
	 	echo "<script>alert('Username or Password is invalid');</script>";
	}

$conn->close();
	

}
	

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contacts Form</title>
</head>

<body>
 
 <?php include 'header.php';?>
 
 
 <div class="container">
                       
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <!-- Main Column -->
                            <div class="col-md-9">
                                <!-- Main Content -->
                                <div class="headline">
                                    <h2>Change Password</h2>
                                </div>
                               
                                <br>
                                <!-- Contact Form -->
                                <form class="signup-page" action="" method="post">
                                <?php
                               $emails=$_SESSION["student1"]; 
                                ?>
								<label>Email
                                        <span class="color-red">*</span>
                                    </label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input type="email"  name="email" class="form-control" value="<?php echo $emails; ?>" disabled="true" />
                                        </div>
                                    </div>
                                    <label>Old Password</label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input class="form-control" type="password" name="old">
                                        </div>
                                    </div>
                                    <label>New Password</label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input class="form-control" type="password" name="new" >
                                        </div>
                                    </div>
                                    <label>Confirm Password</label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input class="form-control" type="password" >
                                        </div>
                                    </div>
                                    
                                                                        
                                  
                                    <p>
                                        <input type="submit" value="submit" name="submit" class="btn btn-primary">
                                    </p>
                                </form>
                                </div>
                            <!-- End Main Column -->
                            
                            <!-- End Side Column -->
                        
                        <!-- Side Column -->
                            <div class="col-md-3">
                                <!-- Recent Posts -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Contact Info</h3>
                                    </div>
                                    <div class="panel-body">
                                        <p>Takshashilaa College at VADODARA is founded by Takshashilaa Vidyapith Sansthan with a dream to cater the need of higher education in the city of VADODARA.</p>
                                        <ul class="list-unstyled">
                                            <li>
                                                <i class="fa-phone color-primary"></i>+9016298339</li>
                                            <li>
                                                <i class="fa-envelope color-primary"></i>takshashilaacollege.com</li>
                                            <li>
                                                <i class="fa-home color-primary"></i>http://www.VNSGU.ac.in</li>
                                        </ul>
                                        <ul class="list-unstyled">
                                            <li>
                                                <strong class="color-primary">Monday-Friday:</strong>8:00am to 2:30pm</li>
                                            <li>
                                                <strong class="color-primary">Saturday:</strong>8:00am to 12:00pm</li>
                                            <li>
                                                <strong class="color-primary">Sunday:</strong>Closed</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End recent Posts -->
                                <!-- About -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">About</h3>
                                    </div>
                                    <div class="panel-body">
                                        Takshashilaa College has been set up a college of higher education in I.T. and Business Administration, working towards imparting and excellent training in Information Technology and Business Administration, and aims to become a premier college in affiliated colleges of VEER NARMAD SOUTH GUJARAT UNIVERSITY, SURAT.
                                    </div>
                                </div>
                                <!-- End About -->
                            </div>
                            <!-- End Side Column -->
                      </div>
                      </div>
                      
                      
<?php include 'footer.php';?>
                         
</body>
</html>