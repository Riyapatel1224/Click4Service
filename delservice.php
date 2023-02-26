<?php
$id=$_GET["id"];
include_once 'dbfun.php';

$link= connect();
$query="delete from services where id=$id";
mysqli_query($link,$query) or die("Error ".mysqli_error($link));

$_SESSION["msg"]="service deleted successfully";
header("location: services.php");
