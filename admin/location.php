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
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-6">
<div class="panel panel-info">
<div class="panel-body">

<h4><span class="pull-left"><button><a href="pages/add_location.php">Add Location</a></button></span></h4><br><br>
<table class="table table-hover table-bordered">
<thead>
<th><h4 class="text-center">&nbsp;l_id&nbsp;</h4></th>
<th><h4 class="text-center">&nbsp;country&nbsp;</h4></th>
<th><h4 class="text-center">state</h4></th>
<th><h4 class="text-center">city</h4></th>
<th><h4 class="text-center">area</h4></th>
<th><h4 class="text-center">edit</h4></th>
<th><h4 class="text-center">delete</h4></th>
</thead>
<tbody>
<?php
include('connection.php');
$qry ="select * from masterlocation";
$rs = mysqli_query($con,$qry);
//$row = mysql_fetch_array($rs,MYSQL_ASSOC);   TO SHOW SINGLE LINE
//to show multiple collum 
$i=1;
while($row = mysqli_fetch_assoc($rs))
{
	$id = $row['lid'];
echo"
<tr>
<td>".$i."</td>
<td>".$row['lcountry']."</td>
<td>".$row['lstate']."</td>
<td>".$row['lcity']."</td>
<td>".$row['larea']."</td>
<td><a href='pages/edit_location.php?uid=$id'>edit</a></td>
<td><a href='pages/delete_location.php?uid=$id'>delete</a></td>
</tr>";	
$i++;
}

?>
</tbody>
</table>
<br>

</div>
</div>
</div>
</div>
</div>
</body>
</html>