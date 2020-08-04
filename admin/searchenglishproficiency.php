<?php
$nm=$_GET["nm"];
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
$record_per_page=10;
$page='';
if(isset($_GET["page"]))
{
	$page=$_GET["page"];
}
else
{
	$page=1;
}
$start_from=($page-1)*$record_per_page;
$ret="select a.eng_proficiency_id,b.name,a.ref_no,a.date,a.stream_name,a.start_year,a.end_year from eng_proficiency a,student_detail b  where a.student_id=b.student_id and b.name like('$nm%')";

$stmt = $conn->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();

$cnt=1;
echo "</br>";
echo "<table  class='table table-striped table-bordered table-hover dataTable no-footer' id='dataTables-example' aria-describedby='dataTables-example_info'>";
echo"<tr role='row'>";
                                        	echo "<th class='sorting_asc' tabindex='0' aria-controls='dataTables-example' rowspan='1' colspan='1' aria-label='Rendering engine: activate to sort column ascending' aria-sort='ascending' style='width:10px;'>"; echo 'Sno.'; echo "</th>";
											
											echo "<th>"; echo 'Ref_No'; echo "</th>";
											echo "<th>"; echo 'Date'; echo "</th>";
											echo "<th>"; echo 'Stream_name'; echo "</th>";
											echo "<th>"; echo 'Student_name'; echo "</th>";
											echo "<th>"; echo 'Start_year'; echo "</th>";
											echo "<th>"; echo 'End_year'; echo "</th>";
									
											echo "<th class='sorting_asc' tabindex='0' aria-controls='dataTables-example' rowspan='1' colspan='1' aria-label='Rendering engine: activate to sort column ascending' aria-sort='ascending' style='width:170px;'>"; echo 'Update/Delete'; echo "</th>";


echo"</tr>";
echo"</thead>";
 echo "<tbody>";                                  
                                           
while($row=$res->fetch_object())
	  {
echo "<tr class='gradeA odd'>";
echo "<td>"; echo $row->eng_proficiency_id; echo "</td>";
echo "<td>"; echo $row->ref_no; echo "</td>";
echo "<td>"; echo $row->date; echo "</td>";
echo "<td>";echo $row->stream_name; echo "</td>";
echo "<td>";echo $row->name; echo "</td>";
echo "<td>";echo $row->start_year; echo "</td>";
echo "<td>";echo $row->end_year; echo "</td>";



	
echo "<td><a href='updateenglish_proficiance.php?eng_proficiency_id=$row->eng_proficiency_id' class='btn btn-success fa fa-edit'><b>Edit</b></a>"; echo "&nbsp;&nbsp" ;
echo"<a href='viewenglishproficience.php?del=$row->eng_proficiency_id' class='btn btn-danger fa fa-pencil' onclick='return confirm('Do you want to delete');'><b>Delete</b></a>"; echo "</td>";
									
	$cnt=$cnt+1;

}
echo "</tbody>";
echo "</table>";

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>