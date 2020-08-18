<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include('connection.php');
include('../menu.php');
$user =$_GET['uid'];
$qry ="select * from masterlocation where lid='$user'";
$rs = mysqli_query($con,$qry);
$record = mysqli_fetch_assoc($rs);
//print_r($record)
?>
<div class="row">
	<div class="col-md-12">
		<div class="col-md-6">
			<form action="update_location.php" method="post">
			<input type="hidden" name="lid" value="<?php echo $user ?>">
			<label>COUNTRY</label><input type="text" name="lcountry" class="form-control" value="<?php echo $record['lcountry'] ; ?>">
			<BR>
			<label>STATE</label><input type="text" name="lstate" class="form-control" value="<?php echo $record['lstate'] ; ?>">
			<BR>
			<label>CITY</label><input type="text" name="lcity" class="form-control" value="<?php echo $record['lcity']; ?>">
			<BR>
			<label>AREA</label><input type="text" name="larea" class="form-control" value="<?php echo $record['larea']; ?>">
			<br>

			<button type="submit" >UPDATE NEW</button>
			</form>

</body>
</html>