$(document).ready(function(){
	// alert("hola")	
	
 	$('#IrRecursosAdminBtn').click(function() {
		 $(this).target = "_blank";
			 window.open($(this).prop('href'));
		     return false;
	});
	 
})
