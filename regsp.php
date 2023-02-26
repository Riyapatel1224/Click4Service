<?php
include 'dbfun.php';

extract($_POST);

$link= connect();
$query="insert into serviceproviders(name,email,experience,service_id,phone,password,isverify,isactive) values('$name','$email','$experience','$service_id','$phone','$pwd',0,0)";

mysqli_query($link, $query) or die("Error ". mysqli_error($link));

$_SESSION["msg"]="Service Provider registered successfully..";

header("location: login.php");
