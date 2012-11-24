<!DOCTYPE html>

<html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
    <title>Solicitar Laboratorio</title>
<!-- 
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/foundation.min.css">
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/app.css">
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/zurb.mega-drop.css">
 
  	<script src="<?=base_url(); ?>statics/js/jquery-1.8.2.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/foundation.min.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/modernizr.foundation.js"></script> -->
  	


</head>

<body>
		<div class="row">
			<div class="twelve columns">
				<div style="padding:2px; border:dashed 3px #575257; -webkit-border-radius: 16px; border-radius: 16px; margin-bottom:5px">
				<center><h1>Solicitud de laboratorio</h1></center>
				</div>
				<div style="padding:15px; border:double 3px #000000; -moz-border-radius-topleft: 4px;
				-moz-border-radius-topright:5px; -moz-border-radius-bottomleft:5px; -moz-border-radius-bottomright:5px; -webkit-border-top-left-radius:4px; -webkit-border-top-right-radius:5px; -webkit-border-bottom-left-radius:5px;
				 -webkit-border-bottom-right-radius:5px; border-top-left-radius:4px; border-top-right-radius:5px; border-bottom-left-radius:5px; border-bottom-right-radius:5px;">
					<div class="row">
						<label class="correoLabel five columns" style="color: red; font-weight: bold; font-size: 20px;">Nombre del solicitante:</label>
						<label style="color:#000; font-size: 20px;" class="infCorreo seven columns"><?php print_r($nombre); ?></label>
					</div>

					<div class="row">
						<label class="correoLabel five columns" style="color: red; font-weight: bold; font-size: 20px;">Num. Empleado:</label>
						<label style="color:#000; font-size: 20px;" class="infCorreo seven columns"><?php print_r($numero); ?></label>
					</div>
										
					<div class="row">
						<label class="correoLabel five columns" style="color: red; font-weight: bold; font-size: 20px;">Correo:</label>
						<label class="infCorreo seven columns" style="color:#000; font-size: 20px;"><?php print_r($correo); ?></label>
					</div>
	
					<div class="row">
						<label class="correoLabel five columns" style="color: red; font-weight: bold; font-size: 20px;">Clave de la UEA:</label>
						<label class="infCorreo seven columns" style="color:#000; font-size: 20px;"><?php print_r($clave); ?></label>
					</div>	
					
					<div class="row">
						<label class="correoLabel five columns" style="color: red; font-weight: bold; font-size: 20px;">Nombre de la UEA:</label>
						<label class="infCorreo seven columns" style="color:#000; font-size: 20px;"><?php print_r($uea); ?></label>
					</div>	
					
					<div class="row">
						<label class="correoLabel five columns" style="color: red; font-weight: bold; font-size: 20px;">Grupo:</label>
						<label class="infCorreo seven columns" style="color:#000; font-size: 20px;"><?php print_r($grupo); ?></label>
					</div>				
							
					<div class="row">
						<label class="correoLabel five columns" style="color: red; font-weight: bold; font-size: 20px;">División:</label>
						<label class="infCorreo seven columns" style="color:#000; font-size: 20px;"><?php print_r($division); ?></label>
					</div>				
					
					<div class="row">
						<label class="correoLabel five columns" style="color: red; font-weight: bold; font-size: 20px;">Laboratorio:</label>
						<label class="infCorreo seven columns" style="color:#000; font-size: 20px;"><?php print_r($laboratorio); ?></label>
					</div>	
			
					<div class="row">
						<label class="correoLabel five columns" style="color: red; font-weight: bold; font-size: 20px;">Laboratorio Alterno:</label>
						<label class="infCorreo seven columns" style="color:#000; font-size: 20px;"><?php print_r($laboratorioAlt); ?></label>
					</div>	
	
					<div class="row">
						<label class="correoLabel five columns" style="color: red; font-weight: bold; font-size: 20px;">Hora Inicio:</label>
						<label class="infCorreo seven columns" style="color:#000; font-size: 20px;"><?php print_r($hora_i); ?></label>
					</div>
					
					<div class="row">
						<label class="correoLabel five columns" style="color: red; font-weight: bold; font-size: 20px;">Hora Term:</label>
						<label class="infCorreo seven columns" style="color:#000; font-size: 20px;"><?php print_r($hora_f); ?></label>
					</div>
					
					<div class="row">
						<label class="correoLabel five columns" style="color: red; font-weight: bold; font-size: 20px;">Días:</label>
						<label class="infCorreo seven columns" style="color:#000; font-size: 20px";><?php
							foreach ($dias as $value) {
								echo " ";print_r($value); echo ",";
							}
						 ?></label>
					</div>
					
					<div class="row">
						<label class="correoLabel five columns" style="color: red; font-weight: bold; font-size: 20px;">Recursos:</label>
						<label class="infCorreo seven columns" style="color:#000; font-size: 20px;"><?php print_r($recursos); ?></label>
					</div>
				</div>
			</div> <!--twelve colums-->
		</div> <!--row-->

</body>
</html>
