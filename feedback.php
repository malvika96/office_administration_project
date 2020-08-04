

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
                                    <h2>Feedback Form</h2>
                                </div>
                                                              <br>
                                <!-- Contact Form -->
                                <form class="signup-page" action="" method="post">
                                <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oas";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
 {
   die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['submit']))
{
	$fnm=$_POST['fnm'];
	$lnm=$_POST['lnm'];
	$email=$_POST['email'];
	$feed=$_POST['feedback'];
	
	
	
	
	$sql="insert into feedback(first_name,last_name,email,feedback)values('$fnm','$lnm','$email','$feed')";
	  if($conn->query($sql)==TRUE)
	 {
		  echo "<script>alert('Recrod Inserted')</script>";
	  }
	  else
	  {
		   echo "Error: " . $sql . "<br>" . $conn->error;
		  }
$conn->close();
	
}
?>
                                    <label>First Name</label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input class="form-control" type="text" name="fnm" required="please input First name">
                                        </div>
                                    </div>
                                    <label>Last Name</label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input class="form-control" type="text" name="lnm" required="please input Last name">
                                        </div>
                                    </div>
                                    <label>Email
                                        <span class="color-red">*</span>
                                    </label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input class="form-control" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                        </div>
                                    </div>
                                                                        
                                    <label>Feedback</label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-8 col-md-offset-0">
                                            <textarea rows="8" name="feedback" class="form-control" required="please input Feedbacks"></textarea>
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