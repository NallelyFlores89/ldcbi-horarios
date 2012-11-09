$(document).ready(function(){
	$("#f1-c1").dblclick(function(){
		alert("click!");
	});

	// $('#adminBtn').popupWindow({ 
		// windowURL:'http://localhost/horarios/index.php/loguin_c/', 
	// }); 
	
	
 	$('.solicitarLabosBtn').click(function() {
		 $(this).target = "_blank";
			 window.open($(this).prop('href'));
		     return false;
	});
	
	 $('.recursosLabosBtn').click(function() {
		 $(this).target = "_blank";
			 window.open($(this).prop('href'));
		     return false;
	 });
	 
})
