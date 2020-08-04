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
	$date=$_POST['dt'];
	$member=$_POST['memno'];
	$agenda=$_POST['ag'];
	$desc=$_POST['dp'];
	$conclusion=$_POST['cl'];
	$Id=$_GET['meeting_id'];
	$sql="update meeting set date='$date',members='$member',agenda='$agenda',description='$desc',conclusion='$conclusion' where meeting_id='$Id'";
	if($conn->query($sql)==TRUE)
	{
		header ("Location: viewmeeting.php");
	}
	else
	{
		echo "invalid";
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bonafied Form</title>
</head>

<body>
<?php include 'header1.php';?>

  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Meeting</h2>   
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
                            Please Enter meeting details. 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                               <div class="col-md-6">
                                   
                                    <form role="form" action="" method="post">
                                       <?php	
												$Id=$_GET['meeting_id'];
	$ret="select * from meeting where meeting_id=?";
		$stmt= $conn->prepare($ret) ;
	 $stmt->bind_param('i',$Id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
                                        
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" name="dt" class="form-control" value="<?php echo $row->date;?>" />
                                            
                                        </div>
                                         <div class="form-group">
                                            <label>No Of Members:</label>
                                            <input type="text" name="memno" class="form-control" value="<?php echo $row->members;?>" />
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Agenda:</label>
                                            <input type="text" name="ag" class="form-control" value="<?php echo $row->agenda;?>"/>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Description:</label>
                                           <textarea name="dp" class="form-control"><?php echo $row->description;?></textarea>
                                        </div>
                                        
                                       <div class="form-group">
                                            <label>Conclusion:</label>
                                           <textarea name="cl" class="form-control"><?php echo $row->conclusion;?></textarea>
                                        </div>
                                        
                                        
                                                                       
                                        
                                         <input type="submit" value="submit" name="submit" class="btn btn-default">
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

      
<?php include 'footer1.php';?></body>
</html>
