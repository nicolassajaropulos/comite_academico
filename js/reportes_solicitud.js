$(document).ready(function(){
	
	$.ajax({
		url: "../api/api.php/solicitudes_usuario",
		type: "GET",
		dataType: "JSON",
		success: function(data){
			
			$(data.data).each(function(i,v){
				
				var boton_accion = "";
				
				if(v.estatus == "Rechazada por coordinador por evidencia"){
					boton_accion = '<td><button class="btn btn-info btn-sm" data-id="'+v.id_solicitud+'" id="btn_evidencia"><i class="fa fa-upload"></i> Subir evidencia</button></td>';
				}else if(v.estatus == "Rechazada por coordinador con motivo" || v.estatus == "Rechazada por director del plantel"){
					boton_accion = '<td><button class="btn btn-info btn-sm" id="btn_nueva_solicitud"><i class="fa fa-newspaper"></i> Nueva Solicitud</button></td>';
				}
				
				$('.carga_solicitudes').append('<tr>'
											  +'<td>'+v.id_solicitud+'</td>'
											  +'<td>'+v.solicitud+'</td>'
											  +'<td>'+v.fecha_creacion+'</td>'
											  +'<td>'+v.ultima_modificacion+'</td>'
											  +'<td>'+v.estatus+'</td>'											  
											  + boton_accion
											+'</tr>');
			});
			
		},
		error: function(xhr, desc, err){
			console.log(xhr);
			console.log("Descripcion: " + desc + "\nError: "  + err);
		}
	});
	
	$('.carga_solicitudes').on("click","#btn_evidencia",function(){
		
		alert('Picale Nico, aquí se puede subir evidencia tambien');
		
	});
	
	$('.carga_solicitudes').on("click","#btn_nueva_solicitud",function(){
		
		swal({
			title: "Redireccionando",
			text: "Modulo para dar de alta nueva solicitud",
			type: "info",
			timer: 2000
		});
		
		setTimeout(function(){
			cargarDiv('solicitud');
		},1900);
		
	});
	
});