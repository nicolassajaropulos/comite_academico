$(document).ready(function(){
	
	$('.carga_solicitudes').hide();
	$('.back-action').hide();
	
	$.ajax({
		url: '../api/api.php/reuniones',
		type: 'GET',
		dataType: 'JSON',
		success:function(data){
			$(data.data).each(function(i,v){
				$('.carga_reuniones').append('<tr>'
											  +'<th scopre="row">'+(i+1)+'</th>'
											  +'<td>'+v.nombre_convocador+'</td>'
											  +'<td>'+(v.fecha).substring(0, 10)+'</td>'
											  +'<td>'+v.hora_inicio+'</td>'
											  +'<td>'+v.hora_fin+'</td>'
											  +'<td class="text-center"><button class="btn btn-info btn-sm" data-id="'+v.id_reunion+'" id="btn_recomendacion"><i class="fa fa-list-alt"></i> Solicitudes</button></td>'
											+'</tr>');
			});
		},
		error: function(xhr, desc, err){
			console.log(xhr);
			console.log("Detalles: " + desc + "\nError:" + err);
		}

	});
	
	$('.carga_reuniones').on("click","#btn_recomendacion",function(){
		
		var id_reunion = $(this).data("id");
		
		$.ajax({
			url: '../api/api.php/solicitudes_reunion?id_reunion='+id_reunion,
			type: 'GET',
			dataType: 'JSON',
			success:function(data){
				$(data.data).each(function(i,v){
					$('.carga_solicitudes').append('<tr>'
												  +'<td>'+v.id_solicitud+'</td>'
												  +'<td>'+v.solicitud+'</td>'
												  +'<td>'+v.nombre_usuario+'</td>'
												  +'<td>'+v.fecha_creacion+'</td>'
												  +'<td class="text-center">'
												  +'<button class="btn btn-info btn-sm mr-1" data-id="'+v.id_solicitud+'" id="btn_visualizar" data-user="'+v.nombre_usuario+'" data-priori="'+v.prioridad+'"><i class="fa fa-clipboard-check"></i> Recomendacion</button>'
												  +'</td>'
												+'</tr>');
				});
				
			},
			error: function(xhr, desc, err){
				console.log(xhr);
				console.log("Detalles: " + desc + "\nError: " + err);
			}
		});
		
		$('.carga_reuniones').hide();
		$('.carga_solicitudes').fadeIn('fast');
		$('.back-action').show('fast');
		$('#btn_aplicar_filtro').data('table', '1');
	});
	
});