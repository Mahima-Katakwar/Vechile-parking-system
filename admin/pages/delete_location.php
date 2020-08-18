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
$qry= "delete from masterlocation where lid='$user'";
mysqli_query($con,$qry);
header('location:../location.php');
?>
</body>
</html>