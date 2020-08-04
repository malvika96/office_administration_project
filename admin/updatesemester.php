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
	$stream=$_POST['stream'];
	$class=$_POST['class'];
	$semester=$_POST['sem'];
	
	$Id=$_GET['semester_id'];
	
	$sql="update semester_details set stream_id='$stream',class_id='$class',semester='$semester' where semester_id='$Id'";
	   if($conn->query($sql)==TRUE)
	{
		header ("Location: view_semester.php");
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
                    <div class="col-md-12">
                     <h2>Semester Details</h2>   
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
                                <div class="col-md-6">
                                       <form role="form" action="" method="post">  
                                       <?php	
												$Id=$_GET['semester_id'];
	$ret="select a.semester_id,b.stream,c.class,a.semester from semester_details a,stream b,type_of_class c where a.stream_id=b.stream_id and a.class_id=c.class_id and semester_id=?";
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
                                            <select name="stream" class="form-control" id="stream" onChange="change_country()" required="required">
                                                <option value=""><?php echo $row->stream;?></option>
                                                <option>Select Streem.......</option>
                                                
                                                <?php
												

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
                                            <select name="class" class="form-control" id="class" onChange="change_sem()" required="required">
                                            <option value=""><?php echo $row->class;?></option>		
                                           <option>Select Class.......</option>
                                                
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Semester:</label>
                                            <input type="text" name="sem" class="form-control" value="<?php echo $row->semester;?>"/>
                                        </div>
                                        <input type="submit" value="UPDATE" name="submit" class="btn btn-default">
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

</script>