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
//mysqli_select_db('vps_db');
}
else
{
echo"connection problem";	
	
	}
	$user_url = "http://localhost/php/vpsnew/";
	$admin_url = "http://localhost/php/vpsnew/admin/";
?>



</body>
</html>