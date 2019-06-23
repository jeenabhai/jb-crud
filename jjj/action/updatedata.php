<?php 
	require_once("../config.php");
	extract($_POST);
	if(strlen($_FILES['fileUpload']['name'])>=1)
	{
		$fileUpload = rand(10,99) . rand(10,99) . rand(10,99) . "-" . $_FILES['fileUpload']['name'];
		/* move uploaded file from server temp directory to project directory */
		move_uploaded_file($_FILES['fileUpload']['tmp_name'],"../file/$fileUpload");
		unlink("../file/$fileUpload");
	}
	else 
	{
		$fileUpload = $oldfileUpload;
	}
	$sql = "update items set fname='$fname',lname='$lname',address='$address',number='$number',age='$age',fileUpload='$fileUpload' where id='$id'";
	mysqli_query($link,$sql) or die(mysqli_error($link));
	header("location:../index.php?msg=data Edited.")
?>