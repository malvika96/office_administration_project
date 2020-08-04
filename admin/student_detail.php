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
	
	
	
	$sql="insert into student_detail(name,address,city,pin,mobile,email,dob,stream_id,class_id) values('$name','$address','$city','$pin','$mobile','$email','$dob','$str','$class')";
	   if($conn->query($sql)==TRUE)
	  {
		  echo "<script>alert('Recrod Inserted')</script>";
 	  }
	  else
	  {
		echo "Error: " . $sql . "<br>" . $conn->error;
	  }
$conn->close();
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>student_detail</title>
</head>

<body>
<?php include 'header1.php';?>

  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    
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
                                       <div class="row">
                                        <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" name="nm" class="form-control" placeholder="PLease Enter Name" required="please input date"/>
                                            
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Addtess:</label>
                                            <textarea type="text" name="add" class="form-control" rows="6" placeholder="PLease Enter Address" required="please input date"></textarea>
                                        </div>
                                        </div>
                                        </div>
                                        
                                         <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City:</label>
                                            <input type="text" name="city" class="form-control" placeholder="PLease Enter city" required="please input date"/>
                                            
                                        </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                     
                                         <div class="form-group">
                                            <label>Pin Code:</label>
                                            <input type="text" name="pin" class="form-control" placeholder="PLease Enter Pin Code" required="please input date"/> 
                                        </div>
                                      </div>
                                      </div>
                                       <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>phone No:</label>
                                            <input type="text" name="phno" class="form-control" placeholder="PLease Enter Mobile Number" patern="\d{3}\d{3}\d{4}" required="please input date" /> 
                                        </div>
                                        </div>
                                         
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="email" name="email" class="form-control" placeholder="PLease Enter Email Id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="please input date" /> 
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Date Of Birth:</label>
                                            <input type="date" name="dob" class="form-control" required="please input date"/> 
                                        </div>
                                        </div>
                                        </div>
                                         <div class="row">
                                        <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Stream:</label>
                                             <select name="stream" class="form-control" id="stream" onChange="change_country()" required="please input date">
                                                <option value="">Select Streem.......</option>
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
                                            <select name="class" class="form-control" id="class" onChange="change_sem()" required="please input date">
                                                <option value="">Select Class.......</option>
                                               
                                            </select> 
                                        </div>
                                        </div>
                                        </div>
                                        <input type="submit" value="SAVE" name="submit" class="btn btn-default">
                                        <input type="reset" value="RESET" class="btn btn-primary">

                                    </form>

                                 </div>
    </div>
                                
                               
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
function change_sem()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","dropdownsem.php?class_id="+document.getElementById("class").value,false);
	xmlhttp.send(null);
	document.getElementById("semester").innerHTML=xmlhttp.responseText;
	
	
}

</script>
