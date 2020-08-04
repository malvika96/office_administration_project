<?php
$con=new mysqli("localhost","root","","oas");
$class=$_GET["Transferrence_Form"];

if($class="Transferrence_Form")
{
	echo "<label>"; echo '<u>Uploded Documents are only for Transference Certificate</u>'; echo "</label>";
echo "<label>"; echo 'Uplode 12th L.C'; echo "</label>";
echo " <input type='file' name='file'>";
echo"</br>";
echo "<label>"; echo 'Uplode sem6 Marksheet'; echo "</label>";
echo " <input type='file' name='file1'>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>