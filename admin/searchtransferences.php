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
$ret="select a.transferrence_id,b.name,a.tc_no,a.enrollment,a.enroll_date,s.stream,c.class,d.semester,e.dept from transferrence a,student_detail b,stream s,type_of_class c,semester_details d,vnsgu_department e where a.stream_id=s.stream_id and a.class_id=c.class_id and a.student_id=b.student_id and a.semester_id=d.semester_id and a.department_id=e.department_id and b.name like('$nm%')";

$stmt = $conn->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();

$cnt=1;
echo "</br>";
echo "<table  class='table table-striped table-bordered table-hover dataTable no-footer' id='dataTables-example' aria-describedby='dataTables-example_info'>";
echo"<tr role='row'>";
                                        	echo "<th class='sorting_asc' tabindex='0' aria-controls='dataTables-example' rowspan='1' colspan='1' aria-label='Rendering engine: activate to sort column ascending' aria-sort='ascending' style='width:10px;'>"; echo 'Sno.'; echo "</th>";
											
											echo "<th>"; echo 'Tc_no'; echo "</th>";
											echo "<th>"; echo 'Name'; echo "</th>";
											echo "<th>"; echo 'Enrollment'; echo "</th>";
											echo "<th>"; echo 'Enroll_date'; echo "</th>";
											echo "<th>"; echo 'Stream'; echo "</th>";
											echo "<th>"; echo 'Class'; echo "</th>";
											echo "<th>"; echo 'Semester'; echo "</th>";
											echo "<th>"; echo 'Department'; echo "</th>";
										
															echo "<th class='sorting_asc' tabindex='0' aria-controls='dataTables-example' rowspan='1' colspan='1' aria-label='Rendering engine: activate to sort column ascending' aria-sort='ascending' style='width:170px;'>"; echo 'Update/Delete'; echo "</th>";


echo"</tr>";
echo"</thead>";
 echo "<tbody>";                                  
                                           
while($row=$res->fetch_object())
	  {
echo "<tr class='gradeA odd'>";
echo "<td>"; echo $row->transferrence_id; echo "</td>";
echo "<td>"; echo $row->tc_no; echo "</td>";
echo "<td>"; echo $row->name; echo "</td>";
echo "<td>"; echo $row->enrollment; echo "</td>";
echo "<td>"; echo $row->enroll_date; echo "</td>";

echo "<td>";echo $row->stream; echo "</td>";
echo "<td>";echo $row->class; echo "</td>";
echo "<td>";echo $row->semester; echo "</td>";
echo "<td>";echo $row->dept; echo "</td>";



	
echo "<td><a href='updatetransference.php?transferrence_id=$row->transferrence_id' class='btn btn-success fa fa-edit'><b>Edit</b></a>"; echo "&nbsp;&nbsp" ;
echo"<a href='viewtransferences.php?del=<?php echo $row->transferrence_id;?>' class='btn btn-danger fa fa-pencil' onclick='return confirm('Do you want to delete');'><b>Delete</b></a>"; echo "</td>";
									
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