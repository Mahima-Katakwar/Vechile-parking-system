<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php

include('connection.php');
$bookingId =$_GET['bookingId'];
$qry ="delete from transbookings where id='$bookingId'";
mysqli_query($con,$qry);
header('location:../index.php');
?>
</body>
</html>