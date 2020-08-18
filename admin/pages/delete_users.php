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
$qry= "delete from masterusers where uid='$user'";
mysqli_query($con,$qry);
header('location:../users.php');
?>
</body>
</html>