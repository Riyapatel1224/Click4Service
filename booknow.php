<?php
include_once 'dbfun.php';
$userid=$_SESSION['id'];
$serviceid=$_GET['sid'];
$spid=$_GET['spid'];

$query="insert into booking(service_id,sp_id,user_id,bdate,status) values('$serviceid','$spid',$userid,now(),'Pending')";
$link=connect();
mysqli_query($link,$query);
$_SESSION["msg"]="Booked successfully";
header('location: mybookings.php');
