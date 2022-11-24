<?php
	session_start();
	$con = mysqli_connect("localhost","scriptdevs","scriptdevs123","scriptdevs");
	session_unset();
	session_destroy();
	session_start();
	session_regenerate_id();
	header('Location:../');
	exit();
?>