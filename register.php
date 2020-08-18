<?php
$user_url = "http://localhost/php/vpsnew/admin/";
include('connection.php');

$qru="select lid,larea from masterlocation";
$locate= mysqli_query($con,$qru);
?>

<?php
          if(!empty($_GET['err']) && $_GET['err'] == 2)
       {      
        echo "<h5 style='text-center'><font color='red'><b>!Email id  already  exists</b></font></h5>";    
       }    
?>

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
	</div><br><br>
	<div class="row">
		<div class="col-md-8">
		</div>
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-body">
					<h4 class="text-center">User Registration</h4> <hr>
					<form action="registercheck.php" method="post">
						<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" name="t1" required>
						</div>

						<div class="form-group">
						<label>Contact</label>
						<input type="text" class="form-control" name="t2" required>
						</div>

						<div class="form-group">
						<label>Email ID</label>
						<input type="email" class="form-control" name="t3" required>
						</div>
						

						<div class="form-group">
						<label>Password</label>
						<input type="text" class="form-control" name="t4" required>
						</div>

						<div class="form-group">
						<label>Area</label>
						<select class="form-control"  name="t7" required>
						<option value="">--- Select Area ---</option>
						<?php
							while($lh= mysqli_fetch_assoc($locate)) 
							{
							echo"<option value='".$lh['lid']."'>".$lh['larea']."</option>";
							}
						?>
						</select>
						</div>

						<button type="submit" class="btn btn-info btn-block">Register</button>
						<h4>Existing User???  <span class="pull-right"><a href="index.php">Login</a></span></h4>
					</form>
				</div>
			</div>   
		</div>
	</div>
</div>    
</body>
</html>


