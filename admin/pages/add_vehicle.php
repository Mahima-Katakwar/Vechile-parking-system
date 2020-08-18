<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet">

</head>

<body>
<?php
include('../menu.php');
?>

<center><h1>ADD RECORD</h1></center>
<div class="row">
	<div class="col-md-12">
		<div class="col-md-6">
			<form action="insert_vehicle.php" method="post">
			<label>VEHICLE TYPE</label>
			<input type="text" name="vtype" class="form-control" ><br>
			<button type="submit" >UPDATE NEW</button>
			</form>
		</div>
		
	</div>
</div>

</body>
</html>