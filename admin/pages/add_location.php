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

<center><h1>ADD LOCATION</h1></center>
<div class="row">
	<div class="col-md-12">
		<div class="col-md-6">
			<form action="insert_location.php" method="post">
			COUNTRY<input type="text" name="country" class="form-control" >
			<BR>
			STATE<input type="text" name="state" class="form-control" >
			<BR>
			CITY<input type="text" name="city" class="form-control" >
			<BR>
			AREA<input type="text" name="area" class="form-control" >
			<br>

			<button type="submit" >UPDATE NEW</button>
			</form>
		</div>
	</div>
</div>


</body>
</html>