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
	
	$fname=$_POST['fnm'];
	$lname=$_POST['lnm'];
	
	$email_no=$_POST['email'];
	$pass= $_POST['pwd'];
	$pass1=md5($pass);
	
	
	
	$sql="insert into user_master(first_name,last_name,email,password) values('$fname','$lname','$email_no','$pass1')";
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>signup form</title>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css">
</head>

<body>
 
 <?php include 'header.php';?>
 
 
 <div class="container">


                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <!-- Register Box -->
                            <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                <form class="signup-page" action="" method="post" enctype="multipart/form-data">
                                    <div class="signup-header">
                                        <h2>Register a new account</h2>
                                        <p>Already a member? Click
                                            <a href="login.php" class="color-green">HERE</a> to login to your account.</p>
                                    </div>
                                    <label>First Name</label>
                                    <input class="form-control margin-bottom-20" type="text" name="fnm" required="please input date">
                                    
                                    <label>Last Name</label>
                                    <input class="form-control margin-bottom-20" type="text" name="lnm" required="please input date">
   
                                   
                                    <label>Email Address
                                        <span class="color-red">*</span>
                                    </label>
                                    <input class="form-control margin-bottom-20" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="please input date">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Password
                                                <span class="color-red">*</span>
                                            </label>
                                          <input class="form-control margin-bottom-20" type="password" name="pwd" id="pass" required="please input date">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Confirm Password
                                                <span class="color-red">*</span>
                                            </label>
                                          <span id="spryconfirm1">
                                            <input class="form-control margin-bottom-20" type="password" required="please input data" >
                                            <span class="confirmRequiredMsg">A value is required.</span>
                                          <span class="confirmInvalidMsg">Password don't match.</span></span></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            
                                        </div>
                                        <div class="col-lg-4 text-right">
                                            
                                            <input type="submit" value="Register" name="submit" class="btn btn-primary">
                                        

                                        </div>
                                    </div>
                                                         
                        </form>
                                <!-- End Contact Form -->
                                <!-- End Main Content -->
                            </div>
                            <!-- End Main Column -->
                            <!-- Side Column -->
                          </div>
                          
                           <div class="clearfix"></div>
                        </div>
                        
                         </div>
          </div>
                          
<?php include 'footer.php';?>
<script type="text/javascript">
var spryconfirm = new Spry.Widget.ValidationConfirm("spryconfirm1","pass");
</script>
                         
</body>
</html>