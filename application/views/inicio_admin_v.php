<!DOCTYPE html>

<html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
    <title>Laboratorios de Docencia - Horarios</title>

  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/foundation.min.css">
	<link rel="stylesheet" href="<?=base_url(); ?>statics/responsiveTable/stylesheets/app.css">
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/responsiveTable/responsive-tables.css">

  	<script src="<?=base_url(); ?>statics/js/jquery-1.8.2.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/foundation.min.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/modernizr.foundation.js"></script>
	<script src="<?=base_url(); ?>statics/responsiveTable/responsive-tables.js"></script>
   	<script src="<?=base_url(); ?>statics/foundation/javascripts/marketing_docs.js"></script>
	<script src="<?=base_url(); ?>statics/js/jquery.popupWindow.js"></script>
	<script src="<?=base_url(); ?>statics/js/inicio_admin.js"></script>



</head>

<body>
	<!-- container -->
	
	<div class="container">
		<div class="row">
			<div class="twelve columns">
			<ul class="breadcrumbs">
			  <li><a id="InicioAdminBtn" href="http://localhost/horarios/index.php/inicio_admin_c/inicio_admin">Inicio</a></li>
			  <li><a id="IrRecursosAdminBtn" href="http://localhost/horarios/index.php/recursos_admin_c/recursos">Recursos</a></li>
			  <li><a href="#">Administración</a></li>
			  <li><a href="#">Salir</a></li>
			</ul>

			<h1>Laboratorios de docencia CBI</h1>
			<h2>Horarios</h2><br><br>
			
			<input type="button" class="button AgregarHorarioBtn large" value="Agregar Horario">
			<br><br>
			
			<dl class="tabs four-up">
				<dd class="active"><a href="#simple1">AT-105</a></dd>
			  	<dd><a href="#simple2">AT-106</a></dd>
			  	<dd><a href="#simple3">AT-219</a></dd>
			  	<dd><a href="#simple4">AT-220</a></dd>
			</dl>
			
			<ul class="tabs-content">
            	<li class="active" id="simple1Tab">
	            	<table class="responsive contentHorario">
						<tr>
							<th>Hora</th>
							<th>Lunes</th>
							<th>Martes</th>
							<th>Miércoles</th>
							<th>Jueves</th>
							<th>Viernes</th>
						</tr>
		
						<?php
							$indice=1;
							foreach ($DataHorarios as $value) {
								echo "<tr id='$value'>";
									echo"<td class='hora'>$value</td>";
									echo"<td id='l$indice'>$DataUL[$indice]</td>";
									echo"<td id='ma$indice'>$DataUMa[$indice]</td>";
									echo"<td id='mi$indice'>$DataUMi[$indice]</td>";
									echo"<td id='j$indice'>$DataUJ[$indice]</td>";
									echo"<td id='v$indice'>$DataUV[$indice]</td>";
								echo "</tr>";
								$indice++;
							}
						?>
		
					</table> <!--TERMINA LA TABLA DE HORARIOS -->
	
            	</li>
            	
            	<li id="simple2Tab">
	            	
					<h1>Tabla 106</h1>
	
            	</li>
            	
            	<li id="simple3Tab">
	            	
					<h1>Tabla 219</h1>
	
            	</li>

            	<li id="simple4Tab">
	            	
					<h1>Tabla 220</h1>
	
            	</li>	            		            	
	         </ul>	
		
			<hr>
  				
  				<div id="listaUEA" class="row"> <!--Aquí comienza lista de UEA's-->
					
					<div id="CBI-UEA" class="four columns">
	  					<h5>CBI</h5>
	  				    <ul class="disc">
		  				    <?php  
								foreach ($listaueasCBI['datosCBI'] as $valor) {
									$cadena='('.$valor['siglas'].')';
									echo "<li>";
									print_r($valor['nombreuea']);
									echo"<span class='siglasUEA'>";
									print_r($cadena);
									echo"</span>";
									echo "</li>";									
								}
							?>
	  				    </ul>
	  				</div>
	  				<div id="CBS-UEA" class="four columns">
	  					<h5>CBS</h5>
	  				    <ul class="disc">
		  				    <?php  
								foreach ($listaueasCBS['datosCBS'] as $valor) {
									$cadena='('.$valor['siglas'].')';
									echo "<li>";
									print_r($valor['nombreuea']);
									echo"<span class='siglasUEA'>";
									print_r($cadena);
									echo"</span>";
									echo "</li>";									
								}
							?>
	  				    </ul>
	  				  </div>
	  				  <div id="CSH-UEA" class="four columns">
	  					<h5>CSH</h5>
	  				    <ul class="disc">
		  				    <?php  
								foreach ($listaueasCSH['datosCSH'] as $valor) {
									$cadena='('.$valor['siglas'].')';
									echo "<li>";
									print_r($valor['nombreuea']);
									echo"<span class='siglasUEA'>";
									print_r($cadena);
									echo"</span>";
									echo "</li>";									
								}
							?>
	  				    </ul>
	  				  </div>
 				</div><!--Termina lista UEA's-->
 				<hr>
 				
 				<h3 id="ueas-profesores-h3">UEA's-Profesores</h3>
				<table class="responsive contentHorario">
					<tr>
						<th>UEA</th>
						<th>Siglas</th>
						<th>Grupo</th>
						<th>Profesor</th>
						
					</tr>
						<?php  
							foreach ($listaUPG['datosUPG'] as $valor) {
								echo "<tr>";
								echo"<td>";print_r($valor['nombreuea']); echo"</td>";
								echo"<td>";print_r($valor['siglas']); echo"</td>";
								echo"<td>";print_r($valor['grupo']); echo"</td>";
 								echo"<td>";print_r($valor['nombre']); echo"</td>";
								echo "</tr>";
							 }								 
						?>
				</table> <!--TERMINA LA TABLA DE HORARIOS -->
			</div><!--twelve columns-->
		</div> <!--row-->
 	</div> <!--container-->
    </body>
</html>
