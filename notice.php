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
                                <h2 class="margin-bottom-30">Notice Board</h2>
                                <!-- Top Panels -->
                                
                                <div class="row">
                               <?php                                    
                                        $ret="select * from notice";
$stmt = $conn->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();

$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
                                    <div class="col-md-3">
                                    

                                        <div class="panel panel-primary invert">
                                            <div class="panel-heading">
                                                <h3 class="panel-title text-center">
                                                    <?php echo $row->title;?> 
                                                </h3>
                                            </div>
                                            <div class="panel-body text-center">
                                             <marquee direction="down" scrollamount="3" onMouseOver="this.stop();" onMouseOut="this.start();" align="right">
                                            

                                            
                                           
                            <ul>
						
                                <li>
                                    <?php echo $row->description;?></li>
                                                              
							
                            </ul>
											
                                 </marquee>            
                                             
                                               </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <?php $cnt=$cnt+1; }?>  
                                                            </div>
                                                                      
                                <!-- End Bottom Panels -->
                            </div>
                          
                        </div>
                      
                        <!-- === END CONTENT === -->
                        </div>
 
 
 
 
 <?php include 'footer.php';?>
</body>
</html>
