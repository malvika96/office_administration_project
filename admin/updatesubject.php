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
	$stream=$_POST['stream'];
	$class=$_POST['class'];
	$semester=$_POST['sem'];
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	$sub4=$_POST['sub4'];
	$sub5=$_POST['sub5'];
	$sub6=$_POST['sub6'];
	$sub7=$_POST['sub7'];
	$sub8=$_POST['sub8'];
	$sub9=$_POST['sub9'];
	$sub10=$_POST['sub10'];
	$sub11=$_POST['sub11'];
	$sub12=$_POST['sub12'];
	$Id=$_GET['subject_id'];
	
	$sql="update subject_form set stream='$stream',class='$class',semester='$semester',subject1='$sub1',subject2='$sub2',subject3='$sub3',subject4='$sub4',subject5='$sub5',subject6='$sub6,subject7='$sub7',subject8='$sub8',subject9='$sub9',subject10='$sub10',subject11='$sub11',subject12='$sub12' where subject_id='$Id'";
	   if($conn->query($sql)==TRUE)
	  {
		 header ("Location: view_subject.php");
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
                     <h2>Subject Forms </h2>   
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
                            Fill the details..... 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                   
                                    <form role="form" action="" method="post">
                                    <?php	                                
                                        $Id=$_GET['subject_id'];
								
	$ret="select a.subject_id,b.stream,c.class,d.semester,a.subject1,a.subject2,a.subject3,a.subject4,a.subject5,a.subject6,a.subject7,a.subject8,a.subject9,a.subject10,a.subject11,a.subject12 from subject_form a,stream b,type_of_class c,semester_details d where a.stream=b.stream_id and a.class=c.class_id and a.semester=d.semester_id and subject_id=?";
		$stmt= $conn->prepare($ret) ;
	 $stmt->bind_param('i',$Id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
                                        
                                        <div class="form-group">
                                            <label>Stream:</label>
                                            <select name="stream" class="form-control" id="stream" onChange="change_country()">
                                                <option><?php echo $row->stream;?></option>
                                                <option>Select Streem.......</option>
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
                                        <div class="form-group">
                                            <label>Class:</label>
                                            <select name="class" class="form-control" id="class" onChange="change_sem()">
                                                <option><?php echo $row->class;?></option>
                                                <option>Select Class.......</option>
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Semester:</label>
                                            <select name="sem" class="form-control" id="semester" >
                                            	   <option><?php echo $row->semester;?></option>
                                                 <option>Select Semester.......</option>
                                               
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        	<label>Subject Name:</label>
                                            <br>
                                            <label>Subject 1:</label>
                                            <input  type="text" name="sub1" class="form-control" value="<?php echo $row->subject1;?>"/>
                                            <br>
                                            <label>Subject 2:</label>
                                            <input  type="text" name="sub2" class="form-control" value="<?php echo $row->subject2;?>"/>
                                            <br>
                                            <label>Subject 3:</label>
                                            <input  type="text" name="sub3" class="form-control" value="<?php echo $row->subject3;?>"/>
                                            <br>
                                            <label>Subject 4:</label>
                                            <input  type="text" name="sub4" class="form-control" value="<?php echo $row->subject4;?>"/>
                                            <br>
                                            <label>Subject 5:</label>
                                            <input type="text" name="sub5" class="form-control" value="<?php echo $row->subject5;?>"/>
                                            <br>
                                            <label>Subject 6:</label>
                                            <input type="text" name="sub6" class="form-control" value="<?php echo $row->subject6;?>"/>
                                            <br>
                                            <label>Subject 7:</label>
                                            <input type="text" name="sub7" class="form-control" value="<?php echo $row->subject7;?>"/>
                                            <br>
                                            <label>Subject 8:</label>
                                            <input type="text" name="sub8" class="form-control" value="<?php echo $row->subject8;?>"/>
                                            <br>
                                            <label>Subject 9:</label>
                                            <input type="text" name="sub9" class="form-control" value="<?php echo $row->subject9;?>"/>
                                            <br>
                                            <label>Subject 10:</label>
                                            <input type="text" name="sub10" class="form-control" value="<?php echo $row->subject10;?>"/>
                                            <br>
                                            <label>Subject 11:</label>
                                            <input type="text" name="sub11" class="form-control" value="<?php echo $row->subject11;?>"/>
                                            <br>
                                            <label>Subject 12:</label>
                                            <input type="text" name="sub12" class="form-control" value="<?php echo $row->subject12;?>"/>
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

</body>
</html>