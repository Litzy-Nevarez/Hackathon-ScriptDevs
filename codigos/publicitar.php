<?php
	session_start();
	include 'sistema/encabezado.php';
	if($resultado == 0)
	{
		header('Location:../');
		exit();
	}
	$ubicacion = 'publicitar';
	echo '<span style="float:left;">';
	include 'sistema/panelizquierdo.php';
	include 'sistema/panelpublicitar.php';
	include 'sistema/panelderecho.php';
	echo '</span>';
	include 'sistema/pie.php';
?>