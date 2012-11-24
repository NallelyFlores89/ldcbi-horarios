<!DOCTYPE html>

<html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
    <title>Recursos </title>

  	<script src="<?=base_url(); ?>statics/js/jquery-1.8.2.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/foundation.min.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/modernizr.foundation.js"></script>
  	
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/foundation.min.css">
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/app.css">
   	<script src="<?=base_url(); ?>statics/foundation/javascripts/marketing_docs.js"></script>
	 	 	
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
	            		<ul>
	            			<?php
	            				// echo"<pre>";
	            				// print_r($recursos105['recursos']);
	            				// echo "</pre>";
								
								foreach ($recursos105['recursos'] as $indice => $valor) {
									echo "<li>"; print_r($valor); echo "</li>";
								}	            			
	            			?>
	            			
	            		</ul>
	            		
	            		
	            		
	            	</li>
				  	<li id="simple2Tab">
	            		<br>
	            		<ul>
	            			<?php
								foreach ($recursos106['recursos'] as $indice => $valor) {
									echo "<li>"; print_r($valor); echo "</li>";
								}	            			
	            			?>	            			
	            		</ul>				  		
				  	</li>
				  	
				  	<li id="simple3Tab">
	            		<br>
	            		<ul>
	            			<?php
								foreach ($recursos219['recursos'] as $indice => $valor) {
									echo "<li>"; print_r($valor); echo "</li>";
								}	            			
	            			?>	            			
	            		</ul>
	             	</li>
				  	
				  	<li id="simple4Tab">
	            		<br>
	            		<ul>
	            			<?php
								foreach ($recursos220['recursos'] as $indice => $valor) {
									echo "<li>"; print_r($valor); echo "</li>";
								}	            			
	            			?>	 	            			
	            		</ul>
	            	</li>				  	
				</ul>
			</div><!--twelve columns-->
		</div> <!--row-->
</body>
</html>
