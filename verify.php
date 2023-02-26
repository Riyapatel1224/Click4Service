<?php

extract($_POST);
include_once 'dbfun.php';

$link= connect();
if($role=="student"){
    $query="SELECT name from students where rollno='$id'";
}
else if($role=="lecturer"){
    $query="SELECT name from teachers where tid='$id'";
}

$result= mysqli_query($link, $query) or die("Error ". mysqli_error($link));

if($row= mysqli_fetch_assoc($result)){
    echo $row["name"];
}
else{
    echo "Invalid";
}
