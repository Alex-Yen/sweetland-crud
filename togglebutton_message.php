<?php
require "conn_job.php";

$Usertype=$_POST["Usertype"];
$Username=$_POST["Username"];
$Assignment=$_POST["Assignment"];
$House=$_POST["House"];
$Tenant_tel_no=$_POST["Tenant_tel_no"];
$Location_in_house=$_POST["Location_in_house"];
$Message=$_POST["Message"];

/*$House="test";
$Message=1;*/

$UpdateMessage="UPDATE `phpjob` SET `Message`='$Message' WHERE `Usertype`='$Usertype' AND `Username`='$Username' AND `Assignment`='$Assignment' AND `House`='$House' AND `Tenant_tel_no`='$Tenant_tel_no' AND `Location_in_house`='$Location_in_house'";
$result=mysqli_query($conn, $UpdateMessage);

if($result){
    echo "Successfully update message";
}
else{
    echo "Connection Error";
}   

?>