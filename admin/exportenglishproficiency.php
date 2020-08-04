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
 
    $sql = mysqli_query($conn,"select a.ref_no,a.date,a.stream_name,b.name,a.start_year,a.end_year from eng_proficiency a,student_detail b  where a.student_id=b.student_id");
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
$columnHeader = "Sr NO"."\t"."References No"."\t"."Date"."\t"."Stream name "."\t"."Student Name"."\t"."Start Year"."\t"."End Year"."\t";
 
if($exportType=='CSV'){
    // if you wanted export file of csv type then used this code
    header("Content-type: text/x-csv");
    header("Content-Disposition: attachment; filename=English Proficiency Records.csv");
}else{
    // if you wanted to export file of excel type then used this code
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=English Proficiency Records.xls");
}
 
header("Pragma: no-cache");
header("Expires: 0");
 
echo ucwords($columnHeader) . "\n" . $setData . "\n";
?>