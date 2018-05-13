$(document).ready(function(){
	
	$('.carga_solicitudes').hide();
	
	$.ajax({
		url: '../api/api.php/reuniones',
		type: 'GET',
		dataType: 'JSON',
		success:function(data){
			$(data.data).each(function(i,v){
				$('.carga_reuniones').append('<tr>'
											  +'<td>'+v.id_reunion+'</td>'
											  +'<td>'+v.nombre_convocador+'</td>'
											  +'<td>'+(v.fecha).substring(0, 10)+'</td>'
											  +'<td>'+v.hora_inicio+'</td>'
											  +'<td>'+v.hora_fin+'</td>'
											  +'<td><button class="btn btn-info btn-sm" data-id="'+v.id_reunion+'" id="btn_orden_dia"><i class="fa fa-list-alt"></i> Orden del día</button></td>'
											+'</tr>');
			});
		},
		error: function(xhr, desc, err){
			console.log(xhr);
			console.log("Detalles: " + desc + "\nError:" + err);
		}

	});
	
	$('.btn-info').click(function(){
		$('.carga_reuniones').hide();
		$('.carga_solicitudes').show('slow');
	});
	
});