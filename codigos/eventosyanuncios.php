<?php
	session_start();
	include 'sistema/encabezado.php';
	if($resultado == 0)
	{
		header('Location:../');
		exit();
	}
	$ubicacion = 'eventosyanuncios';
	echo '<span style="float:left;">';
	include 'sistema/panelizquierdo.php';
	include 'sistema/paneleventosyanuncios.php';
	include 'sistema/panelderecho.php';
	echo '</span>';
	include 'sistema/pie.php';
?>