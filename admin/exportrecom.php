<?php
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
 
$exportType = '';
 
//$exportType = 'CSV'; 
 
    $sql = mysqli_query($conn,"select a.recommendation_id,a.ref_no,a.date,d.name,s.stream,a.stream_name,a.subject1,a.subject2,a.faculty_name from recommendation a,stream s,student_detail d where a.stream_id=s.stream_id and a.student_id=d.student_id");
    $conn->close();
 
$srNo=1;
$rowData ='';
$setData='';
 
while($rec = mysqli_fetch_row($sql))
{
    $rowData = '"' . $srNo . '"' . "\t";
    foreach($rec as $value)
    {
        $value = '"' . $value . '"' . "\t";
        $rowData .= $value;
    }
    $setData .= trim($rowData)."\n";
    $srNo++;
}
$columnHeader ='';
$columnHeader = "Sr NO"."\t"."References No"."\t"."Date"."\t"."Student Name"."\t"."Stream"."\t"."Full Stream Name"."\t"."Subject1"."\t"."Subject2"."\t"."Faculty Name"."\t";
 
if($exportType=='CSV'){
    // if you wanted export file of csv type then used this code
    header("Content-type: text/x-csv");
    header("Content-Disposition: attachment; filename=Recomendation Records.csv");
}else{
    // if you wanted to export file of excel type then used this code
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=Recomendation Records.xls");
}
 
header("Pragma: no-cache");
header("Expires: 0");
 
echo ucwords($columnHeader) . "\n" . $setData . "\n";
?>