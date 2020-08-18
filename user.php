<?php 
$user_url = "http://localhost/vps/";
include('connection.php');

?>
 <html>
<head>
<link href="<?php echo $user_url; ?>css\bootstrap.css" rel="stylesheet">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="menu">
<?php include 'menu.php';
$user =$_SESSION['uid'];
?>

</div>

<div class="container">
	<div class="row" style="background:#ccc">
		<div class="col-md-12">
		<h3 class="text-center">User Booking Details</h3>
		</div>
	</div>
	<br><br>
	
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-hover">
			<thead>
		<th><h4 class="text-center">S no. </h4></th>
		<th><h4 class="text-center">Location </h4></th>
		<th><h4 class="text-center">Parking No. </h4></th>
		<th><h4 class="text-center">Vehicle type</h4></th>
		<th><h4 class="text-center">Vehicle no. </h4></th>
		<th><h4 class="text-center">Booking Date</h4></th>
		<th><h4 class="text-center">Time From</h4></th>
		<th><h4 class="text-center">Time To</h4></th>
		<th><h4 class="text-center">Reason </h4></th>
		<th><h4 class="text-center">Status</h4></th>
		<th><h4 class="text-center">Options</h4></th>

		</thead>
		<tbody>
		
		<br>

		<?php

			$qry ="select * from transbookings 
			inner join masterlocation on transbookings.locationid=masterlocation.lid 
			inner join mastervehicle on transbookings.bvtype=mastervehicle.vid where transbookings.userid='$user' 
			order by transbookings.id desc";
			$rs = mysqli_query($con,$qry);
			$i=1;
			while($row = mysqli_fetch_assoc($rs))
			{
				$id = $row['id'];
				echo"
				<tr>
				<td>".$i."</td>
				<td>".$row['larea']."</td>
				<td>CP".$row['parkingid']."</td>
				<td>".$row['vtype']."</td>
				<td>".$row['bvehicleno']."</td>
				<td>".$row['bdate']."</td>
				<td>".$row['bintime']."</td>
				<td>".$row['bouttime']."</td>
				<td>".$row['breason']."</td>
				<td>".$row['bstatus']."</td>
				<td><a href='admin/pages/edit_booking.php?bookingId=$id&type=user'>Edit</a></td>
				</tr>";	
				$i++;
			}

		?>
		</tbody>
		</table>
		

</div>
</div>
</div>
</body>
</html>

