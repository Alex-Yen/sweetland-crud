<?php
require "conn.php";

$username=$_POST["username"];
$password=$_POST["password"];
$usertype=$_POST["usertype"];

/*$username="admin";
$password="admin";
$usertype="admin";*/

if($conn){
    if(strlen($password)>20 || strlen($password)<0){
        echo"Password must be more than 0 and less than 20";
    }
    else{
        $sqlCheckUsername="SELECT*FROM`phpreg`WHERE`username`LIKE'$username'";
        $usernameQuery=mysqli_query($conn, $sqlCheckUsername);
               
        if(mysqli_num_rows($usernameQuery)>0){
            echo"Username already been used, type another one";
        }
        else{
            $sql_register="INSERT INTO `phpreg`(`username`, `password`, `usertype`)VALUE('$username','$password','$usertype')";

            if(mysqli_query($conn, $sql_register)){
                echo"Registering New Account";
            }
            else{
                echo"Failed to register";
            }

        }
    }

}
else{
    echo"Connection error";
}
?>