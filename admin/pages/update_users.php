<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php

include('connection.php');
$uname = $_POST['uname'];
$type = $_POST['type'];
$ucontact = $_POST['ucontact'];
$uemail = $_POST['uemail'];
$upassword = $_POST['upassword'];
$uarea = $_POST['uarea'];
$ugender = $_POST['ugender'];
$users = $_POST['uid'];
 $qry= "update masterusers set uname='$uname',ucontact='$ucontact',uemail='$uemail',upassword='$upassword',uarea='$uarea',ugender='$ugender'where uid='$users'";
mysqli_query($con,$qry);
if($type==admin){
	header('location:../users.php');
}
else{
	header('location:../../userprofile.php');
}
?>
</body>
</html>