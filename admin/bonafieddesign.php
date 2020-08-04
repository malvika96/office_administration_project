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
$id=$_GET['bono_id'];

$sql="select a.bono_id,b.name,s.stream,c.class,p.purpose_of_bonafied,a.re_no,a.gender1,a.date,a.roll_no,a.academic_year from bonafied a,student_detail b,stream s,bonafied_purpose p,type_of_class c where a.student_id=b.student_id and a.stream_id=s.stream_id and a.class_id=c.class_id and a.bonafied_purpose_id=p.bonafied_purpose_id and bono_id='$id' ";
$result=$conn->query($sql);
$data1= $result->fetch_assoc();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>
<strong></strong>
<p>
	
	

<p>

<p>
	</br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<center >
<table border="0" cellspacing="15" cellpadding="5" background="images/certificate_border.png">
	<tr>
		<td align="left"><b>Ref.No :</b> <?php echo $data1["re_no"]; ?>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Date :</b> <?php echo $data1["date"]; ?></td>
			
	</tr>
	<tr>
		
		<td align="center">
	
			<h1><u>BONAFIED CERTIFICATE</u></h1></td>
	</tr>
	<tr>
		<td align="left" width="50">
			<p align="justify"> This is to certify that <b> <?php echo $data1["name"]; ?> </b>who is the bonafied student 
			of our college  who is studying in <?php echo $data1["class"];?> <?php echo $data1["stream"]; ?> (Roll No: <?php echo $data1["roll_no"]; ?>) in the academic 
			year<?php echo $data1["academic_year"]; ?>. We are issuing <?php echo $data1["gender1"]; ?>  a bonafied certificate for the <b>Purpose of <?php echo $data1["purpose_of_bonafied"]; ?></b></p><br>
		
		</td>
	</tr>
</table>
</center>

<p>

<p>

<p>

</body>
</html>