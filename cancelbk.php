<?php
include_once 'dbfun.php';
$bid=$_GET["bid"];

$query="update bookings set status='Cancelled' where id='$bid'";

$link=connect();
mysqli_query($link,$query);

$_SESSION['msg']="Booking cancelled successfully";

header("location: spbookings.php");

