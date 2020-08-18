
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css">
<body>

<?php
session_start();
$user_url = "http://localhost/vps/";
include('connection.php');

echo  $id=$_POST['t6'];

$qry= "select * from masterparkings where pcity='$city' and parea='$area'";
$rs= mysqli_query($con,$qry);

//echo $qry;

//echo $rs;
//$_SESSION=$num;

//echo $num;

          
              $a=0;
              for($i=1; $i<=25; $i++)
              {
              while($row=mysqli_fetch_assoc($rs))
              {
                $a++;
                $pid = $row['pid'];
                echo"<a class='' href='booking.php?parkingid=$pid'><div class='col-md-2'>
                <div class='abooking'>
                <h4 class='text-center'>Parking ".$row['pid']."</h4>
                </div></div></a>";
                if($a >= 6)
                {
                echo"<div class='clearfix'></div><br>";
                $a=0;
                }
              }
          }
          header('location:parkingcube.php');


               ?>
        
<?php 
/*
            
              $num=3; 
              $a=0;
              for($i=1; $i<=3; $i++)
             { 
                //$a++;
                echo"<a class='#' href='booking.php'>
                <div class='row'>
                <div class='col-md-8'>
                <div class='abooking'>
                <h4 class='text-center'>CP".$i."</h4></div>
                </div></div></a>";
                  if($a >= 6)
                  {
            
                    echo"<div class='clearfix'></div><br>";
                    //$a=0;
                  
              }
              */
              
?> 


<?php
//session_start();
//include('connection.php');


//$uvcity=$_POST['t6'];
//$uvarea=$_POST['t7'];


//$qry ="select pid, pcity, parea from masterparkings where pcity='bhilai' and parea='nn' ";
//$rs = mysql_query($qry);
//$num=mysql_num_rows($rs);

//$_SESSION['$num']=$num;
//header('location:parking.php');
?>

</body>
</head>
</html>