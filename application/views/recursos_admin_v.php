<!DOCTYPE html>

<html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
    <title>Recursos </title>

  	<script src="<?=base_url(); ?>statics/js/jquery-1.8.2.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/foundation.min.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/modernizr.foundation.js"></script>
   	<script src="<?=base_url(); ?>statics/foundation/javascripts/marketing_docs.js"></script>
	<script src="<?=base_url(); ?>statics/js/jquery.popupWindow.js"></script>
  	<script src="<?=base_url(); ?>statics/js/recursos_admin.js"></script>

  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/foundation.min.css">
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/app.css">
	 	 	
</head>

<body>
		<div class="row">
			<br><br>
			<div class="twelve columns">
			<h1>Laboratorios de Docencia CBI</h1>
			<h3>Recursos</h3><br><br>			
			<dl class="tabs four-up">
					<dd class="active"><a href="#simple1">AT-105</a></dd>
				  	<dd><a href="#simple2">AT-106</a></dd>
				  	<dd><a href="#simple3">AT-219</a></dd>
				  	<dd><a href="#simple4">AT-220</a></dd>
				</dl>

				<ul class="tabs-content">
	            	<li class="active" id="simple1Tab">
	            		<br>
	            		<ul class="recursosAdmin">
	            			<?php
	            				// echo"<pre>";
	            				// print_r($recursos105['recursos']);
	            				// echo "</pre>";
								
								foreach ($recursos105['recursos'] as $indice => $valor) {
									$add="-recurso105";
									$id=$indice.$add;
									echo"<div class='row'>";
											echo "<li id=$id>";
												echo"<div class='six columns'>";
											 		print_r($valor); 
												echo"</div>";
													
												echo"<div class='two columns'>";
													echo " <a class='EliminarRecurso' href='#'>Eliminar</a>";
												echo"</div>";
											
												echo"<div class='two columns'>";
													echo "<a class='EditarRecurso' href='#'>Editar</a>";
												echo "</div>";
											echo"</li>";
									echo "</div>";
									echo"<hr>";
								}	            			
	            			?>
	            			
	            		</ul>
	            		<br><br>
						<a href="http://localhost/horarios/index.php/recursos_admin_c/agregar_recursos" class="normal button AgregarRecursos105Btn offset-by-one">Agregar recursos</a>
						<a href="#" class="normal button VaciarRecursos105Btn offset-by-one">Vaciar recursos</a><br/><br/>
	            		
	            		
	            	</li>
				  	<li id="simple2Tab">
	            		<br>
	            		<ul class="recursosAdmin">
							<?php
								
								foreach ($recursos106['recursos'] as $indice => $valor) {
									$add="-recurso106";
									$id=$indice.$add;
									echo"<div class='row'>";
											echo "<li id=$id>";
												echo"<div class='six columns'>";
											 		print_r($valor); 
												echo"</div>";
													
												echo"<div class='two columns'>";
													echo " <a class='EliminarRecurso' href='#'>Eliminar</a>";
												echo"</div>";
											
												echo"<div class='two columns'>";
													echo "<a class='EditarRecurso' href='#'>Editar</a>";
												echo "</div>";
											echo"</li>";
									echo "</div>";
									echo"<hr>";
								}	            			
	            			?>            			
	            		</ul>
	            		<br><br>
						<a href="#" class="normal button AgregarRecursos106Btn offset-by-one">Agregar recursos</a>
						<a href="#" class="normal button VaciarRecursos106Btn offset-by-one">Vaciar recursos</a><br/><br/>				  		
				  	</li>
				  	
				  	<li id="simple3Tab">
	            		<br>
	            		<ul class="recursosAdmin">
							<?php
								
								foreach ($recursos219['recursos'] as $indice => $valor) {
									$add="-recurso219";
									$id=$indice.$add;
									echo"<div class='row'>";
											echo "<li id=$id>";
												echo"<div class='six columns'>";
											 		print_r($valor); 
												echo"</div>";
													
												echo"<div class='two columns'>";
													echo " <a class='EliminarRecurso' href='#'>Eliminar</a>";
												echo"</div>";
											
												echo"<div class='two columns'>";
													echo "<a class='EditarRecurso' href='#'>Editar</a>";
												echo "</div>";
											echo"</li>";
									echo "</div>";
									echo"<hr>";
								}	            			
	            			?> 	            			
	            		</ul>
	            		<br><br>
						<a href="#" class="normal button AgregarRecursos219Btn offset-by-one">Agregar recursos</a>
						<a href="#" class="normal button VaciarRecursos219Btn offset-by-one">Vaciar recursos</a><br/><br/>
	             	</li>
				  	
				  	<li id="simple4Tab">
	            		<br>
	            		<ul class="recursosAdmin">
							<?php
							
								foreach ($recursos220['recursos'] as $indice => $valor) {
									$add="-recurso220";
									$id=$indice.$add;
									echo"<div class='row'>";
											echo "<li id=$id>";
												echo"<div class='six columns'>";
											 		print_r($valor); 
												echo"</div>";
													
												echo"<div class='two columns'>";
													echo " <a class='EliminarRecurso' href='#'>Eliminar</a>";
												echo"</div>";
											
												echo"<div class='two columns'>";
													echo "<a class='EditarRecurso' href='#'>Editar</a>";
												echo "</div>";
											echo"</li>";
									echo "</div>";
									echo"<hr>";
								}	            			
	            			?> 	 	            			
	            		</ul>
	            		<br><br>
						<a href="#" class="normal button AgregarRecursos220Btn offset-by-one">Agregar recursos</a>
						<a href="#" class="normal button VaciarRecursos220Btn offset-by-one">Vaciar recursos</a><br/><br/>
	            	</li>				  	
				</ul>
			</div><!--twelve columns-->
		</div> <!--row-->
</body>
</html>