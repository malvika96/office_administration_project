<?php
if(!isset($_SESSION)) { session_start(); } 
$faculty=$_SESSION["name"];

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
		
			$sql1="select * from faculty_registeration where email='$email'";
			$result1= $conn -> query($sql1);
			$data1= $result1->fetch_assoc();
			$pass=$data1['email'];
		if ($result1->num_rows > 0) 
	{
			$sql2="update faculty_registeration set password='$npassword' where email='$pass'";
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
<title>Bonafied Form</title>
</head>

<body>
<?php include 'header3.php';?>

  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Change Password </h2>   
                        <h5>Welcome...&nbsp;&nbsp;<?php echo $faculty;?></h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-8">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Reset your password.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                               <div class="col-md-6">
                                   
                                    <form role="form" action="" method="post">
                                    <?php
									$email=$_SESSION["email"];
									?>
                                    <div class="form-group">
                                            <label>Email:</label>
                                            <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" disabled="true" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Old Password:</label>
                                            <input type="password" name="old" class="form-control" />
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>New Password:</label>
                                            <input type="password" name="new" class="form-control" />
                                            
                                        </div>                                        
                                                                             
                                       
                                         <div class="form-group">
                                            <label>Confirm Password:</label>
                                            <input type="password" name="cp" class="form-control" />
                                            
                                        </div>
        								                        
                                        
                                         <input type="submit" value="SUBMIT" name="submit" class="btn btn-default">
                                        <input type="reset" value="RESET" class="btn btn-primary">

                                    </form>
								</div>
            
                                
                               
                                   
                                   
                            
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                
                
               
   
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->

      
<?php include 'footer3.php';?></body>
</html>
