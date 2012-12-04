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
			  <li><a id="AgregarHorarioBtn" class="AgregarHorarioBtn">Agregar Horario</a></li>
			  <li><a id="IrRecursosAdminBtn" href="http://localhost/horarios/index.php/recursos_admin_c">Recursos</a></li>
			  <li><a href="#">Administración</a></li>
			  <li><a href="#">Salir</a></li>
			</ul>

			<h1>Laboratorios de docencia CBI</h1>
			<h2>Horarios</h2><br><br>
			
<!-- 			<input type="button" class="button AgregarHorarioBtn" value="Agregar Horario"> -->
			<br><br>
			
			<dl class="tabs four-up">
				<dd class="active"><a href="#simple1">AT-105</a></dd>
			  	<dd><a href="#simple2">AT-106</a></dd>
			  	<dd><a href="#simple3">AT-219</a></dd>
			  	<dd><a href="#simple4">AT-220</a></dd>
			</dl>
			
			<ul class="tabs-content">
            	<li class="active" id="simple1Tab">
            		<div class="row">
						<input type="button" class="button vaciarHorario105Btn tiny alert offset-by-ten" value="Vaciar Horario 105"><br><br>
					</div>
					<h3>AT-105</h3>
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
									echo"<td id='l$indice'>$DataUL105_1[$indice]</td>";
									echo"<td id='ma$indice'>$DataUMa105_1[$indice]</td>";
									echo"<td id='mi$indice'>$DataUMi105_1[$indice]</td>";
									echo"<td id='j$indice'>$DataUJ105_1[$indice]</td>";
									echo"<td id='v$indice'>$DataUV105_1[$indice]</td>";
								echo "</tr>";
								$indice++;
							}
						?>
		
					</table> <!--TERMINA LA TABLA DE HORARIOS -->
	
            	</li>
            	
            	<li id="simple2Tab">
					<h3>AT-106</h3>
	            	
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
									echo"<td id='l$indice'>$DataUL106_1[$indice]</td>";
									echo"<td id='ma$indice'>$DataUMa106_1[$indice]</td>";
									echo"<td id='mi$indice'>$DataUMi106_1[$indice]</td>";
									echo"<td id='j$indice'>$DataUJ106_1[$indice]</td>";
									echo"<td id='v$indice'>$DataUV106_1[$indice]</td>";
								echo "</tr>";
								$indice++;
							}
						?>
		
					</table> <!--TERMINA LA TABLA DE HORARIOS -->	
            	</li>
            	
            	<li id="simple3Tab">
	            	
					<h3>AT-219</h3>
					
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
									echo"<td id='l$indice'>$DataUL219_1[$indice]</td>";
									echo"<td id='ma$indice'>$DataUMa219_1[$indice]</td>";
									echo"<td id='mi$indice'>$DataUMi219_1[$indice]</td>";
									echo"<td id='j$indice'>$DataUJ219_1[$indice]</td>";
									echo"<td id='v$indice'>$DataUV219_1[$indice]</td>";
								echo "</tr>";
								$indice++;
							}
						?>
		
					</table> <!--TERMINA LA TABLA DE HORARIOS -->
	
            	</li>

            	<li id="simple4Tab">
	            	
					<h3>AT-220</h3>
					
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
									echo"<td id='l$indice'>$DataUL220_1[$indice]</td>";
									echo"<td id='ma$indice'>$DataUMa220_1[$indice]</td>";
									echo"<td id='mi$indice'>$DataUMi220_1[$indice]</td>";
									echo"<td id='j$indice'>$DataUJ220_1[$indice]</td>";
									echo"<td id='v$indice'>$DataUV220_1[$indice]</td>";
								echo "</tr>";
								$indice++;
							}
						?>
		
					</table> <!--TERMINA LA TABLA DE HORARIOS -->	
            	</li>	            		            	
	         </ul>	
		
			<hr>
  				
  				<div id="listaUEA" class="row"> <!--Aquí comienza lista de UEA's-->
					
					<div id="CBI-UEA" class="four columns">
	  					<h5>CBI</h5>
	  				    <ul class="disc">
		  				    <?php  
		  				    	if($listaueasCBI['datosCBI']==-1){
		  				    		echo "<label class='noDatos'> No hay datos que cargar</label>";
		  				    	}else{
									foreach ($listaueasCBI['datosCBI'] as $valor) {
										$cadena='('.$valor['siglas'].')';
										echo "<li>";
										print_r($valor['nombreuea']);
										echo"<span class='siglasUEA'>";
										print_r($cadena);
										echo"</span>";
										echo "</li>";									
									}
								}
							?>
	  				    </ul>
	  				</div>
	  				<div id="CBS-UEA" class="four columns">
	  					<h5>CBS</h5>
	  				    <ul class="disc">
		  				    <?php 
		  				    	if($listaueasCBS['datosCBS']==-1){
		  				    		echo "<label class='noDatos'> No hay datos que cargar</label>";
		  				    	}else{
									foreach ($listaueasCBS['datosCBS'] as $valor) {
										$cadena='('.$valor['siglas'].')';
										echo "<li>";
										print_r($valor['nombreuea']);
										echo"<span class='siglasUEA'>";
										print_r($cadena);
										echo"</span>";
										echo "</li>";									
									}
								}
							?>
	  				    </ul>
	  				  </div>
	  				  <div id="CSH-UEA" class="four columns">
	  					<h5>CSH</h5>
	  				    <ul class="disc">
		  				    <?php  
		  				    	if($listaueasCSH['datosCSH']==-1){
		  				    		echo "<label class='noDatos'> No hay datos que cargar</label>";
		  				    	}else{
									foreach ($listaueasCSH['datosCSH'] as $valor) {
										$cadena='('.$valor['siglas'].')';
										echo "<li>";
										print_r($valor['nombreuea']);
										echo"<span class='siglasUEA'>";
										print_r($cadena);
										echo"</span>";
										echo "</li>";									
									}
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
							if($listaUPG['datosUPG']==-1){
								echo "<label class='noDatos'> No hay datos que cargar</label>";
							}else{
								foreach ($listaUPG['datosUPG'] as $valor) {
									echo "<tr>";
									echo"<td>";print_r($valor['nombreuea']); echo"</td>";
									echo"<td>";print_r($valor['siglas']); echo"</td>";
									echo"<td>";print_r($valor['grupo']); echo"</td>";
	 								echo"<td>";print_r($valor['nombre']); echo"</td>";
									echo "</tr>";
								 }
							}								 
						?>
				</table> <!--TERMINA LA TABLA DE HORARIOS -->
			</div><!--twelve columns-->
		</div> <!--row-->
 	</div> <!--container-->
    </body>
</html>
