<?php

include('connection.php');
$upic = $_FILES['file']['name'];
$users = $_POST['uid'];
$qry= "update masterusers set upic='$upic' where uid='$users'";
 mysqli_query($con,$qry);

if(isset($_POST['Submit1']))
{ 
$filepath = "../../upload/" . $upic;
 
if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
	//header('location:edit_users.php');
	
	if($type==admin){
	header('location:../users.php?uid=$id&type=admin');
	}
	else{
		header('location:edit_users.php?uid='.$users.'&type=user');
	}
} 
else 
{
	echo "Error !!";
}
} 
?>