<?php
$user_url = "http://localhost/php/vpsnew/";
$admin_url = "http://localhost/php/vpsnew/admin/";
include('connection.php');
session_start();
if(empty($_SESSION['uid'])){
   header('location:index.php');
  }
$user =$_SESSION['uid'];
$qry ="select * from masterusers where uid='$user'";
$rs = mysqli_query($con,$qry);
$record1= mysqli_fetch_assoc($rs);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="<?php echo $user_url; ?>css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>Untitled Document</title>
</head>
<body>
<div class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">VPS</a>
    </div>
    <ul class="nav navbar-nav  navbar-left">
      <li class="active"><a href="<?php echo $user_url; ?>parkingget.php">HOME</a></li>
      <li><a href="<?php echo $user_url; ?>user.php">BOOKING HISTORY</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><img src="<?php echo $user_url; ?>upload/<?php echo $record1['upic'] ;?>" class="img-circle img-responsive" alt="" style="width:50px; height:50px;"></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo$record1['uname'];?> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $user_url; ?>userprofile.php">PROFILE</a></li>
            <li class="divider"></li>
            <li><a href='<?php echo $admin_url; ?>pages/edit_users.php?uid=<?php echo $user;?>&type=user'>EDIT PROFILE</a></li>
            <li class="divider"></li>
           <li><a href="<?php echo $user_url; ?>logout.php">LOGOUT</a></li>
          </ul>
        </li>
      </ul>
  </div>
</div>
</body>
</html>

<script>           
     $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
</script>