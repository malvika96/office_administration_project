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
	
	$tc=$_POST['tcno'];
	$gndrms=$_POST['gms'];
	$gndr=$_POST['gndr'];
	$gndrhs=$_POST['gndrhs'];
	$enrollment=$_POST['enroll'];
	$enrolldt=$_POST['edate'];
	$dates=date_create($enrolldt);
	$edate=date_format($dates,"d/m/Y");

	
	$stream=$_POST['stream'];
	$class=$_POST['class'];
	$due_5_dt=$_POST['dtc'];
	$due_6_dt=$_POST['dtcc'];
	$sem=$_POST['sem'];
	$pass_year=$_POST['passdt'];
	$seatno=$_POST['seatno'];
	$dob=$_POST['dob'];
	$dates=date_create($dob);
	$dateofbirth=date_format($dates,"d/m/Y");

	
	$pd=$_POST['pd'];
	$dates=date_create($pd);
	$prdate=date_format($dates,"d/m/Y");
	
	$dept=$_POST['dept'];
		
	$ids=$_GET['transferrence_id'];
	
	$sql="update transferrence set tc_no='$tc',gndrms='$gndrms',gender='$gndr',gender1='$gndrhs',enrollment='$enrollment',enroll_date='$edate',stream_id='$stream',class_id='$class',semfive='$due_5_dt',semsix='$due_6_dt',semester_id='$sem',passed_year='$pass_year',seat_no='$seatno',dob='$dateofbirth',print_date='$prdate',department_id='$dept' where transferrence_id='$ids'";
	   if($conn->query($sql)==TRUE)
	  {
		 header ("Location: viewtransferrence.php");
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
												$Id=$_GET['transferrence_id'];
	$ret="select a.transferrence_id,b.name,a.gndrms,a.gender,a.gender1,a.tc_no,a.enrollment,a.enroll_date,s.stream,c.class,a.semfive,a.semsix,d.semester,a.passed_year,a.seat_no,a.dob,a.print_date,e.dept  from transferrence a,student_detail b,stream s,type_of_class c,semester_details d,vnsgu_department e where a.stream_id=s.stream_id and a.class_id=c.class_id and a.student_id=b.student_id and a.semester_id=d.semester_id and a.department_id=e.department_id and transferrence_id=?";
		$stmt= $conn->prepare($ret) ;
	 $stmt->bind_param('i',$Id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
                                    
                                     <div class="row">
                   						 <div class="col-md-6">     
 										 <div class="form-group">
                                            <label>TC.NO:</label>
                                            <input type="text" name="tcno" class="form-control" value="<?php echo $row->tc_no;?>"/>
                                            
                                        </div>
                                        </div>
                                      </div>
                                        <div class="row">
                                        <div class="col-md-8">
                                             <div class="form-group">
                                            <label>Name:</label>
                                            <label class="form-control"><?php echo $row->name;?></label>
                                            
                                        </div>
                                       </div> 
                                       </div>
                                       
                                       <div class="row">
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Mr/Miss:</label>
                                            <select name="gms" class="form-control">
                                            <option><?php echo $row->gndrms;?></option>
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
                                            <option><?php echo $row->gender;?></option>
                                                <option>he</option>
                                                <option>she</option>
                                                
                                               
                                            </select>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select As Gender:</label>
                                            <select name="gndrhs" class="form-control">
                                            <option><?php echo $row->gender1;?></option>
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
                                            <input type="text" name="enroll" class="form-control" value="<?php echo $row->enrollment;?>"/>
                                            
                                        </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Enroll_Date:</label>
                                            <input type="date" name="edate" class="form-control"value="<?php echo $row->enroll_date;?>" >
                                        </div>
                                        </div>
                                        </div>
                                        
                                        <div class="row">
                                        <div class="col-md-6">
										<div class="form-group">
                                            <label>Stream:</label>
                                            <select name="stream" class="form-control" id="stream" onChange="change_country()" required="required" >												 												<option value=""><?php echo $row->stream;?></option>
                                                
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
                                            <select name="class" class="form-control" id="class" onChange="change_sem()" required="required">
                                            	<option value=""><?php echo $row->class;?></option>
                                                
                                               
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Semester:</label>
                                            <select name="sem" class="form-control" id="semester" required="required" >
                                                 <option value=""><?php echo $row->semester;?></option>
                                                
                                               
                                               
                                            </select>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Duration OF TY BCA 5th SEM:</label>
                                            <input type="text" name="dtc" class="form-control" value="<?php echo $row->semfive;?>" />
                                            
                                        </div>
                                        </div>
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Duration OF TY BCA 6th SEM:</label>
                                            <input type="text" name="dtcc" class="form-control" value="<?php echo $row->semsix;?>" />
                                            
                                        </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Passed Year Of TY BCA:</label>
                                            <input type="text" name="passdt" class="form-control" value="<?php echo $row->passed_year;?>" />
                                            
                                        </div>
                                        </div>
                                         <div class="col-md-6">
                                         <div class="form-group">
                                            <label>Seat No:</label>
                                            <input type="text" name="seatno" class="form-control"value="<?php echo $row->seat_no;?>" />
                                            
                                        </div>
                                        </div>
                                        </div>
                                         <div class="form-group">
                                            <label>Date Of Birth:</label>
                                            <input type="date" name="dob" class="form-control" value="<?php echo $row->dob;?>" />
                                                 
                                        </div>
                                       <div class="form-group">
                                            <label>Print Date:</label>
                                            <input type="date" name="pd" class="form-control" value="<?php echo $row->print_date;?>" />
                                                 
                                        </div>
                                        <div class="form-group">
                                            <label>Clg_Department:</label>
                                            <select name="dept" class="form-control" required="required" >
                                            	 <option value=""><?php echo $row->dept; ?></option>
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