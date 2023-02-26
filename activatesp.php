<?php
$id=$_GET["id"];
include_once 'dbfun.php';

$link= connect();
$query="update serviceproviders set isactive=1 where id=$id";
mysqli_query($link,$query) or die("Error ".mysqli_error($link));

$_SESSION["msg"]="service provider activated successfully";
header("location: serviceproviders.php");
