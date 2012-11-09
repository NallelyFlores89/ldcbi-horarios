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
	<script src="<?=base_url(); ?>statics/js/inicio_admin.js"></script>


</head>

<body>
	<!-- container -->
	
	<div class="container">
		<div class="row">
			<div class="twelve columns">
				<table class="responsive contentHorario">
					<ul class="breadcrumbs">
					  <li><a id="InicioAdminBtn" href="http://localhost/horarios/index.php/inicio_admin_c/inicio_admin">Inicio</a></li>
  					  <li><a id="IrRecursosAdminBtn" href="http://localhost/horarios/index.php/recursos_admin_c/recursos">Recursos</a></li>
					  <li><a href="#">Administración</a></li>
  					  <li><a href="#">Salir</a></li>
			
					  
					</ul>
	
					<h1>Laboratorios de docencia CBI</h1>
					<h2>Horarios</h2><br><br>
					<tr>
						<th>Hora</th>
						<th>Lunes</th>
						<th>Martes</th>
						<th>Miércoles</th>
						<th>Jueves</th>
						<th>Viernes</th>
					</tr>

					<tr id="ocho">
						<td class="hora" id="f1-c1">08:00</td>
						<td id="f1-c2">row 1, cell 2</td>
						<td id="f1-c3">row 1, cell 3</td>
						<td id="f1-c4">row 1, cell 4</td>
						<td id="f1-c5">row 1, cell 5</td>
						<td id="f1-c6">row 1, cell 6</td>
					</tr>
					<tr id="ocho-media">
						<td class="hora" id="f2-c1">08:30</td>
						<td id="f2-c2">row 2, cell 2</td>
						<td id="f2-c3">row 2, cell 3</td>
						<td id="f2-c4">row 2, cell 4</td>
						<td id="f2-c5">row 2, cell 5</td>
						<td id="f2-c6">row 2, cell 6</td>
					</tr>
					<tr id="nueve">
						<td class="hora" id="f3-c1">09:00</td>
						<td id="f3-c2">row 3, cell 2</td>
						<td id="f3-c3">row 3, cell 3</td>
						<td id="f3-c4">row 3, cell 4</td>
						<td id="f3-c5">row 3, cell 5</td>
						<td id="f3-c6">row 3, cell 6</td>
					</tr>
					<tr id="nueve-media">
						<td class="hora" id="f4-c1">09:30</td>
						<td id="f4-c2">row 4, cell 2</td>
						<td id="f4-c3">row 4, cell 3</td>
						<td id="f4-c4">row 4, cell 4</td>
						<td id="f4-c5">row 4, cell 5</td>
						<td id="f4-c6">row 4, cell 6</td>
					</tr>
					<tr id="diez">
						<td class="hora" id="f5-c1">10:00</td>
						<td id="f5-c2">row 4, cell 2</td>
						<td id="f5-c3">row 4, cell 3</td>
						<td id="f5-c4">row 4, cell 4</td>
						<td id="f5-c5">row 4, cell 5</td>
						<td id="f5-c6">row 4, cell 6</td>
					</tr>
					<tr id="diez-media" >
						<td class="hora" id="f6-c1">10:30</td>
						<td id="f6-c2">row 4, cell 2</td>
						<td id="f6-c3">row 4, cell 3</td>
						<td id="f6-c4">row 4, cell 4</td>
						<td id="f6-c5">row 4, cell 5</td>
						<td id="f6-c6">row 4, cell 6</td>
					</tr>
					<tr id="once" >
						<td class="hora" id="f7-c1">11:00</td>
						<td id="f7-c2">row 4, cell 2</td>
						<td id="f7-c3">row 4, cell 3</td>
						<td id="f7-c4">row 4, cell 4</td>
						<td id="f7-c5">row 4, cell 5</td>
						<td id="f7-c6">row 4, cell 6</td>
					</tr>
					<tr id="once-media" >
						<td class="hora" id="f8-c1">11:30</td>
						<td id="f8-c2">row 4, cell 2</td>
						<td id="f8-c3">row 4, cell 3</td>
						<td id="f8-c4">row 4, cell 4</td>
						<td id="f8-c5">row 4, cell 5</td>
						<td id="f8-c6">row 4, cell 6</td>
					</tr>

					<tr id="doce" >
						<td class="hora" id="f9-c1">12:00</td>
						<td id="f9-c2">row 4, cell 2</td>
						<td id="f9-c3">row 4, cell 3</td>
						<td id="f9-c4">row 4, cell 4</td>
						<td id="f9-c5">row 4, cell 5</td>
						<td id="f9-c6">row 4, cell 6</td>
					</tr>
					<tr id="doce-media" >
						<td class="hora" id="f10-c1">12:30</td>
						<td id="f10-c2">row 4, cell 2</td>
						<td id="f10-c3">row 4, cell 3</td>
						<td id="f10-c4">row 4, cell 4</td>
						<td id="f10-c5">row 4, cell 5</td>
						<td id="f10-c6">row 4, cell 6</td>
					</tr>
					<tr id="trece" >
						<td class="hora" id="f11-c1">13:00</td>
						<td id="f11-c2">row 4, cell 2</td>
						<td id="f11-c3">row 4, cell 3</td>
						<td id="f11-c4">row 4, cell 4</td>
						<td id="f11-c5">row 4, cell 5</td>
						<td id="f11-c6">row 4, cell 6</td>
					</tr>
					<tr id="trece-media" >
						<td class="hora" id="f12-c1">13:30</td>
						<td id="f12-c2">row 4, cell 2</td>
						<td id="f12-c3">row 4, cell 3</td>
						<td id="f12-c4">row 4, cell 4</td>
						<td id="f12-c5">row 4, cell 5</td>
						<td id="f12-c6">row 4, cell 6</td>
					</tr>
					<tr id="catorce" >
						<td class="hora" id="f13-c1">14:00</td>
						<td id="f13-c2">row 4, cell 2</td>
						<td id="f13-c3">row 4, cell 3</td>
						<td id="f13-c4">row 4, cell 4</td>
						<td id="f13-c5">row 4, cell 5</td>
						<td id="f13-c6">row 4, cell 6</td>
					</tr>
					<tr id="catorce-media" >
						<td class="hora" id="f14-c1">14:30</td>
						<td id="f14-c2">row 4, cell 2</td>
						<td id="f14-c3">row 4, cell 3</td>
						<td id="f14-c4">row 4, cell 4</td>
						<td id="f14-c5">row 4, cell 5</td>
						<td id="f14-c6">row 4, cell 6</td>
					</tr>
					<tr id="quince" >
						<td class="hora" id="f15-c1">15:00</td>
						<td id="f15-c2">row 4, cell 2</td>
						<td id="f15-c3">row 4, cell 3</td>
						<td id="f15-c4">row 4, cell 4</td>
						<td id="f15-c5">row 4, cell 5</td>
						<td id="f15-c6">row 4, cell 6</td>
					</tr>
					<tr id="quince-media" >
						<td class="hora" id="f16-c1">15:30</td>
						<td id="f16-c2">row 4, cell 2</td>
						<td id="f16-c3">row 4, cell 3</td>
						<td id="f16-c4">row 4, cell 4</td>
						<td id="f16-c5">row 4, cell 5</td>
						<td id="f16-c6">row 4, cell 6</td>
					</tr>
					<tr id="dieciseis" >
						<td class="hora" id="f5-c1">16:00</td>
						<td id="f5-c2">row 4, cell 2</td>
						<td id="f5-c3">row 4, cell 3</td>
						<td id="f5-c4">row 4, cell 4</td>
						<td id="f5-c5">row 4, cell 5</td>
						<td id="f5-c6">row 4, cell 6</td>
					</tr>
					<tr id="dieciseis-media" >
						<td class="hora" id="f5-c1">16:30</td>
						<td id="f5-c2">row 4, cell 2</td>
						<td id="f5-c3">row 4, cell 3</td>
						<td id="f5-c4">row 4, cell 4</td>
						<td id="f5-c5">row 4, cell 5</td>
						<td id="f5-c6">row 4, cell 6</td>
					</tr>
					<tr id="diecisiete" >
						<td class="hora" id="f5-c1">17:00</td>
						<td id="f5-c2">row 4, cell 2</td>
						<td id="f5-c3">row 4, cell 3</td>
						<td id="f5-c4">row 4, cell 4</td>
						<td id="f5-c5">row 4, cell 5</td>
						<td id="f5-c6">row 4, cell 6</td>
					</tr>
					<tr id="diecisiete-media" >
						<td class="hora" id="f5-c1">17:30</td>
						<td id="f5-c2">row 4, cell 2</td>
						<td id="f5-c3">row 4, cell 3</td>
						<td id="f5-c4">row 4, cell 4</td>
						<td id="f5-c5">row 4, cell 5</td>
						<td id="f5-c6">row 4, cell 6</td>
					</tr>
					<tr id="dieciocho" >
						<td class="hora" id="f5-c1">18:00</td>
						<td id="f5-c2">row 4, cell 2</td>
						<td id="f5-c3">row 4, cell 3</td>
						<td id="f5-c4">row 4, cell 4</td>
						<td id="f5-c5">row 4, cell 5</td>
						<td id="f5-c6">row 4, cell 6</td>
					</tr>
					<tr id="dieciocho-media" >
						<td class="hora" id="f5-c1">18:30</td>
						<td id="f5-c2">row 4, cell 2</td>
						<td id="f5-c3">row 4, cell 3</td>
						<td id="f5-c4">row 4, cell 4</td>
						<td id="f5-c5">row 4, cell 5</td>
						<td id="f5-c6">row 4, cell 6</td>
					</tr>
					<tr id="diecinueve" >
						<td class="hora" id="f5-c1">19:00</td>
						<td id="f5-c2">row 4, cell 2</td>
						<td id="f5-c3">row 4, cell 3</td>
						<td id="f5-c4">row 4, cell 4</td>
						<td id="f5-c5">row 4, cell 5</td>
						<td id="f5-c6">row 4, cell 6</td>
					</tr>
					<tr id="diecinueve-media" >
						<td class="hora" id="f5-c1">19:30</td>
						<td id="f5-c2">row 4, cell 2</td>
						<td id="f5-c3">row 4, cell 3</td>
						<td id="f5-c4">row 4, cell 4</td>
						<td id="f5-c5">row 4, cell 5</td>
						<td id="f5-c6">row 4, cell 6</td>
					</tr>
					<tr id="veinte">
						<td class="hora" id="f5-c1">20:00</td>
						<td id="f5-c2">calculo</td>
						<td id="f5-c3">row 4, cell 3</td>
						<td id="f5-c4">row 4, cell 4</td>
						<td id="f5-c5">row 4, cell 5</td>
						<td id="f5-c6">row 4, cell 6</td>
					</tr>
					<tr id="veinte-media" >
						<td class="hora" id="f5-c1">20:30</td>
						<td id="f5-c2">row 4, cell 2</td>
						<td id="f5-c3">row 4, cell 3</td>
						<td id="f5-c4">row 4, cell 4</td>
						<td id="f5-c5">row 4, cell 5</td>
						<td id="f5-c6">row 4, cell 6</td>
					</tr>
					<tr id="veintiuno" >
						<td class="hora" id="f5-c1">21:00</td>
						<td id="f5-c2">row 4, cell 2</td>
						<td id="f5-c3">row 4, cell 3</td>
						<td id="f5-c4">row 4, cell 4</td>
						<td id="f5-c5">row 4, cell 5</td>
						<td id="f5-c6">row 4, cell 6</td>
					</tr>
			</table> <!--TERMINA LA TABLA DE HORARIOS -->
			<hr>
  				
  				<div id="listaUEA" class="row"> <!--Aquí comienza lista de UEA's-->
					
					<div id="CBI-UEA" class="four columns">
	  					<h5>CBI</h5>
	  				    <ul class="disc">
		  				    <?php  
								foreach ($listaueasCBI as $indice => $value) {
									//print_r($listaueasCBI);
									foreach ($value as $ueaCBI => $valueueaCBI) {
										echo "<li>";
										print_r($value[$ueaCBI]);	
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
								foreach ($listaueasCBS as $indice => $value) {
									foreach ($value as $ueaCBS => $valueueaCBS) {
										echo "<li>";
										print_r($value[$ueaCBS]);	
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
								foreach ($listaueasCSH as $indice => $value) {
									foreach ($value as $ueaCSH => $valueueaCSH) {
										echo "<li>";
										print_r($value[$ueaCSH]);	
										echo "</li>";									
									}
								}
							?>
	  				    </ul>
	  				  </div>
 				</div><!--Termina lista UEA's-->
			</div><!--twelve columns-->
		</div> <!--row-->
 	</div> <!--container-->
    </body>
</html>
