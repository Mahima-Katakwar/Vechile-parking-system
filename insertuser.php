<?php
	include('connection.php');
	$uname=$_POST['t1'];
	$ucontact=$_POST['t2'];
	$umail=$_POST['t3'];
	$upass=$_POST['t4'];
	$uvarea=$_POST['t7'];
	
	$target = "../../assets/";
	move_uploaded_file($_FILES['upic']["tmp_name"], $target.$upic); 
	$qry="insert into masterusers(uname, ucontact, uemail, upassword,uarea) 
values('$uname', '$ucontact', '$umail','$upass','$uvarea')";
mysqli_query($con,$qry);
?>