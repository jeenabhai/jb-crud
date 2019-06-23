<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$database="jjj";

	$link = mysqli_connect($hostname, $username, $password) or die(mysqli_error($link));
mysqli_select_db($link,$database) or die(mysqli_error($link));

?>