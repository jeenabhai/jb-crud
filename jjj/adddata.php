<?php
	require_once("config.php");
	extract($_POST);
	$fileUpload=rand(10,99) . rand(10,99) . rand(10,99) . "-" . $_FILES['fileUpload']['name'];
	move_uploaded_file($_FILES['fileUpload']['tmp_name'],"file/$fileUpload");
	$sql = "insert into items (fname,lname,address,number,age,fileUpload) values ('$fname','$lname','$address','$number','$age','$fileUpload')";
	mysqli_query($link,$sql) or die(mysqli_error($link));
	header("Location:index.php?msg=Data Added");
?>