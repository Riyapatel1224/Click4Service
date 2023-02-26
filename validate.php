<?php

include_once 'dbfun.php';
extract($_POST);

$link= connect();

switch($role)
{
    case "A":
        $query="SELECT * FROM admin WHERE userid='$userid' and pwd='$pwd'";
        $result=mysqli_query($link, $query) or die("Error ". mysqli_error($link));
        if($row= mysqli_fetch_assoc($result)){
            $_SESSION["uname"]=$row["uname"];
            $_SESSION["userid"]=$row["userid"];
            $_SESSION["role"]=$role;
            $_SESSION["id"]=$row["id"];
            header("location: adminhome.php");
        }else{
            $_SESSION["error"]="Invalid username or password";
            header("location: login.php");
        }
            break;
    case "SP":
        $query="SELECT * FROM serviceproviders WHERE email='$userid' and password='$pwd' and isactive=1";
        $result=mysqli_query($link, $query) or die("Error ". mysqli_error($link));
        if($row= mysqli_fetch_assoc($result)){
            $_SESSION["uname"]=$row["name"];
            $_SESSION["userid"]=$row["email"];
            $_SESSION["role"]=$role;
            $_SESSION["id"]=$row["id"];
            header("location: spprofile.php");
        }else{
            $_SESSION["error"]="Invalid username or password";
            header("location: login.php");
        }
        break;
    case "U":
        $query="SELECT * FROM users WHERE email='$userid' and password='$pwd' and isactive=1";
        $result=mysqli_query($link, $query) or die("Error ". mysqli_error($link));
        if($row= mysqli_fetch_assoc($result)){
            $_SESSION["uname"]=$row["name"];
            $_SESSION["userid"]=$row["email"];
            $_SESSION["role"]=$role;
            $_SESSION["id"]=$row["id"];
            header("location: index.php");
        }else{
            $_SESSION["error"]="Invalid username or password";
            header("location: login.php");
        }
        break;
    default:
        $_SESSION["error"]="Invalid username or password";
        header("location: login.php");
        break;
}
    