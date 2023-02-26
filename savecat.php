<?php
extract($_POST);
include_once 'dbfun.php';

$link= connect();
$query="insert into category(name) values('$cname')";
mysqli_query($link,$query) or die("Error ".mysqli_error($link));

$_SESSION["msg"]="category added successfully";
header("location: categories.php");
