<!DOCTYPE html>
<html lang="en">
<head>
  <link href="<?php echo $user_url; ?>css/bootstrap.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="menu">
<?php 
$user_url = "http://localhost/vps/";
include 'menu.php';?>
</div>



<div class="container">
<div class=row>
<div class="col-md-12">
<br>
<br>
<center>
<h2 class="filegroup">FORGOT USERNAME OR PASSWORD ?</h2>
</center>
</div>

<div class="col-md-12">
<br>
<br>
<br>
<h3 class="control-label col-sm-3">email address :</h3>
<div class="col-sm-6 ">
<br>
<input class="with-status-border form-control" maxlength="60" type="text">
</div>
</div>
</div>
</div>

<div class="col-sm-offset-3 col-sm-9">
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-primary btn-lg" id="submit_button" name="submit_button" type="submit" value="Submit" style="height:50px;width:150px" > 
</div>
</body>
</html>