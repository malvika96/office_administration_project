<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
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
	$pass=$_POST['pwd'];
	
	$Id=$_GET['faculty_registeration_id'];
	
	$sql="update faculty_registeration set first_name='$fname',last_name='$lname',email='$email_no',role='$rolenm',password='$pass' where faculty_registeration_id='$Id'";
	   if($conn->query($sql)==TRUE)
	  {
		 header ("Location: viewfacultyreg.php");
 	}
	 else
	  {
		echo "invalid";
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
                                 <?php	
												$Id=$_GET['faculty_registeration_id'];
	$ret="select * from faculty_registeration where faculty_registeration_id=?";
		$stmt= $conn->prepare($ret) ;
	 $stmt->bind_param('i',$Id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
                                    <div class="signup-header">
                                        <h2>Register a new account</h2>
                                        <p>Already a member? Click
                                            <a href="#" class="color-green">HERE</a>to login to your account.</p>
                                    </div>
                                    <label>First Name</label>
                                    <input class="form-control margin-bottom-20" type="text" name="fnm" value="<?php echo $row->first_name;?>">
                                    
                                    <label>Last Name</label>
                                    <input class="form-control margin-bottom-20" type="text" name="lnm" value="<?php echo $row->last_name;?>">
                                   
                                    <label>Email Address
                                        <span class="color-red">*</span>
                                    </label>
                                    <input class="form-control margin-bottom-20" type="email" name="email" value="<?php echo $row->email;?>">
                                    
                                     <label>Role</label>
                                     <select  name="role" class="form-control margin-bottom-20">
                                     		<option><?php echo $row->role;?></option>
                                            <option>Admin</option>
                                            <option>Faculty</option>
                                     </select>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Password
                                                <span class="color-red">*</span>
                                            </label>
                                            <input class="form-control margin-bottom-20" type="password" name="pwd" value="<?php echo $row->password;?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Confirm Password
                                                <span class="color-red">*</span>
                                            </label>
                                            <input class="form-control margin-bottom-20" type="password">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <label class="checkbox">
                                                <input type="checkbox">I read the
                                                <a href="#">Terms and Conditions</a>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 text-right">
                                            
                                            <input type="submit" value="Register" name="submit" class="btn btn-primary">
                                        

                                        </div>
                                    </div>
                            <?php } ?>                             
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