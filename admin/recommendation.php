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
$sql5="select MAX(recommendation_id) from recommendation";
									 $result6=$conn->query($sql5);
									$row=mysqli_fetch_row($result6);
									$ids=$row[0];
									
									 $sql6="select ref_no from recommendation where recommendation_id='$ids'";
									$result5= $conn -> query($sql6);
									$data5= $result5->fetch_assoc();
									$new=$data5["ref_no"];


if(isset($_POST['submit']))
{
	$reno=$_POST['refno'];
	$date=$_POST['dt'];
	$name=$_POST['nm'];
	$gndr=$_POST['gndr'];
	$gndrhs=$_POST['gndrhs'];
	$stream=$_POST['stream'];
	$snm=$_POST['fsn'];
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$fnm=$_POST['fnm'];		
	$dates=date_create($date);
	$maindate=date_format($dates,"d/m/Y");
	
	$sql2="select * from recommendation where ref_no='$reno'";
	$result=$conn->query($sql2);
	$data3= $result->fetch_assoc();
	if($result->num_rows >0)
	{ 
	 $renos=$data3['ref_no'];
			if($reno==$renos)
			 {
				 echo "<script>alert('Reference all ready exited')</script>";
			 }
	 
			 else
	 			{
				
	$sql="insert into recommendation(ref_no,date,student_id,gender,gender1,stream_id,stream_name,subject1,subject2,faculty_name) values('$reno','$maindate','$name','$gndr','$gndrhs','$stream','$snm','$sub1','$sub2','$fnm')";
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
				
	$sql="insert into recommendation(ref_no,date,student_id,gender,gender1,stream_id,stream_name,subject1,subject2,faculty_name) values('$reno','$maindate','$name','$gndr','$gndrhs','$stream','$snm','$sub1','$sub2','$fnm')";
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
<title>Recommendation Letter Form</title>
</head>

<body>
<?php include 'header1.php';?>

  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Recommendation Letter Form </h2>   
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
                            Please Enter Details Of Recommendation Letter. 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                               <div class="col-md-6">
                                   
                                    <form role="form" action="" method="post">
                                        <div class="form-group">
                                            <label>References Number:</label>
                                            <input type="text" name="refno" class="form-control" placeholder="Please Enter References Number" required="please input date" value="<?php echo $new; ?>"/>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" name="dt" class="form-control" required="please input date" />
                                            
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
                                            <label>Gender:</label>
                                            <select name="gndr" class="form-control">
                                                <option>he</option>
                                                <option>she</option>
                                                
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Select As Gender:</label>
                                            <select name="gndrhs" class="form-control">
                                                <option>his</option>
                                                <option>her</option>
                                                
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Stream:</label>
                                            <select name="stream" class="form-control" id="stream" required="required" >
                                                <option value="">Select Streem.......</option>
                                                  <?php
												  $servername2 = "localhost";
												  $username2 = "root";
												  $password2 = "";		
												  $dbname2 = "oas";																																						
												  $conn2 = new mysqli($servername, $username, $password, $dbname);

											   $query="select * from `stream`";
											   $result=$conn->query($query);
											   
											   while($clss=mysqli_fetch_row($result))
											   {
												   echo "<option value=".$clss[0].">".$clss[1]."</option>";
											   }
											   ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Full Stream Name:</label>
                                        	 <input type="text" name="fsn" class="form-control" placeholder="Please Enter Full Stream Name" required="please input date"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Enter Subjects:</label>
                                            <br>
                                            <div class="row">
                							<div class="col-md-6">
                                            <label>Subject1:</label>
                                            <input type="text" name="sub1" class="form-control" placeholder="Please Enter Subject1" required="please input date"/>
                                            </div>
                                            <div class="col-md-6">
                                            <label>Subject2:</label>
                                            <input type="text" name="sub2" class="form-control" placeholder="Please Enter Subject2" required="please input date"/>
                                            </div>
                                            
											
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Faculty Name:</label>
                                            <input type="text" name="fnm" class="form-control" placeholder="Please Enter Faculty Name" required="please input date"/>
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

      
<?php include 'footer1.php';?></body>
</html>
