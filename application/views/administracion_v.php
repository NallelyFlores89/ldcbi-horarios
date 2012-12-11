<!DOCTYPE html>

<html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
    <title>Laboratorios de Docencia - Administración</title>
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/foundation.min.css">
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/responsiveTable/responsive-tables.css">
	<link rel="stylesheet" href="<?=base_url(); ?>statics/responsiveTable/stylesheets/app.css">
  	<script src="<?=base_url(); ?>statics/js/jquery-1.8.2.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/foundation.min.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/modernizr.foundation.js"></script>
	<script src="<?=base_url(); ?>statics/responsiveTable/responsive-tables.js"></script>
   	<script src="<?=base_url(); ?>statics/foundation/javascripts/marketing_docs.js"></script>
	<script src="<?=base_url(); ?>statics/js/jquery.popupWindow.js"></script>
    <script type="text/javascript">var base='<?= base_url(); ?>' </script> 
	<script src="<?=base_url(); ?>statics/js/administracion.js"></script>

</head>

<body>
	
	<div class="container">
		<br>
		<h3>Profesores-UEA</h3><hr>
		<div class="row">
			<div class="twelve columns">
				<table class="responsive contentHorario">
					<tr>
						<th>Profesor</th>
						<th>N°. Empleado</th>
						<th>Correo</th>
						<th>UEA</th>
						<th>Clave UEA</th>
						<th>Grupo</th>
						<th>Lab</th>
						<th colspan="4">Acciones</th>
					</tr>
						<?php  
							if($datosUPG==-1){
								echo "<label class='noDatos'> No hay datos que cargar</label>";
							}else{
								foreach ($datosUPG as $valor) {
									echo "<tr>";
									echo"<td>";print_r($valor['nombre']); echo"</td>";
									echo"<td>";print_r($valor['numempleado']); echo"</td>";
									echo"<td>";print_r($valor['correo']); echo"</td>";
	 								echo"<td>";print_r($valor['nombreuea']); echo"</td>";
									echo"<td>";print_r($valor['clave']); echo"</td>";
									echo"<td>";print_r($valor['grupo']); echo"</td>";
									echo"<td>";print_r($valor['idlaboratorios']); echo"</td>";
								?>
									<td><a href="#" onclick="ventanaEdita(<?= $valor['numempleado'] ?>)">Editar</a></td>
									<td><a href="#" onclick="ventanaEliminaProfr(<?= $valor['numempleado'] ?>)">Eliminar profesor</a></td>
									<td><a href="#" onclick="ventanaEliminaGrupo('<?= $valor['grupo'] ?>')">Eliminar grupo</a></td>
									<td><a href="#" onclick="ventanaElimina(<?= $valor['clave'] ?>)">Eliminar uea</a></td>

									<?php echo "</tr>";
								 }
							}								 
						?>
				</table> <!--TERMINA LA TABLA DE HORARIOS -->
			</div><!--twelve columns-->
		</div> <!--row-->
 	</div> <!--container-->
</body>
</html>
