<?php 
$user_url = "http://localhost/php/vpsnew/admin/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link href="<?php echo $user_url; ?>css/bootstrap.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
<div class="row" style="background:#ccc">
<div class="col-md-12">
   <h3 class="text-center">Vehicle Parking System</h3>
</div>
</div>
<br><br>
<div class="row">
   <div class="col-md-8">
   </div>


<div class="col-md-4">
<div class="panel panel-info">
<div class="panel-body">
<h4 class="text-center">User Login</h4> <hr>
      
       
     <form action="logincheck.php" method="post">
      

       <div class="form-group">
	     <label>Email ID</label>
	     <input type="email" required class="form-control" name="t1">
       </div>

       <div class="form-group">
	     <label>Password</label>
	     <input type="password" required class="form-control" name="t2">
       </div>

       <button type="submit" class="btn btn-info btn-block">Login</button>
       <br>
       <?php
          
          if(!empty($_GET['err']) && $_GET['err'] == 2)
       {
      
        echo "<h5 style='text-center'><font color='red'><b>!Email id password does not exists</b></font></h5>";
    
       }    
       ?>
       <h4>New User?  <span class="pull-right"><a href="register.php">Register</a></span></h4>
      
       </form>
      </div>
    </div>   
   </div>
</div>

</div>        

</body>
</html>