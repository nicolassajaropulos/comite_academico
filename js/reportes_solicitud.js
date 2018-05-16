$(document).ready(function(){
	
	$.ajax({
		url: "../api/api.php/solicitudes_usuario",
		type: "GET",
		dataType: "JSON",
		success: function(data){
			
			$(data.data).each(function(i,v){
				$('.carga_solicitudes').append('<tr>'
											  +'<td>'+v.id_solicitud+'</td>'
											  +'<td>'+v.solicitud+'</td>'
											  +'<td>'+v.fecha_creacion+'</td>'
											  +'<td>'+v.ultima_modificacion+'</td>'
											  +'<td>'+v.estatus+'</td>'
											  +'<td><button class="btn btn-info btn-sm" data-id="'+v.id_solicitud+'" id="btn_actualizar"><i class="fa fa-sync"></i> Actualizar</button></td>'
											+'</tr>');
			});
			
		},
		error: function(xhr, desc, err){
			console.log(xhr);
			console.log("Descripcion: " + desc + "\nError: "  + err);
		}
	});
	
});