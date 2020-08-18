<?php
//print_r($_SESSION);
$user_url = "http://localhost/vps/";
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link href="<?php echo $user_url; ?>css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css">

  <script src="jquery.js" type="text/javascript">
  </script>
</head>
<body>
  <div class="menu">
<?php include('menu.php');?>

</div>
<!-- $_SESSION["num"];
<?php 

print_r('$_SESSION');
?> -->
<form action="#" method="POST">
<div class="container">


<br><br>
<div class="row">

<div class="col-md-12">             
             <?php 
             if(isset($_POST['t6']))
             {
              $locationid=$_POST['t6'];
            }
            else{
              header('location:parkingget.php');
            }
              $a=0;
              for($i=1; $i<=20; $i++)
              { 
                 $a++;
               
               echo"<a class='' href='booking.php?parkingid=".$i."&locationid=".$locationid."'><div class='col-md-2'>
                  <div class='abooking'>
                    <h4 class='text-center'>CP".$i."</h4>
                    </div></div></a>";
         
             
              if($a >= 6){
             
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
</div>        
</body>
<br>       

<script>
  $(document).ready(function(){
    $("button").click(function(){
      alert('Available Parking Spaces');        
    });     
  });
</script>
          
</html>