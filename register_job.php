<?php
require "conn_job.php";
if($conn) {
	$Username=$_POST['Username'];
	$Usertype=$_POST['Usertype'];
	$Assignment=$_POST['Assignment'];
	$House=$_POST["House"];
	$Location=$_POST["Location"];
	$Tenant_tel_no=$_POST["Tenant_tel_no"];
	$Job=$_POST["Job"];
	$Location_in_house=$_POST["Location_in_house"];
	$image0=$_POST['Image0'];
	$Image_name0=$_POST['Image_name0'];
	$image1=$_POST['Image1'];
	$Image_name1=$_POST['Image_name1'];
	$image2=$_POST['Image2'];
	$Image_name2=$_POST['Image_name2'];

	//file name with a random number so that similar don't get replaced

	if(!empty($image0)) {
		$filename0="$Image_name0".".jpg";
		$sqlimage0="http://192.168.0.105/taskapp00/images/"."$Image_name0".".jpg";
		file_put_contents("images/".$filename0,base64_decode($image0));
	}
	else{
		$sqlimage0=null;
	}
	
	if(!empty($image1)) {
		$filename1="$Image_name1".".jpg";
		$sqlimage1="http://192.168.0.105/taskapp00/images/"."$Image_name1".".jpg";
		file_put_contents("images/".$filename1,base64_decode($image1));
	}
	else{
		$sqlimage1=null;
	}

	if(!empty($image2)) {
		$filename2="$Image_name2".".jpg";
		$sqlimage2="http://192.168.0.105/taskapp00/images/"."$Image_name2".".jpg";
		file_put_contents("images/".$filename2,base64_decode($image2));
	}
	else{
		$sqlimage2=null;
	}
	
	$qry="INSERT INTO `phpjob`(`Username`, `Usertype`, `Assignment`, `House`, `Location`, `Tenant_tel_no`, `Job`, `Location_in_house`, `Image0`, `Image1`, `Image2`) VALUES ('$Username', '$Usertype', '$Assignment','$House','$Location','$Tenant_tel_no','$Job','$Location_in_house', '$sqlimage0', '$sqlimage1', '$sqlimage2')";

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
