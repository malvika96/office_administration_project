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
	
	
	$class=$_POST['class'];
	$Id=$_GET['class_id'];
	
	$sql="update type_of_class set class='$class'  where class_id='$Id'";
	   if($conn->query($sql)==TRUE)
	  {
		 header ("Location: view_type_of_class.php");
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
                     <h2>Types Of Class</h2>   
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
                            Select Streem & Class. 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                        <form role="form" action="" method="post">   
                                         <?php	
												$Id=$_GET['class_id'];
	$ret="select s.stream,a.class from type_of_class a,stream s where a.stream_id=s.stream_id and class_id=?";
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
                                            
                                                  <label class="form-control"><?php echo $row->stream;?></label>
                                             
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Class:</label>
                                            <input type="text" name="class" class="form-control" value="<?php echo $row->class;?>" />
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
</script>