<?php
if(!isset($_SESSION)) { session_start(); } 
$faculty=$_SESSION["name"];
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
	
	$de=$_POST['de'];
	$add=$_POST['add'];
	$qu=$_POST['qu'];

	$name=$_FILES['file']['name'];
	$type=$_FILES['file']['type'];
	$size=$_FILES['file']['size'];
	$tmp=$_FILES['file']['tmp_name'];
	$upload='../facultyphoto/'.$name;

 
 if(move_uploaded_file($tmp,$upload))
 {
	$sql="update faculty_registeration set designation='$de',address='$add',qualification ='$qu',photo='$name' where first_name='$faculty'";
	   if($conn->query($sql)==TRUE)
	  {
		  echo "<script>alert('Recrod Inserted')</script>";
 	    }
	 else
	  {
		echo "Error: " . $sql . "<br>" . $conn->error;
       }
 }
  else
  {
	  echo "<script>alert('invalid')</script>";
	  
	  }

 

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include 'header3.php';?>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Faculty Profile </h2>   
                        <h5>Welcome... &nbsp;&nbsp;<?php echo $faculty;?></h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-8">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please Enter Your data. 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                               <div class="col-md-6">
                                   
                                    <form role="form" action="" method="post" enctype="multipart/form-data">
                                    <?php
										 
											$faculty=$_SESSION["name"];
											 $sql2="select * from faculty_registeration where first_name='$faculty'";
											$result2= $conn -> query($sql2);
												$data1= $result2->fetch_assoc();
                                    
                                      ?>  
                                        
                                        <div class="form-group">
                                            <label>Designation:</label>
                                            <input type="text" name="de" class="form-control" value="<?php echo $data1["designation"];?>"/>
                                            
                                        </div>
                                       
                                        
                                       
                                        <div class="form-group">
                                            <label>Address:</label>
                                            <input type="text" name="add" class="form-control" value="<?php echo $data1["address"];?>" />
                                            
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Qualification:</label>
                                            <input type="text" name="qu" class="form-control" value="<?php echo $data1["qualification"];?>" />
                                            
                                        </div>
        								<div class="form-group">
                                            <label>Upload Photo:</label>
                                            <input type="file" name="file" class="form-control"  >
                                        </div>
                                                                       
                                        
                                         <input type="submit" value="SAVE" name="submit" class="btn btn-default">
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

 



<?php include 'footer3.php';?>
</body>
</html>