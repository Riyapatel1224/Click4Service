<?php
include 'dbfun.php';

extract($_POST);

$link= connect();
$query="insert into users(name,email,address,phone,region,password,isverified,isactive) values('$name','$email','$address','$phone','$region','$pwd',0,0)";

mysqli_query($link, $query) or die("Error ". mysqli_error($link));

$_SESSION["msg"]="User registered successfully..";

header("location: login.php");
