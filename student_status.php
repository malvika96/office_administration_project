<?php
if(!isset($_SESSION)) { session_start(); } 
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
<?php include 'header.php';?>

 <div class="container">
<br>
<div class="headline">
                                    <b><h2>Status Of your Certificates</h2></b>
                                </div>
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <!-- Register Box -->
                            <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                
                             <table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead bgcolor="#FFCC66">
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Form Name</th>
                                            <th>Status</th>
                                            
                                        </tr>
										</thead>
                                    <tbody>
                                     	<?php 
										$emails=$_SESSION["student1"];
										$ret="select * from student_request where email='$emails'";                                   
$stmt = $conn->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();

$cnt=1;
while($row=$res->fetch_object())
	  {
                                        
?>									 
                                       <tr><td><?php echo $cnt;;?></td>
									   <td><?php echo $row->forms;?></td>
									   <td><?php echo $row->status;?></td>
<?php $cnt=$cnt+1; }?>
                                    </tbody>
                                </table>

                                
                                
                                
                                
                                <!-- End Contact Form -->
                                <!-- End Main Content -->
                            </div>
                            <!-- End Main Column -->
                            <!-- Side Column -->
                          </div>
                          
                           <div class="clearfix"></div>
                        </div>
                        
                         
                        
             

<?php include 'footer.php';?>
</body>
</html>