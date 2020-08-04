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
$ret="select a.recommendation_id,a.ref_no,a.date,d.name,s.stream,a.stream_name,a.subject1,a.subject2,a.faculty_name from recommendation a,stream s,student_detail d where a.stream_id=s.stream_id and a.student_id=d.student_id and d.name like('$nm%')";

$stmt = $conn->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();

$cnt=1;
echo "</br>";
echo "<table  class='table table-striped table-bordered table-hover dataTable no-footer' id='dataTables-example' aria-describedby='dataTables-example_info'>";
echo"<tr role='row'>";
                                        	echo "<th class='sorting_asc' tabindex='0' aria-controls='dataTables-example' rowspan='1' colspan='1' aria-label='Rendering engine: activate to sort column ascending' aria-sort='ascending' style='width:10px;'>"; echo 'Sno.'; echo "</th>";
											
											echo "<th>"; echo 'Reference No'; echo "</th>";
											echo "<th>"; echo 'Date'; echo "</th>";
											echo "<th>"; echo 'Name'; echo "</th>";
											echo "<th>"; echo 'Stream'; echo "</th>";
											echo "<th>"; echo 'Stream Name'; echo "</th>";
											echo "<th>"; echo 'Subject1'; echo "</th>";
											echo "<th>"; echo 'Subject2'; echo "</th>";
											echo "<th>"; echo 'Faculty Name'; echo "</th>";
											
										
															echo "<th class='sorting_asc' tabindex='0' aria-controls='dataTables-example' rowspan='1' colspan='1' aria-label='Rendering engine: activate to sort column ascending' aria-sort='ascending' style='width:170px;'>"; echo 'Update/Delete'; echo "</th>";


echo"</tr>";
echo"</thead>";
 echo "<tbody>";                                  
                                           
while($row=$res->fetch_object())
	  {
echo "<tr class='gradeA odd'>";
echo "<td>"; echo $row->recommendation_id; echo "</td>";
echo "<td>"; echo $row->ref_no; echo "</td>";
echo "<td>"; echo $row->date; echo "</td>";
echo "<td>"; echo $row->name; echo "</td>";

echo "<td>"; echo $row->stream; echo "</td>";
echo "<td>";echo $row->stream_name; echo "</td>";
echo "<td>";echo $row->subject1; echo "</td>";
echo "<td>";echo $row->subject2; echo "</td>";
echo "<td>";echo $row->faculty_name; echo "</td>";
                                          
                                            
	
echo "<td><a href='updaterecommendation.php?bono_id=$row->recommendation_id' class='btn btn-success fa fa-edit'><b>Edit</b></a>"; echo "&nbsp;&nbsp" ;
echo"<a href='viewrecommendation.php?del=<?php echo $row->recommendation_id;?>' class='btn btn-danger fa fa-pencil' onclick='return confirm('Do you want to delete');'><b>Delete</b></a>"; echo "</td>";
									
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