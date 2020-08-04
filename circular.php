<?php

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
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <div class="col-md-12">
                                <h2 class="margin-bottom-30">Circulars</h2>
                                <!-- Top Panels -->
                                
                             
                               
                                <!-- Bottom Panels -->
                                <div class="row margin-top-40">
                                 <?php                                    
                                        $ret="select * from circular";
$stmt = $conn->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();

$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
  
                                    <div class="col-md-3">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title text-center">
                                                    <?php echo $row->title;?> 
                                                </h3>
                                            </div>
                                            <div class="panel-body text-center">
                                               <?php echo $row->description;?></li>
                                            </div>
                                             
                                            
                                        </div>
                                    </div>
                                     
                                    
                                        <?php $cnt=$cnt+1; }?> 
                                    
                         
                             
                                <!-- End Bottom Panels -->
                            </div>
                        </div>
                        <!-- === END CONTENT === -->
                        <!-- === BEGIN FOOTER === -->
                    </div>
                    </div>
                    
                    
                    
 <?php include 'footer.php';?>
</body>
</html>
