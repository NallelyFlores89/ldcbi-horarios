<!DOCTYPE html>

<html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
    <title>Agregar recursos </title>

  	<script src="<?=base_url(); ?>statics/js/jquery-1.8.2.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/foundation.min.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/modernizr.foundation.js"></script>
 	
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/foundation.min.css">
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/app.css">
 	 	
</head>

<body>
		<div class="row">
			<br><br>
			<div class="twelve columns">
				<fieldset>
					<form>
						<label for="usuarioInput">Recurso Nuevo</label>
				  		<input type="text" id="recursoInput" />

					</form>
				</fieldset>

				<input type="submit" id="AgregarRecursoBtn" class="button normal offset-by-three" value="Agregar"/>
				<a href="#" id="CancelarAgregarRecursoBtn" class="button normal offset-by-one">Cancelar</a>


			</div><!--twelve columns-->
		</div> <!--row-->
</body>
</html>