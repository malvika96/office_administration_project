<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oas";
$conn = new mysqli($servername, $username, $password, $dbname);

if(!isset($_SESSION)) { session_start(); } 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php include 'header.php';?>
 
 
 <div class="container">
                       
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <!-- Main Column -->
                            <div class="col-md-9">
                                <!-- Main Content -->
                                <div class="headline">
                                    <b><h2>Apply for certificates</h2></b>
                                </div>
                                
                                <br>
                                <!-- Contact Form -->
                                <form class="signup-page" action="" method="post" enctype="multipart/form-data">
                                <?php
								$emails=$_SESSION["student1"];
if ($conn->connect_error)
 {
   die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['submit']))
{
	$namestud=$_POST['name'];
	
	$mobile=$_POST['mob'];
	$form=$_POST['form'];
	$rk=$_POST['rk'];
	$status="pending";
	
	$name=$_FILES['file']['name'];
	$type=$_FILES['file']['type'];
	$size=$_FILES['file']['size'];
	$tmp=$_FILES['file']['tmp_name'];
	$upload='marksheet/'.$name;
	
	$name1=$_FILES['file1']['name'];
	$type1=$_FILES['file1']['type'];
	$size1=$_FILES['file1']['size'];
	$tmp1=$_FILES['file1']['tmp_name'];
	$upload1='lc/'.$name1;


 if(move_uploaded_file($tmp,$upload))
 {
	 if(move_uploaded_file($tmp1,$upload1))
 {
 
	$sql="insert into student_request(name,email,ph_no,forms,marksheet,lc,remarks,status)values('$namestud','$emails','$mobile','$form','$name','$name1','$rk','$status')";
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
	 
	$sql="insert into student_request(name,email,ph_no,forms,marksheet,lc,remarks,status)values('$namestud','$emails','$mobile','$form','$name','$name1','$rk','$status')";
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

                                   <label>Student Name:</label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input class="form-control" type="text" name="name" placeholder="Please Enter Name">
                                            
                                        </div>
                                    </div>
                                    <label>Email
                                        <span class="color-red">*</span>
                                    </label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input type="email"  name="email" class="form-control" value="<?php echo $emails; ?>" disabled="true" />
                                        </div>
                                    </div>
                                    
                                     <label>Mobile No:
                                        <span class="color-red">*</span>
                                    </label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-6 col-md-offset-0">
                                            <input type="text"  name="mob" class="form-control" placeholder="Please Enter Mobile" />
                                        </div>
                                    </div>
                                    
                                    <label>Form:</label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-8 col-md-offset-0">
                                            <select name="form" class="form-control" id="forms" onChange="form_change()">
                                                
                                                <option>Select Form.......</option>
                                                <option>Bonafied Form</option>
                                                <option>English Profocoency Form</option>
                                                <option>Recommendation Form</option>
                                                <option value="Transferrence_Form">Transferrence Form</option>
                                                
                                   </select>
                                   
                                
                                        </div>
                                    </div>
                                    
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-8 col-md-offset-0" id="upload" >
                                            
                                        </div>
                                    </div>
                                    <label>Remark:</label>
                                    <div class="row margin-bottom-20">
                                        <div class="col-md-8 col-md-offset-0">
                                             <textarea type="text"  name="rk" rows="5" class="form-control" placeholder="Please Enter Remark" ></textarea>
                                        </div>
                                    </div>
                                   
                                        <input type="submit" value="SUBMIT" name="submit" class="btn btn-primary">
                                       
                                        <input type="reset" value="RESET" class="btn btn-primary">
                                    
                                </form>
                                     <!-- End Main Content -->
                            </div>
                            <!-- End Main Column -->
                            
                            <!-- End Side Column -->
                        </div>
                        </div>
<?php include 'footer.php';?>
                         

</body>
</html>


<script type="text/javascript">
function form_change()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","formdroupdown.php?Transferrence_Form="+document.getElementById("forms").value,false);
	xmlhttp.send(null);
	document.getElementById("upload").innerHTML=xmlhttp.responseText;
	
	
}
</script>
 