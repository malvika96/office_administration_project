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
$sql5="select MAX(transferrence_id) from transferrence";
									 $result6=$conn->query($sql5);
									$row=mysqli_fetch_row($result6);
									$ids=$row[0];
									
									 $sql6="select tc_no from transferrence where transferrence_id='$ids'";
									$result5= $conn -> query($sql6);
									$data5= $result5->fetch_assoc();
									$new=$data5["tc_no"];
if(isset($_POST['submit']))
{
	$reno=$_POST['tcno'];
	$name=$_POST['nm'];
	$gndrms=$_POST['gms'];
	$gndr=$_POST['gndr'];
	$gndrhs=$_POST['gndrhs'];
	$enrollment=$_POST['enroll'];
	$enrolldt=$_POST['edate'];
	$stream=$_POST['stream'];
	$class=$_POST['class'];
	$due_5_dt=$_POST['dtc'];
	$due_6_dt=$_POST['dtcc'];
	$sem=$_POST['sem'];
	$pass_year=$_POST['passdt'];
	$seatno=$_POST['seatno'];
	$dob=$_POST['dob'];
	$pd=$_POST['pd'];
	$dept=$_POST['dept'];
	$dates=date_create($enrolldt);
	$maindate=date_format($dates,"d/m/Y");
	$dates=date_create($dob);
	$dobm=date_format($dates,"d/m/Y");
	$dates=date_create($pd);
	$pdm=date_format($dates,"d/m/Y");
	
		$sql2="select * from transferrence where tc_no='$reno'";
	$result=$conn->query($sql2);
	$data3= $result->fetch_assoc();
	if($result->num_rows >0)
	{ 
	 $renos=$data3['tc_no'];
			if($reno==$renos)
			 {
				 echo "<script>alert('Reference all ready exited')</script>";
			 }
	 
			 else
	 			{
					$sql="insert into transferrence(tc_no,student_id,gndrms,gender,gender1,enrollment,enroll_date,stream_id,class_id,semfive,semsix,semester_id,passed_year,seat_no,dob,print_date,department_id) values('$reno','$name','$gndrms','$gndr','$gndrhs','$enrollment','$maindate','$stream','$class','$due_5_dt','$due_6_dt','$sem','$pass_year','$seatno','$dobm','$pdm','$dept')";
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
	
	
	$sql="insert into transferrence(tc_no,student_id,gndrms,gender,gender1,enrollment,enroll_date,stream_id,class_id,semfive,semsix,semester_id,passed_year,seat_no,dob,print_date,department_id) values('$reno','$name','$gndrms','$gndr','$gndrhs','$enrollment','$maindate','$stream','$class','$due_5_dt','$due_6_dt','$sem','$pass_year','$seatno','$dobm','$pdm','$dept')";
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
<title>Transeferrence form</title>
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
                                    
                                     <div class="row">
                   						 <div class="col-md-6">     
 										 <div class="form-group">
                                            <label>TC.NO:</label>
                                            <input type="text" name="tcno" class="form-control" placeholder="Please Enter TC Number" value="<?php echo $new; ?>"/>
                                            
                                        </div>
                                        </div>
                                      </div>
                                        <div class="row">
                                        <div class="col-md-8">
                                             <div class="form-group">
                                            <label>Name:</label>
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
                                       </div> 
                                       </div>
                                       <div class="row">
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Mr/Miss:</label>
                                            <select name="gms" class="form-control">
                                                <option>Mr</option>
                                                <option>Miss</option>
                                                <option>Mrs</option>
                                                
                                               
                                            </select>
                                        </div>
                                        </div>
                                        </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Gender:</label>
                                            <select name="gndr" class="form-control">
                                                <option>he</option>
                                                <option>she</option>
                                                
                                               
                                            </select>
                                        </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select As Gender:</label>
                                            <select name="gndrhs" class="form-control">
                                                <option>his</option>
                                                <option>her</option>
                                                
                                               
                                            </select>
                                        </div>
                                        </div>
                                        </div>
                                        
                                        
                                       <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Enrollment:</label>
                                            <input type="text" name="enroll" class="form-control" placeholder="Please Enter ENROLL Number"/>
                                            
                                        </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Enroll_Date:</label>
                                            <input type="date" name="edate" class="form-control" >
                                        </div>
                                        </div>
                                        </div>
                                        
                                        <div class="row">
                                        <div class="col-md-6">
										<div class="form-group">
                                            <label>Stream:</label>
                                            <select name="stream" class="form-control" id="stream" onChange="change_country()" required="required">
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
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Class:</label>
                                            <select name="class" class="form-control" id="class" onChange="change_sem()">
                                                <option>Select Class.......</option>
                                               
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Semester:</label>
                                            <select name="sem" class="form-control" id="semester" >
                                                 <option>Select Semester.......</option>
                                               
                                               
                                            </select>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Duration OF TY BCA 5th SEM:</label>
                                            <input type="text" name="dtc" class="form-control" placeholder="Please Enter Date" />
                                            
                                        </div>
                                        </div>
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Duration OF TY BCA 6th SEM:</label>
                                            <input type="text" name="dtcc" class="form-control" placeholder="Please Enter Date" />
                                            
                                        </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Passed Year Of TY BCA:</label>
                                            <input type="text" name="passdt" class="form-control" placeholder="Please Enter Date" />
                                            
                                        </div>
                                        </div>
                                         <div class="col-md-6">
                                         <div class="form-group">
                                            <label>Seat No:</label>
                                            <input type="text" name="seatno" class="form-control" placeholder="Please Enter Seat No" />
                                            
                                        </div>
                                        </div>
                                        </div>
                                         <div class="form-group">
                                            <label>Date Of Birth:</label>
                                            <input type="date" name="dob" class="form-control" />
                                                 
                                        </div>
                                       <div class="form-group">
                                            <label>Print Date:</label>
                                            <input type="date" name="pd" class="form-control" />
                                                 
                                        </div>
                                        <div class="form-group">
                                            <label>Clg_Department:</label>
                                            <select name="dept" class="form-control">
                                                 <option>Select VNSGU Department.... </option>
                                                 <?php
												  $servername3 = "localhost";
												  $username3 = "root";
												  $password3 = "";		
												  $dbname3 = "oas";																																						
												  $conn3 = new mysqli($servername, $username, $password, $dbname);

											   $query="select * from `vnsgu_department`";
											   $result=$conn->query($query);
											   
											   while($clss=mysqli_fetch_row($result))
											   {
												   echo "<option value=".$clss[0].">".$clss[1]."</option>";
											   }
											   ?>
                                            </select>
                                            
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
<script type="text/javascript">
function change_country()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","dropdownclass.php?stream_id="+document.getElementById("stream").value,false);
	xmlhttp.send(null);
	document.getElementById("class").innerHTML=xmlhttp.responseText;
	
	
}
function change_sem()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","dropdownsem.php?class_id="+document.getElementById("class").value,false);
	xmlhttp.send(null);
	document.getElementById("semester").innerHTML=xmlhttp.responseText;
	
	
}

</script>
