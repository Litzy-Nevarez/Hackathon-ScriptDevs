<?php
echo "<br><br><br>
	<span style='position:fixed;top:120px;left:10px;width:350px;min-height:500px'>";
	if($ubicacion == 'inicio')
		echo "
		<p style='font-size:30px;background-color:#5A0202;color:white'><img src='imagenes/inicioblanco.png' height='40px'><b>&nbsp;&nbsp;Inicio</b></p>";
	else
		echo "
		<a href='inicio.php' style='text-decoration:none'><p style='font-size:30px;'><img src='imagenes/inicio.png' height='40px'>&nbsp;&nbsp;Inicio</p></a>";
	if($ubicacion == 'perfil')
		echo "
		<p style='font-size:30px;background-color:#5A0202;color:white'><img src='imagenes/perfilblanco.png' height='40px'><b>&nbsp;&nbsp;Tu perfil</b></p>";
	else
		echo "
		<a href='perfil.php' style='text-decoration:none'><p style='font-size:30px;'><img src='imagenes/perfilblanco.png' height='40px'>&nbsp;&nbsp;Tu perfil</p></a>";
	if($ubicacion == 'eventosyanuncios')
		echo "
		<p style='font-size:30px;background-color:#5A0202;color:white'><img src='imagenes/eventosyanunciosblanco.png' height='40px'><b>&nbsp;&nbsp;Eventos y anuncios</b></p>";
	else
		echo "
		<a href='eventosyanuncios.php' style='text-decoration:none'><p style='font-size:30px;'><img src='imagenes/eventosyanuncios.png' height='40px'>&nbsp;&nbsp;Eventos y anuncios</p></a>";
	if($ubicacion == 'configuracion')
		echo "
		<p style='font-size:30px;background-color:#5A0202;color:white'><img src='imagenes/configuracionblanco.png' height='40px'><b>&nbsp;&nbsp;Configuración</b></p>";
	else
		echo "
		<a href='configuracion.php' style='text-decoration:none'><p style='font-size:30px;'><img src='imagenes/configuracion.png' height='40px'>&nbsp;&nbsp;Configuración</p></a>";
	if($ubicacion == 'cursos')
		echo "
		<p style='font-size:30px;background-color:#5A0202;color:white'><img src='imagenes/cursosblanco.png' height='40px'><b>&nbsp;&nbsp;Cursos</b></p>";
	else
		echo "
		<a href='cursos.php' style='text-decoration:none'><p style='font-size:30px;'><img src='imagenes/cursos.png' height='40px'>&nbsp;&nbsp;Cursos</p></a>";
	if($ubicacion == 'publicitar')
		echo "
		<p style='font-size:30px;background-color:#5A0202;color:white'><img src='imagenes/publicitarblanco.png' height='40px'><b>&nbsp;&nbsp;Publicitar</b></p>";
	else
		echo "
		<a href='publicitar.php' style='text-decoration:none'><p style='font-size:30px;'><img src='imagenes/publicitar.png' height='40px'>&nbsp;Publicitar</p></a>";
		echo "
		<br>
		<p><b>Política de privacidad</b></p>
		<p><b>Términos de uso</b></p>
		<br>
		<a href='cerrarsesion.php' style='text-decoration:none'><p style='font-size:30px'><img src='imagenes/cerrarsesion.png' height='40px'>Cerrar sesión</p></a>
		</span>
	";
?>