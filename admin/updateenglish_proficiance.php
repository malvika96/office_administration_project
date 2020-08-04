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
	$reno=$_POST['refno'];
	$date=$_POST['dt'];
	$snm=$_POST['fsn'];
	$std=$_POST['std'];
	$end=$_POST['end'];
	$Id=$_GET['eng_proficiency_id'];
	$dates=date_create($date);
	$maindate=date_format($dates,"d/m/Y");
		
	
	
	$sql="update eng_proficiency set ref_no='$reno',date='$maindate',stream_name='$snm',start_year='$std',end_year='$end' where eng_proficiency_id='$Id'";
	   if($conn->query($sql)==TRUE)
	  {
		 header ("Location: viewenglishproficiance.php");
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
                     <h2>English Proficience Forms </h2>   
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
                            Please Enter Details Of English Proficience. 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                               <div class="col-md-6">
                                   
                                    <form role="form" action="" method="post">
                                     <?php	
												$Id=$_GET['eng_proficiency_id'];
	$ret="select a.eng_proficiency_id,b.name,a.ref_no,a.date,a.stream_name,a.start_year,a.end_year from eng_proficiency a,student_detail b  where a.eng_proficiency_id=? and a.student_id=b.student_id";
		$stmt= $conn->prepare($ret) ;
	 $stmt->bind_param('i',$Id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
                                        <div class="form-group">
                                            <label>References Number:</label>
                                            <input type="text" name="refno" class="form-control"  value="<?php echo $row->ref_no;?>"/>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" name="dt" class="form-control" value="<?php echo $row->date;?>" />
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Full Stream Name:</label>
                                        	 <input type="text" name="fsn" class="form-control" value="<?php echo $row->stream_name;?>"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Student Name:</label>
                                            <label class="form-control"><?php echo $row->name;?></label>
                                            
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>Starting Date:</label>
                                            <input type="text" name="std" class="form-control" value="<?php echo $row->start_year;?>" />
                                            
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Ending Date:</label>
                                            <input type="text" name="end" class="form-control" value="<?php echo $row->end_year;?>"/>
                                            
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