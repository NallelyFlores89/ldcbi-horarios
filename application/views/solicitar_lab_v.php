<!DOCTYPE html>

<html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
    <title>Solicitar Laboratorio</title>

  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/foundation.min.css">
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/app.css">
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/zurb.mega-drop.css">
 
  	<script src="<?=base_url(); ?>statics/js/jquery-1.8.2.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/foundation.min.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/modernizr.foundation.js"></script>
<!--   	<script src="<?=base_url(); ?>statics/foundation/javascripts/marketing_docs.js"></script> -->	
	<script src="<?=base_url(); ?>statics/js/solicitarLab.js"></script>


</head>

<body>
		<div class="row">
			<div class="twelve columns">
				<br><br>
				<h1>Laboratorios de Docencia CBI</h1>
				<h3>Solicitar laboratorios</h3><br>
				<p class="instrucciones">Por favor, llene el formulario</p>

				<fieldset >
					<form class="custom ">
						<div class="row">
							<div class="twelve columns">
								<label for="nombreInput">Nombre del titular</label>
					  			<input type="text" id="nombreInput" />
						 	</div>
						 </div>

						<div class="row">
							<div class="twelve columns">
								<label for="correoInput">Correo electrónico</label>
						  		<input type="email" id="correoInput" placeholder="correo@xanum.com"/>
						 	</div>
						 </div>	
						<div class="row">
							<div class="twelve columns">
						  		
						  		<label for="ueaInput">Nombre de la UEA</label>
						  		<input type="text" id="ueaInput" />
						  	</div>
						</div>
		
						<div class="row">
						<div class="twelve columns">
					        <div class="four columns">
					           	<label for="divisionesDropdown">División</label>
								  	<select id="divisionesDropdown">
										<?php 
											$add='division';
											foreach ($listaDivisiones['divisiones'] as $indice => $valor) {
												$divisionid=$add.strtolower($valor);
												echo "<option id=$divisionid>"; print_r($valor); echo "</option>";	
											}
									    ?>
							  		</select>
							</div>
	
			                <div class="four columns">
				                <label for="laboratoriosDropdown">Laboratorio</label>
							  	<select id="laboratoriosDropdown">
								    <option id="laboratorioNON">Ninguno en especial</option>
									<?php 
										$add='laboratorio';
										foreach ($listaLaboratorios['laboratorios'] as $indice => $valor) {
											$divisionlab=$add.strtolower($valor);
											echo "<option id=$divisionlab>"; print_r($valor); echo "</option>";	
										}
								    ?>
						  		</select>
							</div>
	
			                <div class="four columns">
				                <label for="laboratoriosAltDropdown">Laboratorio Alterno</label>
							  	<select id="laboratoriosAltDropdown">
								    <option id="laboratorioAltNON">Ninguno en especial</option>
									<?php 
										$add='laboratorioAlt';
									    foreach ($listaLaboratorios['laboratorios'] as $indice => $valor) {
											$laboratorioid=$add.strtolower($valor);
											echo "<option id=$laboratorioid>"; print_r($valor); echo "</option>";	
										}
								    ?>
						  		</select>
							</div>			
						</div> <!--twelve columns-->
						</div>	<!--row-->
						
						<label style="margin-top:20px;">Recursos </label>
						<p>(Sólo en caso de ser necesario) <a class="recursosLabosBtn" href="http://localhost/horarios/index.php/recursos_c/recursos">Ver recursos</a></p> 
						<textarea></textarea>
	
						<div class="row">
							<div class="six columns">
						      <label for="checkboxLunes"><input type="checkbox" id="checkboxLunes" style='display: none;'><span class="custom checkbox"></span> Lunes</label>
						      <label for="checkboxMartes"><input type="checkbox" id="checkboxMartes" style='display: none;'><span class="custom checkbox"></span> Martes</label>
						      <label for="checkboxMiercoles"><input type="checkbox" id="checkboxMiercoles" style='display: none;'><span class="custom checkbox"></span> Miércoles</label>
							</div>
							<div class="six columns">
								<label for="checkboxJueves"><input type="checkbox" id="checkboxJueves" style='display: none;'><span class="custom checkbox"></span> Jueves</label>
						      	<label for="checkboxViernes"><input type="checkbox" id="checkboxViernes" style='display: none;'><span class="custom checkbox"></span> Viernes</label>
								
							</div>
						</div>
					</form>
				</fieldset>

				<input type="submit" class="button large offset-by-two" value="Enviar Solicitud" />
				<input id="cancelarSolicitudBtn" type="submit" class="button large offset-by-three" value="Cancelar"/><br><br><br>
			</div> <!--twelve colums-->
		</div> <!--row-->

</body>
</html>
