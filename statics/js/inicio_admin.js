$(document).ready(function(){
	// alert("hola")	
	
 	$('#IrRecursosAdminBtn').click(function() {
		 $(this).target = "_blank";
			 window.open($(this).prop('href'));
		     return false;
	});
	
	$('.AgregarHorarioBtn').popupWindow({ 
		windowURL:'http://localhost/horarios/index.php/agregar_horario_c', 
		scrollbars:'1',
		resizable:'0',
		height:500,
		width:800,
	}); 
	 
})
