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

  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/zurb.mega-drop.css">
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
								
								if($recursos105 != -1){
		            				foreach ($recursos105 as $valor) {
										$add="-recurso105";
										$id=$valor['idrecursos'].$add;
										$id_recurso=$valor['idrecursos'];
										$id_lab = 105;
										echo"<div class='row'>";
												echo "<li id=$id>";
													echo"<div class='six columns'>";
												 		print_r($valor['recurso']); 
													echo"</div>";
														
													echo"<div class='two columns'>";
															echo "<a href='#' class='EliminarRecurso' onclick='ventanaElimina($id_recurso, $id_lab)'>Eliminar</a>";
													echo"</div>";
											
												
													echo"<div class='two columns'>";
														echo "<a class='EditarRecurso' href='#' onclick='ventanaEdita($id_recurso)'>Modificar</a>";
													echo "</div>";
												echo"</li>";
										echo "</div>";
										echo"<hr>";
									}
								}else{
		  				    		echo "<label class='noDatos'> No hay datos que cargar</label>";
								}	            			
	            			?>
	            		</ul>
	                        		
	            	</li>
				  	<li id="simple2Tab">
	            		<br>
	            		<ul class="recursosAdmin">
							<?php
								
								if($recursos106 != -1){
									
									foreach ($recursos106 as $valor) {
										$add="-recurso106";
										$id=$valor['idrecursos'].$add;
										$id_recurso=$valor['idrecursos'];
										$id_lab = 106;
										echo"<div class='row'>";
												echo "<li id=$id>";
													echo"<div class='six columns'>";
												 		print_r($valor['recurso']); 
													echo"</div>";
														
													echo"<div class='two columns'>";
															echo "<a href='#' class='EliminarRecurso' onclick='ventanaElimina($id_recurso, $id_lab)'>Eliminar</a>";
													echo"</div>";
												
													echo"<div class='two columns'>";
														echo "<a class='EditarRecurso' href='#'>Modificar</a>";
													echo "</div>";
												echo"</li>";
										echo "</div>";
										echo"<hr>";
									}
								}else{
									echo "<label class='noDatos'> No hay datos que cargar</label>";
								}	            			
	            			?>            			
	            		</ul>
				  	</li>
				  	
				  	<li id="simple3Tab">
	            		<br>
	            		<ul class="recursosAdmin">
							<?php
								
								if($recursos219 != -1){
								
									foreach ($recursos219 as $valor) {
										$add="-recurso219";
										$id=$valor['idrecursos'].$add;
										$id_recurso=$valor['idrecursos'];
										$id_lab = 219;
										echo"<div class='row'>";
												echo "<li id=$id>";
													echo"<div class='six columns'>";
												 		print_r($valor['recurso']); 
													echo"</div>";
														
													echo"<div class='two columns'>";
														echo "<a href='#' class='EliminarRecurso' onclick='ventanaElimina($id_recurso, $id_lab)'>Eliminar</a>";
													echo"</div>";
												
													echo"<div class='two columns'>";
														echo "<a class='EditarRecurso' href='#'>Modificar</a>";
													echo "</div>";
												echo"</li>";
										echo "</div>";
										echo"<hr>";
									}
								}else{
									echo "<label class='noDatos'> No hay datos que cargar</label>";
									
								}	            			
	            			?> 	            			
	            		</ul>
	             	</li>
				  	
				  	<li id="simple4Tab">
	            		<br>
	            		<ul class="recursosAdmin">
							<?php
								if($recursos220 != -1){
								
									foreach ($recursos220 as $valor) {
										$add="-recurso220";
										$id=$valor['idrecursos'].$add;
										$id_recurso=$valor['idrecursos'];
										$id_lab = 220;
										echo"<div class='row'>";
												echo "<li id=$id>";
													echo"<div class='six columns'>";
												 		print_r($valor['recurso']); 
													echo"</div>";
														
													echo"<div class='two columns'>";
														echo "<a href='#' class='EliminarRecurso' onclick='ventanaElimina($id_recurso, $id_lab)'>Eliminar</a>";
													echo"</div>";
												
													echo"<div class='two columns'>";
														echo "<a class='EditarRecurso' href='#'>Modificar</a>";
													echo "</div>";
												echo"</li>";
										echo "</div>";
										echo"<hr>";
									}
								}else{
									echo "<label class='noDatos'> No hay datos que cargar</label>";
								}	            			
	            			?> 	 	            			
	            		</ul>
	            	</li>				  	
				</ul>
				
				<br><br>
				<a href="http://localhost/horarios/index.php/recursos_admin_c/agregar_recursos" class="normal button AgregarRecursosBtn offset-by-one">Agregar recursos</a>
				<a href="http://localhost/horarios/index.php/recursos_admin_c/vaciar_recursos" class="normal button VaciarRecursosBtn offset-by-one">Vaciar recursos</a><br/><br/>
			</div><!--twelve columns-->
		</div> <!--row-->
</body>
</html>