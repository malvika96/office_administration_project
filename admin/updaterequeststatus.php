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

	
	$status="Aprove";
	$Id=$_GET['student_request_id'];
	
	$sql="update student_request set status='$status' where student_request_id='$Id' ";
	   if($conn->query($sql)==TRUE)
	  {
		 header ("Location: viewstudentrequest.php");
 	}
	 else
	  {
		echo "invalid";
  
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
</body>
</html>