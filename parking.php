<?php
session_start();
include('connection.php');

$city = $_SESSION['city'];
$area = $_SESSION['area'];

$qry= "select * from masterparkings where pcity='$city' and parea='$area'";
$rs= mysqli_query($con,$qry);
?>
<html lang="en">
<head>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<form action="booking.php" method="POST">
<div class="container">
<div class="row" style="background:#ccc">
<div class="col-md-12">
   <h3 class="text-center">Vehicle Parking System</h3>
</div>
</div>
<br><br>
<div class="row">
   <div class="col-md-12">
       <div class="panel panel-info">
          <div class="panel-body">
              <?php 
              $a=0;
              
              
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
        


               ?>
               </form>
          </div> 
       </div>   
   </div>
   
</div>

</div>        

</body>
</html>
