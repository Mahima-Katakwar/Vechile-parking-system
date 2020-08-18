<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
//mysql_connect("localhost","root","");

$con= mysqli_connect("localhost","root","",'vps_db');
if($con)
{
//mysql_select_db('vps_db');
}
else
{
echo"connection problem";	
	
	}
?>



</body>
</html>