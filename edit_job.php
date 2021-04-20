<?php
require "conn_job.php";

$Username=$_POST["Username"];
$Usertype=$_POST["Usertype"];
$Assignment=$_POST['Assignment'];
$House=$_POST["House"];
$Location=$_POST["Location"];
$Tenant_tel_no=$_POST["Tenant_tel_no"];
$Job=$_POST["Job"];
$Location_in_house=$_POST["Location_in_house"];

$oldAssignment=$_POST['oldAssignment'];

/*
$House="test";
$House_Area=$_POST["House_Area"];
$Tenant_tel_no=$_POST["Tenant_tel_no"];
$Job=$_POST["Job"];
$Location=$_POST["Location"];
;*/
//need better indicator
$Edit="UPDATE `phpjob` SET `Assignment`='$Assignment', `Location`='$Location', `Tenant_tel_no`='$Tenant_tel_no', `Job`='$Job', `Location_in_house`='$Location_in_house' WHERE `Username`LIKE'$Username' AND `Usertype`LIKE'$Usertype' AND `Assignment`LIKE'$oldAssignment' AND `House`LIKE'$House'";
$result=mysqli_query($conn, $Edit);

if($result){
    echo "Successfully update";
}
else{
    echo "Connection Error";
}   

?>