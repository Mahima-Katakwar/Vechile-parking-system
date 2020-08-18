<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php

include('connection.php');
$lcountry = $_POST['lcountry'];
$lstate = $_POST['lstate'];
$lcity = $_POST['lcity'];
$larea = $_POST['larea'];
$lid = $_POST['lid'];
$qry= "update masterlocation set lcountry='$lcountry',lstate='$lstate',lcity='$lcity',larea='$larea' where lid='$lid'";
mysqli_query($con,$qry);
header('location:../location.php');
?>
</body>
</html>