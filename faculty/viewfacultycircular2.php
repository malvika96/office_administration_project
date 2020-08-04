<?php
if(!isset($_SESSION)) { session_start(); } 
$faculty=$_SESSION["name"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include 'header3.php';?>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Circulars </h2>   
                        <h5>Welcome...&nbsp;&nbsp;<?php echo $faculty;?></h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
              <div class="row">
               <?php                                    
                                        $ret="select * from faculty_circular";
$stmt = $conn->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();

$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                              <?php echo $row->title;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	Date : <?php echo $row->date;?> 
                        </div>
                       
                        <div class="panel-body">
                             
                              <?php echo $row->description;?></li>
                        </div>
                        
                    </div>
                      
                    </div>
 <?php $cnt=$cnt+1; }?>
                
                
               
   
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->








<?php include 'footer3.php';?></body>
</body>
</html>