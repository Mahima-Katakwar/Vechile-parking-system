<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet">
<title>Untitled Document</title>
</head>

<body>

<?php
$vtype = $_POST['vtype'];
include('connection.php');
$qry ="insert into mastervehicle(vtype) values('$vtype')";
mysqli_query($con,$qry);
header('location:../vehicle.php');
?>

</body>
</html>