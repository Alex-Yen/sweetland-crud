<?php
require "conn_job.php";

$image0="images/IMG_20210322_153412_00.jpg";

//file name with a random number so that similar don't get replaced

if(!empty($image0)) {
    unlink($image0);
}
else{
    
}