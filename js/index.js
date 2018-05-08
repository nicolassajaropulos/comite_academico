$(document).ready(function(){
	
	$('#btn_iniciar_sesion').click(function(){
		
		var datos = {
			"numero_control" : $('#txt_usuario').val(),
			"password" : $('#txt_password').val()
		}
		
		if($("#check_human").is(':checked')){
			
			$.ajax({
				url: 'modelo/validar_sesion.php',
				type: 'POST',
				dataType: 'JSON',
				data: datos,
				success:function(data){
					if(data['error'] == false){
						swal({
							title: "Sesión aceptada",
							text: "Enviado a página principal",
							type: "success",
							timer: 3000
						});
						
						setTimeout(function(){
							window.location.href = "view/main_page.php";
						},2500);
					}else{
						swal({
							title: "Datos no válidos",
							text: "El número de control o la contraseña no coinciden",
							type: "error",
							timer: 3000
						});
					}
				},
				error: function(xhr, desc, err){
					console.log(xhr);
					console.log("Detalles: " + desc + "\nError:" + err);
				}

			});
			
		}else{
			
			swal({
				title: "Un momento!...",
				text: "Verifica por favor que seas humano",
				type: "error",
				timer: 3000
			});
			
		}
		
	});
		
	
	
});