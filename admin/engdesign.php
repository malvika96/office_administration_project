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
$id=$_GET['eng_proficiency_id'];

$sql="select a.eng_proficiency_id,b.name,a.ref_no,a.date,a.stream_name,a.start_year,a.end_year from eng_proficiency a,student_detail b  where a.student_id=b.student_id and eng_proficiency_id='$id' ";
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
		<td align="left"><b>Ref.No :</b> <?php echo $data1["ref_no"]; ?>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Date :</b> <?php echo $data1["date"]; ?></td>
			
	</tr>
	<tr>
		
		<td align="center">
	
			<h1><u>TO WHOM IT MAY CONCERN</u></h1></td>
	</tr>
	<tr>
		<td align="left" width=50>
			
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp 
            <p align="justify">This letter is to confirm that the Bachelor in Computer  
             Applications degree, awarded to<b> <u> <?php echo $data1["name"]; ?> </u> </b> in      
             May <?php echo $data1["end_year"]; ?>  at Takshashilaa College, affiliated to Veer Narmad South  
              Gujarat University (VNSGU), Surat, Gujarat, India, is a three years  
              degree program with medium of instruction in English only.   
			 Consequently all the subjects during six semesters, from  June <?php echo $data1["start_year"]; ?>  to   
		     May <?php echo $data1["end_year"]; ?>  were taught in English Language.</p>
		</td>
	</tr>
</table>
</center>

<p>

<p>

<p>


</body>
</html>