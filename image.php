<?php
require "conn_job.php";
if($conn) {
	$image0=$_POST['Image0'];
	$Image_name0=$_POST['Image_name0'];
	$image1=$_POST['Image1'];
	$Image_name1=$_POST['Image_name1'];
	$image2=$_POST['Image2'];
	$Image_name2=$_POST['Image_name2'];

	//file name with a random number so that similar dont get replaced
	//$filename = date("jS \of F Y")."-".$_FILES["Image"]["name"];
	
	$filename0=date("jS \of F Y")."- $Image_name0".".jpg";
	$filename1=date("jS \of F Y")."- $Image_name1".".jpg";
	$filename2=date("jS \of F Y")."- $Image_name2".".jpg";
 
    file_put_contents("images/".$filename0,base64_decode($image0));
	file_put_contents("images/".$filename1,base64_decode($image1));
	file_put_contents("images/".$filename2,base64_decode($image2));
	
	$qry="INSERT INTO `phpjob`(`Image`, `Image2`, `Image3`) VALUES ('$filename0', '$filename1', '$filename2')";

	$res=mysqli_query($conn,$qry);
	if($res==true) {
		echo "File Uploaded Successfully";
	}
	else{
		echo "Could not upload File";
	}
}
else{
    echo"Connection error";
}
?>
