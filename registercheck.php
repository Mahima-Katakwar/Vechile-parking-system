<?php
include('connection.php');
session_start();
$uname=$_POST['t1'];
$ucontact=$_POST['t2'];
$umail=$_POST['t3'];
$upass=$_POST['t4'];
$uvarea=$_POST['t7'];
//$pass=$_POST['t2'];
print_r($_POST);
$qry="Select * from masterusers where uemail='$umail' ";
$rs=mysqli_query($con,$qry);
$num=mysqli_num_rows($rs);

if($num>=1)
{
    header('location:register.php?err=2');
    
}
else
{
$qry="insert into masterusers(uname, ucontact, uemail, upassword,uarea) 
values('$uname', '$ucontact', '$umail','$upass','$uvarea')";
mysqli_query($con,$qry);
$qry="Select * from masterusers where uemail='$umail' and upassword='$upass'";
$rs=mysqli_query($con,$qry);
$num=mysqli_num_rows($rs);

if($num>=1)
{
    $result=mysqli_fetch_assoc($rs);
    $_SESSION['uid']= $result['uid'];
    //header('location:parkingget.php');
    header('location:index.php');
    
}
else
{
    header('location:index.php?err=2');
}

}