<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include('../connection.php');
include('../menu.php');
$user =$_GET['uid'];
$qry ="select * from mastervehicle where vid='$user'";
$rs = mysqli_query($con,$qry);
$record = mysqli_fetch_assoc($rs);
// print_r($record)
?>
<div class="row">
	<div class="col-md-12">
		<div class="col-md-6">
			<form action="update_vehicle.php" method="post">
			<input type="hidden" name="vid" value="<?php echo $user ?>">
			<label>VEHICLE TYPE</label>
			<input type="text" name="vtype" class="form-control" value="<?php echo $record['vtype'] ; ?>">
			<BR>
			<button type="submit" >UPDATE NEW</button>
		</div>
			</form>
		</div>
</div>

</body>
</html>