<?php
require "conn_job.php";

$Username=$_POST["Username"];
$Usertype=$_POST["Usertype"];
$House=$_POST["House"];
$House_Area=$_POST["House_Area"];
$Tenant_tel_no=$_POST["Tenant_tel_no"];
$Job=$_POST["Job"];
$Location=$_POST["Location"];

/*$_To="admin";
$House="tester";
$House_Area="tester";
$Tenant_tel_no="0114552564";
$Job="Job";
$Location="Location";*/


/*Photo section
if(!file_exists($targetDir)) {
    //create uploads/ folder
    mkdir($targetDir, 0777, true);
}
//set random image file name with time
$targetDir = $targetDir."/".rand()."_".time()."jpeg";
if(file_put_contents($targetDir, base64_decode($Photo))) {
    echo json_decode(["Message" => "The file has been uploaded.", "Status" => "OK"]);   
}
else{
    echo json_decode(["Message" => "Sorry, there was an error uploading your file.", "Status" => "Error"]);
}*/


//connect database section
if($conn){
    $sqlCheckJob="SELECT*FROM`phpjob`WHERE`Username`LIKE'$Username' AND`Usertype`LIKE'$Usertype' AND`House`LIKE'$House' AND`House_Area`LIKE'$House_Area' AND`Tenant_tel_no`LIKE'$Tenant_tel_no' AND`Job`LIKE'$Job' AND`Location`LIKE'$Location'";
    $JobQuery=mysqli_query($conn, $sqlCheckJob);

    if(mysqli_num_rows($JobQuery)>0) {
        $sqlJob="SELECT*FROM`phpjob`WHERE`Username`LIKE'$Username' AND`Usertype`LIKE'$Usertype' AND`House`LIKE'$House' AND`House_Area`LIKE'$House_Area' AND`Tenant_tel_no`LIKE'$Tenant_tel_no' AND`Job`LIKE'$Job' AND`Location`LIKE'$Location'";
        $JobViewQuery=mysqli_query($conn, $sqlJob);

        //echo"success";
    }
    else{
        echo"Error";
    }
    
}
else{
    echo"Connection error";
}
?>

