<?php
$user_url = "http://localhost/php/vpsnew/admin/";
include('connection.php');

$qry= "select vid,vtype from mastervehicle";
$vehicle = mysqli_query($con,$qry);

$parkingid = $_GET['parkingid'];
$locationid = $_GET['locationid'];
?>

<html lang="en">
<head>
  <link href="<?php echo $user_url; ?>css/bootstrap.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="menu">
<?php include('menu.php');
$userid = $_SESSION['uid'];
?>

</div>

<div class="container">
	<div class=row>
		<div class="col-md-12">
		<br><br>
		<center>
		<h2 class="filegroup">ONLINE BOOKINGS FOR VECHILE RESERVATIONS</h2>
		</center>
		<br><br>
		</div>
	</div>
		<br><br><br>
	<div class="row">
		<div class="col-md-8">		
		</div>
	
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-body">
				<center>
				<h3>Find parking in seconds</h3>
				</center>
				<hr>
				<br>
				<form method="POST" action="insertbooking.php">
						 <div class="form-group">
						<input type="hidden" value="<?php echo $userid; ?>" name="t1">
						</div>
						<div class="form-group">
						<input type="hidden" value="<?php echo $parkingid; ?>" name="t8">
						</div>
						<div class="form-group">
						<input type="hidden" value="<?php echo $locationid; ?>" name="t9">
						</div>
						<div class="form-group">
						<label>Vehicle Type</label>
						<select class="form-control" name="t2" required>
						<option value=''>--- Select Vehicle ---</option>
						<?php
						
							while($vh = mysqli_fetch_assoc($vehicle)) 
							{
							echo"<option value='".$vh['vid']."'>".$vh['vtype']."</option>";
							}
						?>
						</select>
						<br><br>
						</div>
					
						<div class="form-group">
						<label>Vehicle Number</label>
						<input type="text" class="form-control" name="t3" required><br>
						<br>			
						</div>

						<div class="form-group">
						<label>Booking Date</label>
						<input type="date" class="form-control" name="t4" required><br>
						<br>
						</div>

						<div class="form-group">
						<label>Time From</label>
						<input type="time" class="form-control" name="t5" required><br>
						<br>
						</div>

						<div class="form-group">
						<label>Time To</label>
						<input type="time" class="form-control" name="t6" required><br>
						<br>
						</div>
						
						<div class="form-group">
						<label>Reason</label><br>
						<textarea autofocus rows="4" cols="43" name="t7" required>
						</textarea>
						<br><br><br>
						</div>
						<center>
						
						<button type="submit" class="btn btn-success btn-md" style:width="60px"> BOOK NOW </button>
						</center>
	
				</form>
				</div>
			</div>
	
</body>
</html>
