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
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mob'];
	
		
	$ids=$_GET['student_request_id'];
	
	$sql="update student_request set name='$name',email='$email',ph_no='$mobile' where student_request_id='$ids'";
	   if($conn->query($sql)==TRUE)
	  {
		 header ("Location: viewstudentrequest.php");
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
                     <h2>Transeferrence Form</h2>   
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
                               <div class="col-md-8">
                                   
                                    <form role="form" action="" method="post">
                                    <?php	
												$Id=$_GET['student_request_id'];
	$ret="select * from student_request where student_request_id=?";
		$stmt= $conn->prepare($ret) ;
	 $stmt->bind_param('i',$Id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
                                    
                                     
                   						 <div class="col-md-8">     
 										 <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" name="name" class="form-control" value="<?php echo $row->name;?>"/>
                                            
                                        </div>
                                        </div>
                                         
                                        <div class="col-md-8">
                                             <div class="form-group">
                                             <label>Email:</label>
                                            <input type="email" name="email" class="form-control" value="<?php echo $row->email;?>"/>
                                            
                                        </div>
                                       </div> 
                                    
                                       
                                        
                                        
                                       
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Mobile No:</label>
                                            <input type="text" name="mob" class="form-control" value="<?php echo $row->ph_no;?>"/>
                                            
                                        </div>
                                        </div>
                                        
                                        
                                      
                                        
                                        
                                        <div class="col-md-6">
										<div class="form-group">
                                            <label>Form:</label>
                                            <label class="form-control"><?php echo $row->forms;?></label>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Remark:</label>
                                            <label class="form-control"><?php echo $row->remarks;?></label>
                                        </div>
                                        
                                        
                                        
                                        
                                         <input type="submit" value="UPDATE" name="submit" class="btn btn-default">
                                        <input type="reset" value="RESET" class="btn btn-primary">
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