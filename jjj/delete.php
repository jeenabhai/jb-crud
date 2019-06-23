<?php 
	require_once("config.php");
	extract($_REQUEST);
	$sql = "DELETE FROM items where id=$id";
	mysqli_query($link,$sql) or die(mysqli_error());
	header("location:index.php?msg=Data Deleted");
?>