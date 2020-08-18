<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php 
	$user_url = "http://localhost/vps/";
	include('connection.php');
	$user =$_GET['uid'];
	$type =$_GET['type'];

		if($type=='admin'){
		include('../menu.php');
		}
		else{
		include('../../menu.php');
		}

$qry ="select * from masterusers inner join masterlocation on masterusers.uarea=masterlocation.lid 
where uid='$user'";
$qrz="select lid,larea from masterlocation";
$location= mysqli_query($con,$qrz);
$rs = mysqli_query($con,$qry);
$record = mysqli_fetch_assoc($rs);
//print_r($record)
?>
<div class="container">
	<div class="row" style="background:#ccc">
		<div class="col-md-12">
			<h3 class="text-center">Edit User Detail</h3>
		</div>
	</div><br><br>
	<div class="col-md-12">
		<div class="col-md-6" style="float:left; width:40%;">
			<form action="upload_image.php" enctype="multipart/form-data" method="post">
			<input type="hidden" name="uid" value="<?php echo $user ?>">
			<input type="hidden" name="type" value="<?php echo $type ?>">
			Select image :<br><br>
			<input type="file" name="file"><br><br>
			<input type="submit" value="Upload" name="Submit1"> <br><br>
			<img src="<?php echo $user_url; ?>upload/<?php echo $record['upic'] ;?>" height=200 width=300>
			</form>
		</div><br><br>
		<div class="col-md-6" style="float:left; width:60%;">
			<form action="update_users.php" method="post">
			<input type="hidden" name="uid" value="<?php echo $user ?>">
			<input type="hidden" name="type" value="<?php echo $type ?>">
			NAME<input type="text" name="uname" class="form-control" value="<?php echo $record['uname'] ; ?>">	
			<BR>
			CONTACT<input type="text" name="ucontact" class="form-control" value="<?php echo $record['ucontact'] ; ?>">		
			<BR>
			EMAIL<input type="text" name="uemail" class="form-control" value="<?php echo $record['uemail']; ?>">	
			<BR>
			PASSWORD<input type="text" name="upassword" class="form-control" value="<?php echo $record['upassword']; ?>">
			<BR>
			GENDER	<input type="text" name="ugender" class="form-control" value="<?php echo $record['ugender']; ?>">	
			<BR>
			AREA<select class="form-control"  name="uarea">
							<option value="">--- Select Area ---</option>
							<?php
								while($lh = mysqli_fetch_assoc($location)) 
								{?>
								<option <?php if($record['uarea']==$lh['lid']){ ?> selected="selected" <?php }?> value="<?php echo $lh['lid']; ?>"><?php echo $lh['larea'];?></option>;
								<?php }
							?>
							</select><br>
			<button type="submit" >UPDATE NEW</button>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>