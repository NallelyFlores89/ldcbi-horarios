<!DOCTYPE html>

<html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Solicitar Laboratorio</title>
</head>

<body style="font-family: Tahoma">
	<p style="color: #000; font-weight: bold; font-size: 20px;">Solicitud de laboratorio</p>

	<label style="color: #4DB788; font-weight: bold; font-size: 16px;">Nombre del solicitante:</label>
	<label style="color:#000; font-size: 16px;" class="infCorreo seven columns"><?php print_r($nombre); ?></label><br>

	<label style="color: #4DB788; font-weight: bold; font-size: 16px;">Num. Empleado:</label>
	<label style="color:#000; font-size: 16px;" class="infCorreo seven columns"><?php print_r($numero); ?></label><br>

	<label style="color: #4DB788; font-weight: bold; font-size: 16px;">Correo:</label>
	<label style="color:#000; font-size: 16px;"><?php print_r($correo); ?></label><br>

	<label style="color: #4DB788; font-weight: bold; font-size: 16px;">Clave de la UEA:</label>
	<label style="color:#000; font-size: 16px;"><?php print_r($clave); ?></label><br>

	<label class="correoLabel five columns" style="color: #4DB788; font-weight: bold; font-size: 16px;">Nombre de la UEA:</label>
	<label class="infCorreo seven columns" style="color:#000; font-size: 16px;"><?php print_r($uea); ?></label><br>

	<label class="correoLabel five columns" style="color: #4DB788; font-weight: bold; font-size: 16px;">Grupo:</label>
	<label class="infCorreo seven columns" style="color:#000; font-size: 16px;"><?php print_r($grupo); ?></label><br>

	<label class="correoLabel five columns" style="color: #4DB788; font-weight: bold; font-size: 16px;">División:</label>
	<label class="infCorreo seven columns" style="color:#000; font-size: 16px;"><?php print_r($division); ?></label><br>

	<label class="correoLabel five columns" style="color: #4DB788; font-weight: bold; font-size: 16px;">Laboratorio:</label>
	<label class="infCorreo seven columns" style="color:#000; font-size: 16px;"><?php print_r($laboratorio); ?></label><br>
	
	<label class="correoLabel five columns" style="color: #4DB788; font-weight: bold; font-size: 16px;">Laboratorio Alterno:</label>
	<label class="infCorreo seven columns" style="color:#000; font-size: 16px;"><?php print_r($laboratorioAlt); ?></label><br>

	<label class="correoLabel five columns" style="color: #4DB788; font-weight: bold; font-size: 16px;">Hora Inicio:</label>
	<label class="infCorreo seven columns" style="color:#000; font-size: 16px;"><?php print_r($hora_i); ?></label><br>

	<label class="correoLabel five columns" style="color: #4DB788; font-weight: bold; font-size: 16px;">Hora Term:</label>
	<label class="infCorreo seven columns" style="color:#000; font-size: 16px;"><?php print_r($hora_f); ?></label><br>

	<label class="correoLabel five columns" style="color: #4DB788; font-weight: bold; font-size: 16px;">Semana de inicio:</label>
	<label class="infCorreo seven columns" style="color:#000; font-size: 16px;"><?php print_r($semI); ?></label><br>

	<label class="correoLabel five columns" style="color: #4DB788; font-weight: bold; font-size: 16px;">Semana Final:</label>
	<label class="infCorreo seven columns" style="color:#000; font-size: 16px;"><?php print_r($semF); ?></label><br>

	<label class="correoLabel five columns" style="color: #4DB788; font-weight: bold; font-size: 16px;">Días:</label>
	<label class="infCorreo seven columns" style="color:#000; font-size: 16px";><?php
		foreach ($dias as $value) {
			echo " ";print_r($value); echo ",";
		}
	 ?></label><br>

	<label class="correoLabel five columns" style="color: #4DB788; font-weight: bold; font-size: 16px;">Recursos:</label>
	<label class="infCorreo seven columns" style="color:#000; font-size: 16px;"><?php print_r($recursos); ?></label><br>

	<label class="correoLabel five columns" style="color: #4DB788; font-weight: bold; font-size: 16px;">Comentarios:</label>
	<label class="infCorreo seven columns" style="color:#000; font-size: 16px;"><?php print_r($comentarios); ?></label><br>

</body>
</html>
