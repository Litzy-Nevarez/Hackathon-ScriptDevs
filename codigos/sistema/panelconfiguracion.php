<?php
		echo "
		<span id='perfil' style='position:absolute;top:120px;left:400px;width:calc(100% - 800px);min-height:500px;min-width:300px;z-index:400'>
			<h2 align='center'>Configuración</h2>

			<hr style='height:3px;color:#5A0202;background-color:#5A0202'>
			<h3 align='center'>Seguridad</h3>
			<p style='color:black'>Cambiar contraseña</p>
			<input type='text' placeholder='Contraseña vieja...' style='width:300px;'>
			<br><br><input type='text' placeholder='Nueva contraseña...' style='width:300px;'>
			<br><br><input type='text' placeholder='Repetir nueva contraseña...' style='width:300px;'>
			<br>
			<br><button id='guardarcontrasena' style='background-color:#5A0202;font-size:20px;min-width:160px;min-height:40px'><a style='color:white;text-decoration:none' href='../configuracion.php''>Cambiar contraseña</button></a><br>

			<hr style='height:3px;color:#5A0202;background-color:#5A0202'>
			<h3 align='center'>Notificaciones</h3>
			<br><input type='checkbox' style='width:30px;height:30px'>Mostrar notificaciones sobre publicaciones en círculos
			<br><br><input type='checkbox' style='width:30px;height:30px'>Mostrar notificaciones sobre comentarios en publicaciones
			<br><br><input type='checkbox' style='width:30px;height:30px'>Mostrar notificaciones cuando te registres a cursos o eventos
			<br><br><input type='checkbox' style='width:30px;height:30px'>Mostrar notificaciones acerca de eventos y avisos
			<br><br><button id='configuracionnotificaciones' style='background-color:#5A0202;font-size:20px;min-width:160px;min-height:40px'><a style='color:white;text-decoration:none' href='../configuracion.php''>Guardar cambios</button></a><br><br>

		</span>
		";
?>