<?php
include('connection.php');
session_start();
$email=$_POST['t1'];
$pass=$_POST['t2'];

$qry="Select * from masterusers where uemail='$email' and upassword='$pass'";
$rs=mysqli_query($con,$qry);
$num=mysqli_num_rows($rs);

if($num>=1)
{
    $result=mysqli_fetch_assoc($rs);
    $_SESSION['uid']= $result['uid'];
    header('location:parkingget.php');

}
else
{
    header('location:index.php?err=2');
}