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
                                <h2><b><font color="#663300">GALLERY</font></b></h2>
                                <!-- Filter Buttons -->
                                
                                <!-- End Filter Buttons -->
                            </div>
                            <div class="portfolio-group col-md-12 margin-top-30 no-padding">
                                <div class="row">
                                    <!-- Portfolio Item -->
                                     <?php                                    
                                        $ret="select * from gallery";
$stmt = $conn->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>

                                    <div class="portfolio-item col-md-3 design">
                                        <div class="image-hover">
                                            <a href="admin/photo/<?php echo $row->photo; ?>">
                                                <figure>
                                                    <img src="admin/photo/<?php echo $row->photo; ?>" alt="image1" width="200" height="200">
                                                    
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <?php $cnt++; } ?>
                                    <!-- End Portfolio Item -->
                                                                
                                                  
                                </div>
                            </div>
                        </div>
                        <!-- === END CONTENT === -->
                        <!-- === BEGIN FOOTER === -->
                    </div>

<?php include 'footer.php';?>
</body>
</html>