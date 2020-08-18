<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php

include('connection.php');
$vtype = $_POST['vtype'];
$vid = $_POST['vid'];
$qry= "update mastervehicle set vtype='$vtype' where vid='$vid'";
mysqli_query($con,$qry);
header('location:../vehicle.php');
?>
</body>
</html>