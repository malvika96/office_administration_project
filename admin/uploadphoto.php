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

	$name=$_FILES['file']['name'];
	$type=$_FILES['file']['type'];
	$size=$_FILES['file']['size'];
	$tmp=$_FILES['file']['tmp_name'];
	$upload='photo/'.$name;
	
 
 if(move_uploaded_file($tmp,$upload))
 {
 $sql="INSERT INTO gallery(photo) VALUES('$name')";

			if($conn->query($sql) === TRUE)
				{
					
				$msg= "file upload sucessfully";
				    		   
				}
				else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
		
 }
	else
	{
		$msg="please chose your file for Upload";
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
<?php include 'header1.php';?>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Gallery </h2>   
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
                            Please Enter Purpose Of Bonafied. 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                               <div class="col-md-6">
                                   
                                    <form role="form" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>References Number:</label>
                                            <input type="file" name="file" class="form-control" />
                                            
                                        </div>
                                        
        
                                        
                                                                       
                                        
                                         <input type="submit" value="Upload" name="submit" class="btn btn-default">
                                        <input type="reset" value="RESET" class="btn btn-primary">

  <div class="form-group">
  <?php
  if(isset($_POST['submit']))
{
	?>
  <label><?php echo $msg ;?></label>
  <?php } else
  {
  ?>
  <label></label>
  <?php } ?>
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