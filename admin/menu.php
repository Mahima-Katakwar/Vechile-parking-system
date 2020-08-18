<?php
$admin_url = "http://localhost/php/vpsnew/admin/";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="<?php echo $admin_url; ?>css/bootstrap.css" rel="stylesheet">
<title>Untitled Document</title>
</head>
<body>
<div class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">VEHICLE PARKING SYSTEM</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo $admin_url; ?>index.php">BOOKING</a></li>
      <li><a href="<?php echo $admin_url; ?>users.php">USERS</a></li>
      <li><a href="<?php echo $admin_url; ?>location.php">LOCATION</a></li>
      <li><a href="<?php echo $admin_url; ?>vehicle.php">VEHICLES</a></li>
      
    </ul>
  </div>
</div>
</body>
</html>