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
	$rolenm=$_POST['role'];	
	$pass=md5($_POST['pwd']);
	
	
	
	$sql="insert into faculty_registeration(first_name,last_name,email,role,password) values('$fname','$lname','$email_no','$rolenm','$pass')";
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
<title>Untitled Document</title>
</head>

<body>
<?php include 'header1.php';?>

 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>REGISTERATION FORM </h2>   
                        <h5>Welcome...</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-8">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                               <div class="col-md-6">
                                   
 
 								<form class="signup-page" action="" method="post">
                                    <div class="signup-header">
                                        <h2>Register a new account</h2>
                                        
                                    </div>
                                    <label>First Name</label>
                                    <input class="form-control margin-bottom-20" type="text" name="fnm" required="please input date">
                                    
                                    <label>Last Name</label>
                                    <input class="form-control margin-bottom-20" type="text" name="lnm" required="please input date">
                                   
                                    <label>Email Address
                                        <span class="color-red">*</span>
                                    </label>
                                    <input class="form-control margin-bottom-20" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="please input date" >
                                    
                                     <label>Role</label>
                                     <select  name="role" class="form-control margin-bottom-20">
                                     		<option>Select Type....</option>
                                            <option>Admin</option>
                                            <option>Faculty</option>
                                     </select>
                                   
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Password
                                                <span class="color-red">*</span>
                                            </label>
                                            <input class="form-control margin-bottom-20" type="password" name="pwd" required="please input date">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Confirm Password
                                                <span class="color-red">*</span>
                                            </label>
                                            <input class="form-control margin-bottom-20" type="password" required="please input date">
                                        </div>
                                    </div>
                                    <hr>
                                   
                                        <div class="col-lg-4 text-right">
                                            
                                            <input type="submit" value="Register" name="submit" class="btn btn-primary">
                                        

                                        </div>
                                    </div>
                                                         
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


<?php include 'footer1.php';?>
</body>
</html>