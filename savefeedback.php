<?php
include_once 'dbfun.php';
$link=connect();
extract($_POST);
$userid=$_SESSION['id'];
$query="insert into feedback(descr,booking_id,user_id,ratings,fdate) values('$descr','$bid','$userid','$rating',now())";
mysqli_query($link,$query);
$query="update booking set status='Completed' where id=$bid";
mysqli_query($link,$query);

$_SESSION['msg']='Feedback submitted';
header('location: mybookings.php');