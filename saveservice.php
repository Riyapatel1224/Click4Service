<?php
extract($_POST);
include_once 'dbfun.php';
$src = $_FILES["photo"]["tmp_name"];
$filename=$_FILES["photo"]["name"];
move_uploaded_file($src, "services/$filename");

$link= connect();
$query="insert into services(name,catid,img) values('$name','$catid','$filename')";
mysqli_query($link,$query) or die("Error ".mysqli_error($link));

$_SESSION["msg"]="service added successfully";
header("location: services.php");
