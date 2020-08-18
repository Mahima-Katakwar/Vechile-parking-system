<?php
$user_url = "http://localhost/vpsnew/";
include('connection.php');
?>
<html lang="en">
<head>
  <link href="<?php echo $user_url; ?>css/bootstrap.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="menu">
	<?php include 'menu.php';
	$user =$_SESSION['uid'];
	$qry ="select * from masterusers
inner join masterlocation on masterusers.uarea=masterlocation.lid
 where masterusers.uid='$user'";
$rs = mysqli_query($con,$qry);
$record = mysqli_fetch_assoc($rs);
	?>
	</div>
<div class="container">
	<div class="row" style="background:#ccc">
		<div class="col-md-12">
		<h3 class="text-center">User Information</h3>
		</div>
	</div><br><br>
	<div class="row">
		<div class="col-md-8">
			<p><span>NAME :	</span>
				<span><?php echo $record['uname'] ;?></span>
			</p>
			<p><span>CONTACT NO. :	</span>
				<span><?php echo $record['ucontact'] ;?></span>
			</p>
			<p><span>EMAIL-ID :	</span>
				<span><?php echo $record['uemail'] ;?></span>
			</p>
			<p><span>GENDER :	</span>
				<span><?php echo $record['ugender'] ?></span>
			</p>
			<p><span>STATE :	</span>
			<span><?php echo $record['lstate'] ;?></span>
			</p>
			<p><span>CITY :	</span>
			<span><?php echo $record['lcity'] ;?></span>
			</p>
			<p><span>AREA :	</span>
			<span><?php echo $record['larea'] ;?></span>
			</p>
			
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>
</body>
</html>
