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
					<form class="custom" action="" method="post">
						<div class="row">
							<div class="eight columns">
								<label for="nombreInput">Nombre del titular</label>
					  			<input type="text" id="nombreInput" name="nombreInput" value="<?php echo set_value('nombreInput'); ?>"/>
						  		<?php echo form_error('nombreInput'); ?>

						 	</div>
						 	
							<div class="four columns">
								<label for="numInput">No. Empleado</label>
					  			<input type="text" id="numInput" name="numInput" value="<?php echo set_value('numInput'); ?>"/>
						  		<?php echo form_error('numInput'); ?>

						 	</div>						 	
						 </div>

						<div class="row">
							<div class="twelve columns">
								<label for="correoInput">Correo electrónico (xanum.uam.mx)</label>
						  		<input type="email" id="correoInput" name="correoInput" pattern="([a-zA-Z0-9]+)@xanum.uam.mx" value="<?php echo set_value('correoInput'); ?>"/>
						  		<?php echo form_error('correoInput'); ?>
						 	</div>
						 </div>	
						<div class="row">
							<div class="eight columns">
						  		<label for="ueaInput">Nombre de la UEA</label>
						  		<input type="text" id="ueaInput" name="ueaInput" value="<?php echo set_value('ueaInput'); ?>"/>
						  		<?php echo form_error('ueaInput'); ?>

						  	</div>
						  	
							<div class="two columns">
						  		<label for="claveInput">Clave</label>
						  		<input type="text" id="claveInput" name="claveInput" value="<?php echo set_value('claveInput'); ?>"/>
						  		<?php echo form_error('claveInput'); ?>

						  	</div>
						  	
							<div class="two columns">
						  		<label for="ueaInput">Grupo</label>
						  		<input type="text" id="grupoInput" name="grupoInput" value="<?php echo set_value('grupoInput'); ?>"/>
						  		<?php echo form_error('grupoInput'); ?>

						  	</div>
						</div>
		
						<div class="row">
						<div class="twelve columns">
					        <div class="four columns">
					           	<label for="divisionesDropdown">División</label>
								  	<select id="divisionesDropdown" name="divisionesDropdown">
										<?php 
											$add='division';
											foreach ($listaDivisiones['divisiones'] as $indice => $valor) {
												$divisionid=$add.strtolower($valor);
												echo "<option id=$divisionid name=$divisionid>"; print_r($valor); echo "</option>";	
											}
									    ?>
							  		</select>
							</div>
	
			                <div class="four columns">
				                <label for="laboratoriosDropdown">Laboratorio</label>
							  	<select id="laboratoriosDropdown" name="laboratoriosDropdown">
								    <option id="laboratorioNON">Ninguno en especial</option>
									<?php 
										$add='laboratorio';
										foreach ($listaLaboratorios['laboratorios'] as $indice => $valor) {
											$divisionlab=$add.strtolower($valor);
											echo "<option id=$divisionlab name=$divisionlab>"; print_r($valor); echo "</option>";	
										}
								    ?>
						  		</select>
							</div>
	
			                <div class="four columns">
				                <label for="laboratoriosAltDropdown">Laboratorio Alterno</label>
							  	<select id="laboratoriosAltDropdown" name="laboratoriosAltDropdown">
								    <option id="laboratorioAltNON">Ninguno en especial</option>
									<?php 
										$add='laboratorioAlt';
									    foreach ($listaLaboratorios['laboratorios'] as $indice => $valor) {
											$laboratorioid=$add.strtolower($valor);
											echo "<option id=$laboratorioid name=$laboratorioid>"; print_r($valor); echo "</option>";	
										}
								    ?>
						  		</select>
							</div>		
							
							<div class="row">
								<div class="twelve">
									<div class="row>">
						                <div class="six columns">
							                <label for="HoraIDropdown">Hora de inicio</label>
			
										  	<select id="HoraIDropdown" name="HoraIDropdown">
												<?php 
													$add='HoraI';
													foreach ($DataHorarios as $valor) {
														$id=$add.strtolower($valor);
														echo "<option id=$id name=$id>"; print_r($valor); echo "</option>";	
													}
											    ?>
									  		</select>
										</div>
									</div>
									
									<div class="row">
										<div class="six columns">
							                <label for="HoraFAltDropdown">Hora de Term</label>
			
										  	<select id="HoraFDropdown" name="HoraFDropdown">
												<?php 
													$add='HoraF';
													foreach ($DataHorarios as $valor) {
														$id=$add.strtolower($valor);
														echo "<option id=$id name=$id>"; print_r($valor); echo "</option>";	
													}
											    ?>
									  		</select>
										</div>
									</div>
									
									<div class="twelve">
									<div class="row>">
						                <div class="six columns">
							                <label for="SemIDropdown">Semana de inicio</label>
											
										  	<select id="SemIDropdown" name="SemIDropdown">
												<?php 
													$add='SemI_';
													foreach ($DataSem as $indice=>$valor) {
														$id=$add.strtolower($indice);
														echo "<option id=$id name=$id value=$indice>"; print_r($valor); echo "</option>";
													
													}
											    ?>
									  		</select>
										</div>
									</div>
									
									<div class="row">
										<div class="six columns">
							                <label for="SemFDropdown">Semana Final</label>
			
										  	<select id="SemFDropdown" name="SemFDropdown">
												<?php 
													$horaVal=8.00;
													$add='SemF_';
													foreach ($DataSem as $indice=>$valor) {
														$id=$add.strtolower($indice);
														echo "<option id=$id name=$id value=$indice>"; print_r($valor); echo "</option>";
													}
											    ?>
									  		</select>
										</div>
									</div>
								</div><hr>
								</div> <!--twelve -->	
							</div>	<!--row-->			
								
						</div> <!--twelve columns-->
						</div>	<!--row-->
						
						<label style="margin-top:20px;">Recursos </label>
						<p>(Sólo en caso de ser necesario) <a class="recursosLabosBtn" href="http://localhost/horarios/index.php/recursos_c/recursos">Ver recursos</a></p> 
						<textarea id="recursos" name="recursos"></textarea>
	
						<div class="row">
							<label>Días</label>
							<div class="six columns">
						      <label for="checkboxLunes"><input type="checkbox" id="checkboxLunes" name="checkboxes[]" style='display: none;' value="lunes"><span class="custom checkbox"></span> Lunes</label>
						      <label for="checkboxMartes"><input type="checkbox" id="checkboxMartes" name="checkboxes[]" style='display: none;' value="martes"><span class="custom checkbox"></span> Martes</label>
						      <label for="checkboxMiercoles"><input type="checkbox" id="checkboxMiercoles" name="checkboxes[]" style='display: none;' value="miercoles"><span class="custom checkbox"></span> Miércoles</label>
							</div>
							<div class="six columns">
								<label for="checkboxJueves"><input type="checkbox" id="checkboxJueves" name="checkboxes[]" style='display: none;' value="jueves"><span class="custom checkbox"></span> Jueves</label>
						      	<label for="checkboxViernes"><input type="checkbox" id="checkboxViernes" name="checkboxes[]" style='display: none;' value="viernes"><span class="custom checkbox"></span> Viernes</label>
								
							</div>
					  		<?php echo form_error('checkboxes[]'); ?>

						</div>
						
						<div class="row">
							<label style="margin-top:20px;">Comentarios </label>
							<textarea id="comentarios" name="comentarios" placeholder="Si desea, puede dejar un comentario adicional"></textarea>
							
						</div>
						
						<input type="submit" id="EnviarSolicitudBtn" class="button large offset-by-two" value="Enviar Solicitud" />
<!-- 					<input id="cancelarSolicitudBtn" type="submit" class="button large offset-by-three" value="Cancelar"/><br><br><br>					 -->					</form>
				</fieldset>

			</div> <!--twelve colums-->
		</div> <!--row-->

</body>
</html>
