
<?php

include('../connection.php');
?>

<?php
$bookingId = $_POST['bookingId'];
$type = $_POST['type'];
$bdate = $_POST['bdate'];
$bintime = $_POST['bintime'];
$bouttime = $_POST['bouttime'];
$bvehicleno = $_POST['bvehicleno'];
$bstatus = $_POST['bstatus'];
$user = $_POST['id'];
$qry= "update transbookings set bdate='$bdate',bintime='$bintime',bouttime='$bouttime',bvehicleno='$bvehicleno',bstatus='$bstatus' where id='$bookingId'";
mysqli_query($con,$qry);
if($type==admin){
	header('location:../index.php');
}
else{
	header('location:../../user.php');
}
?>