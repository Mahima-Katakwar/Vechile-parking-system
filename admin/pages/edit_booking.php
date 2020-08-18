<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include('../connection.php');
$bookingId =$_GET['bookingId'];
$type =$_GET['type'];
if($type=='admin'){
		include('../menu.php');
		}
		else{
		include('../../menu.php');
		}
$qry ="select * from transbookings where id='$bookingId'";
$rs = mysqli_query($con,$qry);
$record = mysqli_fetch_assoc($rs);
//print_r($record)
?>
<div class="container">
	<div class="row" style="background:#ccc">
			<div class="col-md-12">
			<h3 class="text-center">Edit Booking Detail</h3>
			</div>
	</div><br><br>
<div class="row">
	<div class="col-md-12">
		<div class="col-md-6">
			<form action="update_booking.php" method="post">
			<input type="hidden" name="bookingId" value="<?php echo $bookingId ?>">
			<input type="hidden" name="type" value="<?php echo $type ?>">
			<!-- <input type="text" name="userid" class="form-control" value="<?php echo $record['userid'] ; ?>">NAME
			<BR><BR> -->
			Booking_Date <input type="date" name="bdate" class="form-control" value="<?php echo $record['bdate'] ; ?>">
			<BR>
			IN_TIME	<input type="time" name="bintime" class="form-control" value="<?php echo $record['bintime'] ; ?>">
			<BR>
			OUT_TIME<input type="time" name="bouttime" class="form-control" value="<?php echo $record['bouttime']; ?>">
			<BR>
			VEHICLE_NO	<input type="text" name="bvehicleno" class="form-control" value="<?php echo $record['bvehicleno']; ?>">
			<br>
			STATUS	<input type="text" name="bstatus" class="form-control" value="<?php echo $record['bstatus']; ?>">
			<br>
			<button type="submit" >UPDATE NEW</button>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>