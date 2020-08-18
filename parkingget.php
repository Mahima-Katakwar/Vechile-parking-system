<?php
$user_url = "http://localhost/vps/";
include('connection.php');

$qrz="select lid,lcity,larea from masterlocation";
$location= mysqli_query($con,$qrz);

$qru="select lid,larea from masterlocation";
$locate= mysqli_query($con,$qru);
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
  <form action="parkingcube.php" method="POST">
    <div class="container">
      <br><br>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
  						<label>Area</label>
  						<select class="form-control"  name="t6" required>
  						<option value="">--- Select Area ---</option>
  						<?php
  							while($lh= mysqli_fetch_assoc($locate)) 
  							{
  							echo"<option value='".$lh['lid']."'>".$lh['larea']."</option>";
  							}
  						?>
  						</select>
  					</div>
          </div>         

          <div class="col-md-6">
                <div class="form-group"> <label>Submit</label>    
                <button type="submit" class="btn btn-info btn-block">GO</button>
                </div>
          </div>  
      </div>
    </div>            
               <?php 
               /*
                $qry ="select pid, pcity, parea from masterparkings where pcity='bhilai' and parea='nn' ";
                $rs = mysql_query($qry);
                $num=mysql_num_rows($rs);
                $a=0;
                for($i=1; $i<=$num; $i++)
               { 
                  $a++;
                  echo"<a class='#' href='booking.php'>
                  <div class='row'>
                  <div class='col-md-12'>
                  <div class='abooking'>
                  <h4 class='text-center'>CP".$i."</h4></div>
                  </div></div></a>";
                    if($a >= 6)
                    {
              
                      echo"<div class='clearfix'></div><br>";
                      $a=0;
                    }
                }
                */
                 ?>

    </form>        
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