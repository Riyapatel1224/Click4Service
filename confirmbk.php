<?php
include_once 'dbfun.php';
$bid=$_GET["bid"];

$query="update booking set status='Confirmed' where id='$bid'";

$link=connect();
mysqli_query($link,$query);

$_SESSION['msg']="Booking confirmed successfully";

header("location: spbookings.php");