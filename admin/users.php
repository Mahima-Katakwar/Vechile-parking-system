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
			<h3 class="text-center">User Details</h3>
		</div>
	</div>
	<br><br>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<div class="panel panel-info">
<div class="panel-body">


<table class="table table-bordered table-hover">
<thead>
<th>Sno.</th>
<th>name</th>
<th>contact</th>
<th>email</th>
<th>password</th>
<th>state</th>
<th>city</th>
<th>area</th>
<th>pic</th>
<th>gender</th>
<th>edit</th>
<th>delete</th></thead>
<tbody>
<?php
include('connection.php');
$qry ="select * from masterusers
inner join masterlocation on masterusers.uarea=masterlocation.lid 
";
$rs = mysqli_query($con,$qry);
//$row = mysql_fetch_array($rs,MYSQL_ASSOC);   TO SHOW SINGLE LINE
//to show multiple collum 
$i=1;
while($row = mysqli_fetch_assoc($rs))
{
	$id = $row['uid'];
echo"
<tr>
<td>".$i."</td>
<td>".$row['uname']."</td>
<td>".$row['ucontact']."</td>
<td>".$row['uemail']."</td>
<td>".$row['upassword']."</td>
<td>".$row['lstate']."</td>
<td>".$row['lcity']."</td>
<td>".$row['larea']."</td>
<td>".$row['upic']."</td>
<td>".$row['ugender']."</td>
<td><a href='pages/edit_users.php?uid=$id&type=admin'>edit</a></td>
<td><a href='pages/delete_users.php?uid=$id'>delete</a></td>
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

