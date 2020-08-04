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
                     <h2>Faculty Profile </h2>   
                        <h5>Welcome...&nbsp;&nbsp;<?php echo $faculty;?></h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
              <div class="row">
               <?php                                    
                                        $ret="select photo,address,designation,qualification from faculty_registeration where first_name='$faculty'";
$stmt = $conn->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();

$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>

	  	
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Profile
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Photo</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab">Address</a>
                                </li>
                                <li class=""><a href="#messages" data-toggle="tab">Designation</a>
                                </li>
                                <li class=""><a href="#settings" data-toggle="tab">Qualification</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <h4>Photo</h4>
                                  
                                  <img src="../facultyphoto/<?php echo $row->photo;?>" height="100" width="100">
                                    
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Address</h4>
                                   <?php echo $row->address;?>
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Designation</h4>
                                   <?php echo $row->designation;?>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>Qualification</h4>
                                    <?php echo $row->qualification;?>
                                </div>
                            </div>
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