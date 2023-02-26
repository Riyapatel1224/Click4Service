<?php
$id=$_GET["id"];
include_once 'dbfun.php';

$link= connect();
$query="update users set isverified=1 where id=$id";
mysqli_query($link,$query) or die("Error ".mysqli_error($link));

$_SESSION["msg"]="user verified successfully";
header("location: users.php");
