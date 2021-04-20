<?php
require "conn_job.php";

$Usertype=$_POST["Usertype"];
$Username=$_POST["Username"];
$Assignment=$_POST["Assignment"];
$House=$_POST["House"];
$Tenant_tel_no=$_POST["Tenant_tel_no"];
$Location_in_house=$_POST["Location_in_house"];
$image0=$_POST['Image0'];
$image1=$_POST['Image1'];
$image2=$_POST['Image2'];

//file name with a random number so that similar don't get replaced

if(!empty($image0)) {
    unlink($image0);
}
else{
    
}

if(!empty($image1)) {
    unlink($image1);
}
else{
    
}

if(!empty($image2)) {
    unlink($image2);
}
else{
    
}
/*$Usertype=$_POST["Usertype"];
$Username=$_POST["Username"];
$House="test";
$House_Area=$_POST["House_Area"];
$Tenant_tel_no=$_POST["Tenant_tel_no"];
$Job=$_POST["Job"];
$Location=$_POST["Location"];
;*/

$Delete="DELETE FROM `phpjob` WHERE `Usertype`='$Usertype' AND `Username`='$Username' AND `Assignment`='$Assignment' AND `House`='$House' AND `Tenant_tel_no`='$Tenant_tel_no' AND `Location_in_house`='$Location_in_house'";
$result=mysqli_query($conn, $Delete);

if($result){
    echo "Successfully delete";
}
else{
    echo "Connection Error";
}   

?>