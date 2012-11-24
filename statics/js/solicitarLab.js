$(document).ready(function(){
	$('#cancelarSolicitudBtn').click(function(){
  		window.close();
	});	
	
	$('.recursosLabosBtn').click(function() {
		 $(this).target = "_blank";
			 window.open($(this).prop('href'));
		     return false;
	 });
	 

})


	 // $("#EnviarSolicitudBtn").click(function (){
	 	// $correo=$("#correoInput").val();
	 	// alert($correo);
	 	// alert("comienza validación");
        // $(".error").remove();
//         
        // if( $("#nombreInput").val() == "" ){
            // $("#nombreInput").focus().after("<span class='error'>Campo obligatorio. Ingrese su nombre</span>");
           // // return false;
        // }
//         
        // if( $("#correoInput").val() == "" || !emailreg.test($(".email").val()) ){
            // $("#correoInput").focus().after("<span class='error'>Campo obligatorio. Ingrese un email correcto</span>");
            // //return false;
        // }
        // if( $("#ueaInput").val() == ""){
            // $("#ueaInput").focus().after("<span class='error'>Campo obligatorio. Ingrese nombre de la UEA</span>");
            // //return false;
        // }
    // });