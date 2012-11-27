<!DOCTYPE html>

<html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
    <title>Vaciar horario</title>

  	<link rel="stylesheet" href="<?=base_url(); ?>statics/foundation/stylesheets/foundation.min.css">
  	<script src="<?=base_url(); ?>statics/js/jquery-1.8.2.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/foundation.min.js"></script>
  	<script src="<?=base_url(); ?>statics/foundation/javascripts/modernizr.foundation.js"></script>
	<script src="<?=base_url(); ?>statics/js/solicitarLab.js"></script>

	<style>
		p{
			font-size:18px;
			text-align: center;
		}
		
	</style>
	
	<script>
		$(document).ready(function(){
			$('#cancelarVaciarHorarioBtn').click(function(){
		  		window.close();
			});	
		})
	</script>
</head>

<body>
		<div class="row">
			<div class="twelve columns">
				<br><br>	
				<fieldset>
					<form class="custom" action="" method="post">
						<p>¿Desea vaciar todo el contenio de la tabla 105?</p>
						<input type="submit" id="VaciarHorarioBtn" name="105" class="button" value="Aceptar" />
						<a ref="#" id="cancelarVaciarHorarioBtn" class="button">Cancelar</a>
					</form>
				</fieldset>
			</div> <!--twelve colums-->
		</div> <!--row-->

</body>
</html>
