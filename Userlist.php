<?php
require "conn.php";

$result = array();
$result['phpreg'] = array();
$select="SELECT*FROM phpreg WHERE `usertype`='contractor' OR `usertype`='user'";
$response=mysqli_query($conn, $select);

while($row=mysqli_fetch_array($response)) {
    
    $index['username'] = $row['0'];
    $index['usertype'] = $row['2'];

    array_push($result['phpreg'], $index);
}
    $result["success"]="1";
    echo json_encode($result);

?>