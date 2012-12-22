<!DOCTYPE html>

<html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
    <title>Laboratorios de Docencia - Administración</title>
	<link href='http://fonts.googleapis.com/css?family=Gafata' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/foundation.min.css">
	<link rel="stylesheet" href="<?=base_url(); ?>statics/responsiveTable/stylesheets/app.css">
	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/app.css">
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/responsiveTable/responsive-tables.css">

  	<script src="<?=base_url(); ?>statics/js/jquery-1.8.2.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/foundation.min.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/modernizr.foundation.js"></script>
	<script src="<?=base_url(); ?>statics/responsiveTable/responsive-tables.js"></script>
   	<script src="<?=base_url(); ?>statics/foundation/javascripts/marketing_docs.js"></script>
</head>

<body>
	<div class="twelve columns"><br><br>
		
		<dl class="vertical tabs three columns">
		  <dd class="active"><a href="#vertical1">Seguridad</a></dd>
		  <dd><a href="#vertical2">Correo electrónico</a></dd>
		  <dd><a href="#vertical3">Agregar administrador</a></dd>
		  <dd><a href="#vertical4">Lista de administradores</a></dd>
		</dl>

		<div class="one columns"></div>

		<ul class="tabs-content eight columns">
           	<li class="active" id="vertical1Tab"> <!--TAB1-->
				<h2>Cambiar contraseña</h2>
				<fieldset class="nine columns">
					<form method="post">
						<label for="usuario">Ingrese usuario</label>
						<input type="text" id="usuario" name="usuario" />
						<?php echo form_error('usuario'); ?>

						<label for="passActual">Ingrese contraseña actual</label>
						<input type="password" id="passActual" name="passActual" />
						<?php echo form_error('passActual'); ?>
						
						<label for="passNueva">Ingrese contraseña nueva</label>
						<input type="password" id="passNueva" name="passNueva" />
						<?php echo form_error('passNueva'); ?>
						
						<label for="passNueva2">Repita contraseña nueva</label>
						<input type="password" id="passNueva2" name="passNueva2" />
						<?php echo form_error('passNueva2'); ?>
						
						<input type="submit" class="button" value="Guardar cambios" name="1">
					</form>
				</fieldset>
			</li> <!--Fin del tab 1-->
				
        	<li class="" id="vertical2Tab"> <!--TAB2-->

				<h2>Cambiar dirección de correo electrónico</h2>
				<fieldset class="nine columns">
					<form method="post">
						
						<label for="usuario">Ingrese usuario</label>
						<input type="text" id="usuario" name="usuario" />
						<?php echo form_error('usuario'); ?>
												
						<label for="pass">Ingrese contraseña</label>
						<input type="text" id="pass" name="pass" />
						<?php echo form_error('pass'); ?>
						
						<label for="correo">Ingrese nueva dirección de correo electrónico</label>
						<input type="text" id="correo" name="correo" />
						<?php echo form_error('correo'); ?>
						
						<label for="correo2">Repita dirección de correo electrónico</label>
						<input type="text" id="correo2" name="correo2" />
						<?php echo form_error('correo2'); ?>
						
						<input type="submit" class="button" value="Guardar cambios" name="2">
					</form>
				</fieldset>
        		
			</li>
			<li class="" id="vertical3Tab"> <!--TAB3-->
				<h2>Agregar nuevo administrador</h2>
				<fieldset class="nine columns">
					<form method="post">
						
						<label for="nombre">Nombre</label>	
						<input type="text" id="nombre" name="nombre" />
						
						<label for="usuario">Usuario</label>
						<input type="text" id="usuario" name="usuario" />
						<?php echo form_error('usuario'); ?>

						<label for="correo">Correo</label>
						<input type="text" id="correo" name="correo" />
						<?php echo form_error('correo'); ?>
						
						<label for="pass">Contraseña</label>
						<input type="password" id="pass" name="pass" />
						<?php echo form_error('pass'); ?>
						
						<label for="pass2">Repita Contraseña</label>
						<input type="password" id="pass2" name="pass2" />
						<?php echo form_error('pass2'); ?>
						
						<input type="submit" class="button" value="Guardar" name="3">
					</form>
				</fieldset>
			</li>
			
			<li class="" id="vertical4Tab"> <!--TAB4-->
				<h2>Lista de administradores</h2>
				<table class="responsive contentHorario">
					<tr>
						<th>Nombre</th>
						<th>Usuario</th>
						<th>Correo</th>
					</tr>
					<?php
						foreach ($usuarios as $value) { ?>
							<tr id=''>
								<td id=''><?= $value['nombre'] ?> </td>
								<td id=''><?= $value['usuario'] ?> </td>
								<td id=''><?= $value['correo'] ?> </td>
							</tr>
						<? }?>

				</table> <!--TERMINA LA TABLA DE HORARIOS -->
			</li>				
		</ul>		
	</div>
 	
</body>

    <footer>
		<hr>
		<label class="footer">Creado y administrado por <a href="#">@NallelyFlores5</a></label>
    </footer>
</html>
