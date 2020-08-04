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
$sql5="select MAX(bono_id) from bonafied";
									 $result6=$conn->query($sql5);
									$row=mysqli_fetch_row($result6);
									$ids=$row[0];
									
									 $sql6="select re_no from bonafied where bono_id='$ids'";
									$result5= $conn -> query($sql6);
									$data5= $result5->fetch_assoc();
									$new=$data5["re_no"];

if(isset($_POST['submit']))
{
	$reno=$_POST['refno'];
	$date=$_POST['dt'];
	$name=$_POST['nm'];
	$gndrhs=$_POST['gndrhs'];
	$stream=$_POST['stream'];
	$class=$_POST['class'];
	$rno=$_POST['rno'];
	$ay=$_POST['ay'];
	$pob=$_POST['pob'];
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
				$sql="insert into bonafied(re_no,date,student_id,gender1,stream_id,class_id,roll_no,academic_year,bonafied_purpose_id) 					                values('$reno','$maindate','$name','$gndrhs','$stream','$class','$rno','$ay','$pob')";
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
		 	$sql="insert into bonafied(re_no,date,student_id,gender1,stream_id,class_id,roll_no,academic_year,bonafied_purpose_id) 					                values('$reno','$maindate','$name','$gndrhs','$stream','$class','$rno','$ay','$pob')";
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
<title>Bonafied Form</title>
</head>

<body>
<?php include 'header1.php';?>

  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Bonafied  Forms </h2>   
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
                                   
                                    <form role="form" action="" method="post">
                                   
                                        <div class="form-group">
                                         
                                            <label>References Number:</label>
                                            <input type="text" name="refno" class="form-control"  required="please input valid References Number" value="<?php echo $new; ?>" />
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="date" name="dt" class="form-control" required="please input date"/>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Student Name:</label>
                                            <select name="nm" class="form-control" id="streem" required="required">
                                                <option value="">Select Student....</option>
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
                                            <label>Select As Gender:</label>
                                            <select name="gndrhs" class="form-control" required="please select Gemder">
                                            	 <option>Select Gender</option>	
                                                <option>his</option>
                                                <option>her</option>
                                                
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Stream:</label>
                                            <select name="stream" class="form-control" id="stream" onChange="change_country()" required="required" >
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
                                            <label>Class:</label>
                                            <select name="class" class="form-control" id="class" required="please select Class">
                                            	
                                                <option>Select Class.......</option>
                                               
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Roll Number:</label>
                                            <input type="text" name="rno" class="form-control" required="please input rollnumber"/>
                                            
                                        </div>
                                        
                                         <div class="form-group">
                                           <label>Academic Year:</label>
                                            <input type="text" name="ay" class="form-control" pattern="[0-9]{4}-[0-9]{4}" required="please input year" />
                                            
                                        </div>
        								<div class="form-group">
                                            <label>Purpose Of Bonafied:</label>
                                            <select name="pob" class="form-control" id="pob" >
                                                <option>Select Purpose.......</option>
                                                  <?php
												  $servername3 = "localhost";
												  $username3 = "root";
												  $password3 = "";		
												  $dbname3 = "oas";																																						
												  $conn3 = new mysqli($servername, $username, $password, $dbname);

											   $query="select * from `bonafied_purpose`";
											   $result=$conn->query($query);
											   
											   while($clss=mysqli_fetch_row($result))
											   {
												   echo "<option value=".$clss[0].">".$clss[1]."</option>";
											   }
											   ?>
                                            </select>
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
