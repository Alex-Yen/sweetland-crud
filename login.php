<?php
require "conn.php";

$username=$_POST["username"];
$password=$_POST["password"];

/*$username="tester00";
$password="tester";*/

if($conn){
    if(strlen($password)>20 || strlen($password)<0){
        echo"Password must be more than 0 and less than 20";
    }
    else{
        $sqlCheckLogin="SELECT*FROM`phpreg`WHERE`username`LIKE'$username' AND`password`LIKE'$password'";
        $usernameQuery=mysqli_query($conn, $sqlCheckLogin);
 
        if(mysqli_num_rows($usernameQuery)>0) {
            $row = $usernameQuery->fetch_assoc();
            echo"Welcome, ".$row["usertype"];
        }
        else{
            echo"Wrong username or password";
        }
    }
}
else{
    echo"Connection error";
}
?>