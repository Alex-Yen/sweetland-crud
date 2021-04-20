<?php
require "conn_job.php";

$result = array();
$result['phpjob'] = array();
$select="SELECT*FROM phpjob";
$response=mysqli_query($conn, $select);

while($row=mysqli_fetch_array($response)) {
    
    $index['Username'] = $row['0'];
    $index['Usertype'] = $row['1'];
    $index['Assignment'] = $row['2'];
    $index['House'] = $row['3'];
    $index['Location'] = $row['4'];
    $index['Tenant_tel_no'] = $row['5'];
    $index['Job'] = $row['6'];
    $index['Location_in_house'] = $row['7'];
    $index['Message'] = $row['8'];
    $index['Status'] = $row['9'];
    $index['Confirmation'] = $row['10'];
    $index['Image0'] = $row['11'];
    $index['Image1'] = $row['12'];
    $index['Image2'] = $row['13'];

    array_push($result['phpjob'], $index);
}
    $result["success"]="1";
    echo json_encode($result);

?>