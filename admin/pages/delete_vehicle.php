<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php

include('connection.php');
$user =$_GET['uid'];
$qry= "delete from mastervehicle where vid='$user'";
mysqli_query($con,$qry);
header('location:../vehicle.php');
?>
</body>
</html>