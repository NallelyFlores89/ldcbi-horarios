<!DOCTYPE html>

<html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
    <title>Eliminar recurso</title>

  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/foundation.min.css">
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/app.css">
  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/zurb.mega-drop.css">
 
  	<script src="<?=base_url(); ?>statics/js/jquery-1.8.2.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/foundation.min.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/modernizr.foundation.js"></script>


</head>

<body>
		<div class="row">
			<div class="twelve columns">
				<br><br>
				<fieldset >
					<form class="custom" action="" method="post">
						<p>¿Seguro que desea eliminar este recurso?</p>
						
						<input type="submit" id="EliminarBtn" class="button offset-by-two" name="eliminar" value="Eliminar" />
<!-- 					<input id="cancelarSolicitudBtn" type="submit" class="button offset-by-three" value="Cancelar"/><br><br><br>					 -->					
					</form>
				</fieldset>

			</div> <!--twelve colums-->
		</div> <!--row-->

</body>
</html>