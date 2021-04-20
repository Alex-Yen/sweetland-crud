<?php
require "conn_job.php";

$Usertype=$_POST["Usertype"];
$Username=$_POST["Username"];
$Assignment=$_POST["Assignment"];
$House=$_POST["House"];
$Tenant_tel_no=$_POST["Tenant_tel_no"];
$Location_in_house=$_POST["Location_in_house"];
$Confirmation=$_POST["Confirmation"];

/*$House="test";
$Confirmation=1;*/

$UpdateConfirmation="UPDATE `phpjob` SET `Confirmation`='$Confirmation' WHERE `Usertype`='$Usertype' AND `Username`='$Username' AND `Assignment`='$Assignment' AND `House`='$House' AND `Tenant_tel_no`='$Tenant_tel_no' AND `Location_in_house`='$Location_in_house'";
$result=mysqli_query($conn, $UpdateConfirmation);

if($result){
    echo "Successfully update job confirmation";
}
else{
    echo "Connection Error";
}   

?>