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
	
	$bona=$_POST['bonap'];
	$Id=$_GET['bonafied_purpose_id'];
	
	$sql="update bonafied_purpose set purpose_of_bonafied='$bona' where bonafied_purpose_id='$Id'";
	   if($conn->query($sql)==TRUE)
	  {
		 header ("Location: viewbonafiedpurpose.php");
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
                     <h2>Bonafied Purpose </h2>   
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
                                   
                                    <form role="form" action="" method="post">
                                     <?php	
												$Id=$_GET['bonafied_purpose_id'];
	$ret="select * from bonafied_purpose where bonafied_purpose_id=?";
		$stmt= $conn->prepare($ret) ;
	 $stmt->bind_param('i',$Id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label>Bonafied Purpose:</label>
                                            <input type="text" name="bonap" class="form-control" value="<?php echo $row->purpose_of_bonafied;?>" />
                                            
                                        </div>
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