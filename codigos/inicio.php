<?php
	session_start();
	include 'sistema/encabezado.php';
	if($resultado == 0)
	{
		header('Location:../');
		exit();
	}
	$ubicacion = 'inicio';
	echo '<span style="float:left;">';
	include 'sistema/panelizquierdo.php';
	include 'sistema/panelinicio.php';
	include 'sistema/panelderecho.php';
?>