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
	$name=$_POST['nm'];
	$address=$_POST['add'];
	$city=$_POST['city'];
	$pin=$_POST['pin'];
	$mobile=$_POST['phno'];
	$email=$_POST['email'];	
	$dob=$_POST['dob'];
	$str=$_POST['stream'];
	$class=$_POST['class'];
	
	$Id=$_GET['student_id'];
	$sql="update student_detail set name='$name',address='$address',city='$city',pin='$pin',mobile='$mobile',email='$email',dob='$dob',stream_id='$str',class_id='$class' where student_id='$Id'";
	if($conn->query($sql)==TRUE)
	{
		header ("Location: view_studentdetails.php");
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
<title>Untitled Document</title>
</head>

<body>
<?php include 'header1.php';?>

  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-14">
                     <h2>Student Details </h2>   
                        <h5>Welcome...</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-8">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">
                                   
                                    <form action="" method="post">
                                     <?php	
												$Id=$_GET['student_id'];
	$ret="select a.student_id,a.name,a.address,a.city,a.pin,a.mobile,a.email,a.dob,s.stream,c.class from student_detail a,stream s,type_of_class c where a.stream_id=s.stream_id and a.class_id=c.class_id and student_id=?";
		$stmt= $conn->prepare($ret) ;
	 $stmt->bind_param('i',$Id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
                                       <div class="row">
                                        <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" name="nm" class="form-control" value="<?php echo $row->name;?>"/>
                                            
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Addtess:</label>
                                            <textarea type="text" name="add" class="form-control" rows="6"><?php echo $row->address;?></textarea>
                                        </div>
                                        </div>
                                        </div>
                                        
                                         <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City:</label>
                                            <input type="text" name="city" class="form-control" value="<?php echo $row->city;?>"/>
                                            
                                        </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                     
                                         <div class="form-group">
                                            <label>Pin Code:</label>
                                            <input type="text" name="pin" class="form-control" value="<?php echo $row->pin;?>"/> 
                                        </div>
                                      </div>
                                      </div>
                                       <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>phone No:</label>
                                            <input type="text" name="phno" class="form-control" value="<?php echo $row->mobile;?>"/> 
                                        </div>
                                        </div>
                                         
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="email" name="email" class="form-control" value="<?php echo $row->email;?>"/> 
                                        </div>
                                        </div>
                                        </div>
                                        
                                        <div class="row">
                                        <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Date Of Birth:</label>
                                            <input type="date" name="dob" class="form-control" value="<?php echo $row->dob;?>"/> 
                                        </div>
                                        </div>
                                        </div>
                                         <div class="row">
                                        <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Stream:</label>
                                             <select name="stream" class="form-control" id="stream" onChange="change_country()"  required="required">
                                             	<option value=""><?php echo $row->stream;?></option>
                                               
                                                  <?php
												  $servername = "localhost";
												  $username = "root";
												  $password = "";		
												  $dbname = "oas";																																						
												  $conn = new mysqli($servername, $username, $password, $dbname);

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
                                         
                                        <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Class:</label>
                                            <select name="class" class="form-control" id="class"  required="required">
                                                <option value=""><?php echo $row->class;?></option>
                                               
                                            </select> 
                                        </div>
                                        </div>
                                        </div>
                                        <input type="submit" value="SAVE" name="submit" class="btn btn-default">
                                        <input type="reset" value="RESET" class="btn btn-primary">
<?php } ?>
                                    </form>

                                 </div>
    </div>
                                
                               
                                   
                                   
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                
                <!-- /. ROW  -->
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


</script>
