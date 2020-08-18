<!DOCTYPE html>
<html lang="en">
<head>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="menu">
<?php include 'menu.php';?>
</div>



<div class="container">
<div class="row">
<div class="col-md-12">
<center>
<h2>CREATE A NEW ACCOUNT</h2>
</center>
</div>
<div class="col-md-4">
  
<br><br><br><br>
	<form action="addrecord.php" method="post">
    <div class="form-group">
	<label>NAME OF CUSTOMER</label>
	<input type="text" class="form-control"><br>
	<label>EMAIL ADDRESS</label><input type="text" class="form-control"><br>
	<label>USERNAME</label><input type="text" class="form-control"><br>
    <label>PASSWORD</label><input type="text" class="form-control"><br>
    
    <div class="form-control-static">We do not send out newsletters. We will send you a few automated emails during the trial period to assist you in the trial. We also send out automated emails with important information about your account (expiry etc.)</div>
	<br>
	
    &nbsp;&nbsp;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="btn btn-primary btn-l">Create Account</button>
	</div>
	</form>
</div>
    
</div>
</div>        

</body>
</html>
