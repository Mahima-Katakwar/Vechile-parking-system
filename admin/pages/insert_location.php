<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet">
<title>Untitled Document</title>
</head>

<body>

<?php
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$area = $_POST['area'];

include('connection.php');
$qry ="insert into masterlocation(lcountry,lstate,lcity,larea) values('$country','$state','$city','$area')";
mysqli_query($con,$qry);
header('location:../location.php');
?>

</body>
</html>