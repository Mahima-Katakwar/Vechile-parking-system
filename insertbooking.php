<?php

session_start();
 include('connection.php');
 

 $id=$_POST['t1'];
 $parking=$_POST['t8'];
 $locate=$_POST['t9'];
 $bvtype=$_POST['t2'];
 $bvno=$_POST['t3'];
 $bdate=$_POST['t4'];
 echo $bstart=$_POST['t5'];
 echo $bend=$_POST['t6'];
 echo $breason=$_POST['t7'];

 $qry="insert into transbookings(userid,parkingid,locationid,bvtype,bvehicleno,bdate,bintime,bouttime,breason,bstatus)
 values('$id','$parking','$locate','$bvtype', '$bvno','$bdate','$bstart','$bend','$breason','booked')";

mysqli_query($con,$qry);

echo $qry;
header('location:user.php');
print_r($_POST);
?> 
