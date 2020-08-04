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
$sql5="select MAX(eng_proficiency_id) from eng_proficiency";
									 $result6=$conn->query($sql5);
									$row=mysqli_fetch_row($result6);
									$ids=$row[0];
									
									 $sql6="select ref_no from eng_proficiency where eng_proficiency_id='$ids'";
									$result5= $conn -> query($sql6);
									$data5= $result5->fetch_assoc();
									$new=$data5["ref_no"];
if(isset($_POST['submit']))
{
	$reno=$_POST['refno'];
	$date=$_POST['dt'];
	$snm=$_POST['fsn'];
	$name=$_POST['nm'];
	$std=$_POST['std'];
	$end=$_POST['end'];
	$dates=date_create($date);
	$maindate=date_format($dates,"d/m/Y");
	
	$sql2="select * from bonafied where re_no='$reno'";
	$result=$conn->query($sql2);
	$data3= $result->fetch_assoc();
	if($result->num_rows >0)
	{ 
	 $renos=$data3['re_no'];
			if($reno==$renos)
			 {
				 echo "<script>alert('Reference all ready exited')</script>";
			 }
	 
			 else
	 			{
	
					$sql="insert into eng_proficiency(ref_no,date,stream_name,student_id,start_year,end_year) 													values('$reno','$maindate','$snm','$name','$std','$end')";
	   if($conn->query($sql)==TRUE)
	  {
		  echo "<script>alert('Recrod Inserted')</script>";
 	  }
	 else
	  {
		echo "Error: " . $sql . "<br>" . $conn->error;
 	 }
  
	 }
	}
    
	 else
	 {
		 $sql="insert into eng_proficiency(ref_no,date,stream_name,student_id,start_year,end_year) values('$reno','$maindate','$snm','$name','$std','$end')";
	   if($conn->query($sql)==TRUE)
	  {
		  echo "<script>alert('Recrod Inserted')</script>";
 	}
	 else
	  {
		echo "Error: " . $sql . "<br>" . $conn->error;
  }
	 }
	
$conn->close();
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>English Proficience Form</title>
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
                                        <div class="form-group">
                                            <label>References Number:</label>
                                            <input type="text" name="refno" class="form-control" placeholder="Please Enter References Number" value="<?php echo $new; ?>"  />
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" name="dt" class="form-control" required="please input date" />
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Full Stream Name:</label>
                                        	 <input type="text" name="fsn" class="form-control" placeholder="Please Enter Full Stream Name" required="please input date"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Student Name:</label>
                                            <select name="nm" class="form-control" required="required">
                                                <option value="">Select Student Name...</option>
                                                 <?php
												  $servername1 = "localhost";
												  $username1 = "root";
												  $password1 = "";		
												  $dbname1 = "oas";																																						
												  $conn1 = new mysqli($servername, $username, $password, $dbname);

											   $query="select * from `student_detail`";
											   $result=$conn->query($query);
											   
											   while($clss=mysqli_fetch_row($result))
											   {
												   echo "<option value=".$clss[0].">".$clss[1]."</option>";
											   }
											   ?>
                                               
                                            </select>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>Starting Date:</label>
                                            <input type="text" name="std" class="form-control" required="please input date" pattern="[0-9]{4}"/>
                                            
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Ending Date:</label>
                                            <input type="text" name="end" class="form-control" required="please input date" pattern="[0-9]{4}" />
                                            
                                        </div>
        								
                                                                       
                                        
                                         <input type="submit" value="submit" name="submit" class="btn btn-default">
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

      
<?php include 'footer1.php';?></body>
</body>
</html>
