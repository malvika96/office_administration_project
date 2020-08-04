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
$id=$_GET['transferrence_id'];

$sql="select a.transferrence_id,b.name,a.gndrms,a.gender,a.gender1,a.tc_no,a.enrollment,a.enroll_date,s.stream,c.class,a.semfive,a.semsix,d.semester,a.passed_year,a.seat_no,a.dob,a.print_date,e.dept  from transferrence a,student_detail b,stream s,type_of_class c,semester_details d,vnsgu_department e where a.stream_id=s.stream_id and a.class_id=c.class_id and a.student_id=b.student_id and a.semester_id=d.semester_id and a.department_id=e.department_id and transferrence_id='$id' ";
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
	</br></br></br>
<center >
<table border="0" cellspacing="15" cellpadding="5" background="images/certificate_border.png">
	
	<tr>
		
		<td align="center">
	
			<h1><u><img src="assets/img/image001.gif" width="450" height="65" /></u></h1></td>
	</tr>
	<tr>
		<td align="right">T.C. No.: <?php echo $data1["tc_no"];?></td>
	</tr>
	<tr>
		<td>This is to certify that <?php echo $data1["gndrms"]; ?>.: <b><u><?php echo $data1["name"]; ?></u></b></td>
	</tr>	
	<tr>
		<td align="left">
			<p>has been The student of Takshashilaa College, Vadodara and her University</p>
			<p>Enrollment Certificate No. & Date Was <u> <?php echo $data1["enrollment"]; ?> & <?php echo $data1["enroll_date"]; ?></u> </p> 
			<p>(a)&nbsp;&nbsp;&nbsp;During  <b><u>Third Year <?php echo $data1["stream"]; ?></u></b><?php echo $data1["gender"]; ?> kept terms in this college as under</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;June - <?php echo $data1["semfive"]; ?>  to Dec. - <?php echo $data1["semfive"]; ?> (Semester : 5)</p>   
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jan.-  <?php echo $data1["semsix"]; ?>  to April.- <?php echo $data1["semsix"]; ?> (Semester : 6)</p>   

					
			<p>(b)&nbsp;&nbsp;&nbsp;<?php echo $data1["gender"]; ?> has Passrd in <b><u><?php echo $data1["class"]; ?> <?php echo $data1["stream"]."(".$data1["semester"].")"; ?></u></b> Examination in</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;February - <?php echo $data1["passed_year"]; ?></p>   
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seat No : <u><?php echo $data1["seat_no"]; ?></u></p>   
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ger exemptions in ____________________________</p> 
			
            <p>(c)&nbsp;&nbsp;&nbsp;<?php echo $data1["gender"]; ?> would have been in the____________________Class if <?php echo $data1["gender"]; ?> had</p>                                                      
       		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; continued in this college.</p>
			</p> 
            <p>(d)&nbsp;&nbsp;&nbsp;<?php echo $data1["gender"]; ?> bears a good moral character.</p>   
            <p>(e)&nbsp;&nbsp;&nbsp;Nothing is owing dues by <?php echo $data1["gender1"]; ?> in the college </p>   
            <p>(f)&nbsp;&nbsp;&nbsp;<?php echo $data1["gender1"]; ?> date of birth as per the college record is <u><?php echo $data1["dob"]; ?></u></p>   
            <p>(g)&nbsp;&nbsp;&nbsp;This is to certify that the above entries are in accordance with the records of</p> 
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the College.</p>                                                                                                           
 			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:- <u><?php echo $data1["print_date"]; ?></u></p> 
            
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____________________</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Principal/ Head</p>
            <br />
            
            
           <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data1["dept"]; ?> .Veer Narmad South Gujarat University, Surat.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>TAKSHASHILAA COLLEGE, Vadodara  – B.C.A.</u></b></p>
           
             
		</td>
        
      
	</tr>
</table>
</center>

<p>

<p>

<p>


</body>
</html>