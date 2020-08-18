<?php
$admin_url = "http://localhost/vps/admin/";
?>

<!doctype html>
<html>
<head>
  <link href="<?php echo $admin_url; ?>css/bootstrap.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="menu">
	<?php include 'menu.php';
	?>
	</div>
	<div class="container">
	<div class="row" style="background:#ccc">
		<div class="col-md-12">
		<h3 class="text-center">Booking Details</h3>
		</div>
	</div>
	<br><br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-9">
			<div class="panel panel-info">
				<div class="panel-body">

					<table class="table table-bordered table-hover">
					<thead>
					<th><h4 class="text-center">S no. </h4></th>
					<th><h4 class="text-center"> user_name </h4></th>
					<th><h4 class="text-center"> booking_date </h4></th>
					<th><h4 class="text-center"> in_time </h4></th>
					<th><h4 class="text-center"> out_time </h4></th>
					<th><h4 class="text-center"> vehicle_type </h4></th>
					<th><h4 class="text-center"> vehicle_no. </h4></th>
					<th><h4 class="text-center"> status </h4></th>
					<th><h4 class="text-center">Action</h4></th>
					</thead>
					<tbody>
					<?php
					include('connection.php');
					$qry ="select * from transbookings 
					inner join masterusers on transbookings.userid=masterusers.uid 
					inner join mastervehicle on transbookings.bvtype=mastervehicle.vid
					order by transbookings.id desc";
					$rs = mysqli_query($con,$qry);
					$i = 1;
					while($row = mysqli_fetch_assoc($rs))
					{
						$id = $row['id'];
					echo"
					<tr>
					<td>".$i."</td>
					<td>".$row['uname']."</td>
					<td>".$row['bdate']."</td>
					<td>".$row['bintime']."</td>
					<td>".$row['bouttime']."</td>
					<td>".$row['vtype']."</td>
					<td>".$row['bvehicleno']."</td>
					<td>".$row['bstatus']."</td>
					<td><a href='pages/edit_booking.php?bookingId=$id&type=admin'>Edit</a>
					<a href='pages/delete_booking.php?bookingId=$id'>Delete</a></td>
					</tr>";	
					$i++;
					}

					?>
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>