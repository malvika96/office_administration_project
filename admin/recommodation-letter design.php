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
$id=$_GET['recommendation_id'];

$sql="select	a.recommendation_id,a.ref_no,a.date,d.name,a.gender,a.gender1,s.stream,a.stream_name,a.subject1,a.subject2,a.faculty_name from recommendation a,stream s,student_detail d where a.student_id=d.student_id and a.stream_id=s.stream_id and recommendation_id='$id' ";
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
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Date :</b><?php echo $data1["date"]; ?></td>
			
	</tr>
	<tr>
		
		<td align="center">
	
			<h1><b><u>LETTER OF RECOMMODATION </u></b></h1></td>
	</tr>
	<tr>
		<td align="left" width=50>
			<p align="justify">I am extremely pleased to recommend my student, <b><?php echo $data1["name"]; ?> </b>to you.  <?php echo $data1["gender"]; ?>       completed 
			 <?php echo $data1["gender1"]; ?> <?php echo $data1["stream"]; ?> ( <?php echo $data1["stream_name"]; ?>) from our college. During her tenure with 
           us, <?php echo $data1["name"]; ?> was always attentive and contributed through  <?php echo $data1["gender1"]; ?> deep knowledge and  	
            grasp over evolving technologies.  <?php echo $data1["gender"]; ?> is an avid reader and likes to keep herself up to date 
            on latest developments in her field of study.  <?php echo $data1["gender"]; ?> always made it a point to bring interesting and added value to class discussions.</p>
            
            
            <p align="justify">I was taking subjects<b> <?php echo $data1["subject1"]; ?> and  <?php echo $data1["subject2"]; ?></b> in the 
             class where  <?php echo $data1["gender"]; ?> belonged to. As an individual,<b>  <?php echo $data1["name"]; ?></b> has been collaborative and  
             helpful to everyone here. <?php echo $data1["gender"]; ?> builds a good rapport and left a lasting impression in our  
             minds with all her skills of computer programming and research skills. I believe these are 
             vital qualities that one must possess as a student. I trust <?php echo $data1["gender"]; ?> will stand out from others, 
             creating  <?php echo $data1["gender1"]; ?> own unique identity as  <?php echo $data1["gender"]; ?> did here.
            
            <p align="justify"><b>  <?php echo $data1["name"]; ?></b> has tremendous potential and appropriate for abroad study. Hence I 
             recommend her for admission to your esteemed College/University. </p>
             <br />
             
           
              <p align="left"><b><?php echo $data1["faculty_name"]; ?></b><p>
		</td>
	</tr>
</table>
</center>

<p>

<p>

<p>


</body>
</html>