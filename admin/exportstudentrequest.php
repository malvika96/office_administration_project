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
 
    $sql = mysqli_query($conn,"SELECT `name`,`email`,`ph_no`,`forms`,`marksheet`,`lc`,`remarks`,`status` FROM `student_request`");
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
$columnHeader = "Sr NO"."\t"."Name"."\t"."Email"."\t".".Mobile No."."\t"."Form"."\t"."Marksheet"."\t"."Lc"."\t"."Remark"."\t"."Stutes"."\t";
 
if($exportType=='CSV'){
    // if you wanted export file of csv type then used this code
    header("Content-type: text/x-csv");
    header("Content-Disposition: attachment; filename=Student request.csv");
}else{
    // if you wanted to export file of excel type then used this code
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=Student request.xls");
}
 
header("Pragma: no-cache");
header("Expires: 0");
 
echo ucwords($columnHeader) . "\n" . $setData . "\n";
?>