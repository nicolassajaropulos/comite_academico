$(document).ready(function(){
	
	$('.carga_solicitudes').hide();
	$('.back-action').hide();
	
	$.ajax({
		url: '../api/api.php/reunion_miembros',
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
											  +'<td class="text-center"><button class="btn btn-info btn-sm" data-id="'+v.id_reunion+'" id="btn_orden_dia"><i class="fa fa-list-alt"></i> Solicitudes</button></td>'
											+'</tr>');
			});
		},
		error: function(xhr, desc, err){
			console.log(xhr);
			console.log("Detalles: " + desc + "\nError:" + err);
		}

	});
	
	
	$('.carga_reuniones').on("click","#btn_orden_dia",function(){
		
		var id_reunion = $(this).data("id");
		
		$.ajax({
			url: '../api/api.php/solicitudes_reunion_miembro?id_reunion='+id_reunion,
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
												  +'<button class="btn btn-info btn-sm mr-1" data-id="'+v.id_solicitud+'" id="btn_visualizar" data-user="'+v.nombre_usuario+'" data-priori="'+v.prioridad+'"><i class="fa fa-search"></i> Visualizar</button>'
												  +'<button class="btn btn-primary btn-sm mr-1" data-id="'+v.id_solicitud+'" id="btn_votar" data-user="'+v.nombre_usuario+'" data-priori="'+v.prioridad+'"><i class="fas fa-clipboard-check"></i> Validar</button>'
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
	
	$('.carga_solicitudes').on("click","#btn_visualizar",function(){
		
		var prioridad_interesado = $(this).data("priori");
		
		if(prioridad_interesado == 4){
			$('#modal_visualizar_solicitud_estudiante').modal('toggle');
		}else{
			$('#modal_visualizar_solicitud_profesor').modal('toggle');
		}
		
		$('.titulo_modal').html("Vista de Solicitud No. <strong>" + $(this).data('id') + "</strong>");
		
		$.ajax({
			url: "../api/api.php/datos_solicitud",
			type: "GET",
			dataType: "JSON",
			data: {
				"id_solicitud" : $(this).data('id')
			},
			success: function(data){
				
				$(data.data).each(function(i,v){
					
					if(prioridad_interesado == 4){
						
						$('#txt_nombre_estudiante').val(v.nombre_usuario);
						$('#txt_carrera_estudiante').val(v.nombre_carrera);
						$('#txt_solicitud_estudiante').val(v.solicitud);
						$('#txt_motivos_academicos_estudiante').val(v.motivo_academico);
						$('#txt_motivos_personales_estudiante').val(v.motivo_personal);
						$('#txt_motivos_otros_estudiante').val(v.motivo_otro);
						
						$('#txt_nombre_estudiante').prop('readonly', true);
						$('#txt_carrera_estudiante').prop('readonly', true);
						$('#txt_solicitud_estudiante').prop('readonly', true);
						$('#txt_motivos_academicos_estudiante').prop('readonly', true);
						$('#txt_motivos_personales_estudiante').prop('readonly', true);
						$('#txt_motivos_otros_estudiante').prop('readonly', true);
						
					}else{
						
						$('#txt_nombre_profesor').val(v.nombre_usuario);
						$('#txt_carrera_profesor').val(v.nombre_carrera);
						$('#txt_solicitud_profesor').val(v.solicitud);
						$('#txt_motivos_academicos_profesor').val(v.motivo_academico);
						
						$('#txt_nombre_profesor').prop('readonly', true);
						$('#txt_carrera_profesor').prop('readonly', true);
						$('#txt_solicitud_profesor').prop('readonly', true);
						$('#txt_motivos_academicos_profesor').prop('readonly', true);
						
					}
					
				});
				
			},
			error: function(xhr, desc, err){
				console.log(xhr);
				console.log("Descripcion: " + desc + "\nError: "  + err);
			}
		});
		
		$.ajax({
			url: "../api/api.php/evidencia_usuario?id_solicitud=" + $(this).data('id'),
			type: "GET",
			dataType: "JSON",
			success: function(data){
				
				var cadena_evidencias = "";
				
				$(data.data).each(function(i,v){
					cadena_evidencias += "<div class='col-md-3 col-3 mt-2'><img src='../imagenes/evidencias/"+v.evidencia+"' style='width:80%;' class='img_evidencia' data-evi='../imagenes/evidencias/"+v.evidencia+"'></div>";
				});
				
				$('.carga_evidencias').html(cadena_evidencias);
				
			},
			error: function(xhr, desc, err){
				console.log(xhr);
				console.log("Descripcion: " + desc + "\nError: "  + err);
			}
		});
		
	});
	
	$('.carga_evidencias').on("click",".img_evidencia",function(){
		
		var ruta = $(this).data('evi');
		
		$('#carga_vista_imagen').html('<img src="'+ruta+'" style="width:100%;">');
		
		$('#modal_evidencia').modal('toggle');
	});
	
	$('.carga_solicitudes').on("click","#btn_votar",function(){
		
		var id_solicitud = $(this).data('id');
		var interesado = $(this).data('user');
		
		$('#btn_rechazar_solicitud').data('id',id_solicitud);
		$('#btn_aceptar_solicitud').data('id',id_solicitud);
		
		$('.titulo_validar').html('¿Qué decidió sobre la solicitud de '+ interesado +'?');
		
		$('#modal_votar').modal('toggle');
	});
	
	$('#btn_rechazar_solicitud').click(function(){
		
		$('#modal_votar').modal('hide');
		
		var id_solicitud = $(this).data('id');
		var comentario = $('#txt_comentario').val();
		
		swal({
			title: "¿Desea rechazar la solicitud?",
			text: "Se emitirá su voto y no habrá vuelta atrás",
			type: "warning",
			showCancelButton: true,
			cancelButtonClass: "btn-secondary",
			confirmButtonColor: "#d9534f",
			confirmButtonText: "Rechazar solicitud",
			cancelButtonText: "Cancelar operacion",
			closeOnConfirm: true,
			closeOnCancel: true
		},
		function(isConfirm) {
			
			if (isConfirm) {
				
				$.ajax({
					url: "../api/api.php/comentario_solicitud",
					type: "POST",
					data: {
						"id_solicitud" : id_solicitud,
						"comentario" : comentario,
						"estatus" : 3
					},
					success: function(data){
						
						setTimeout(function(){
							swal({
								title: "Voto negativo emitido!", 
								type: "error",
								timer: 2000
							});
						},200);
						
						setTimeout(function(){
							cargarDiv("solicitud_voto");
						},2000);
						
					},
					error: function(xhr, desc, err){
						console.log(xhr);
						console.log("Descripcion: " + desc + "\nError: "  + err);
					}
				});
			}
		  
		});
		
	});
	
	$('#btn_aceptar_solicitud').click(function(){
		
		var id_solicitud = $(this).data('id');
		var comentario = $('#txt_comentario').val();
		
		$('#modal_votar').modal('hide');
		
		swal({
			title: "¿Desea aceptar la solicitud?",
			text: "Se emitirá su voto y no habrá vuelta atrás",
			type: "success",
			showCancelButton: true,
			cancelButtonClass: "btn-secondary",
			confirmButtonColor: "#5cb85c",
			confirmButtonText: "Aceptar solicitud",
			cancelButtonText: "Cancelar operacion",
			closeOnConfirm: true,
			closeOnCancel: true
		},
		function(isConfirm) {
			
			if (isConfirm) {
				
				$.ajax({
					url: "../api/api.php/comentario_solicitud",
					type: "POST",
					data: {
						"id_solicitud" : id_solicitud,
						"comentario" : comentario,
						"estatus" : 2
					},
					success: function(data){
						
						setTimeout(function(){
							swal({
								title: "Voto positivo emitido!", 
								type: "success",
								timer: 2000
							});
						},200);
						
						setTimeout(function(){
							cargarDiv("solicitud_voto");
						},2000);
						
					},
					error: function(xhr, desc, err){
						console.log(xhr);
						console.log("Descripcion: " + desc + "\nError: "  + err);
					}
				});
				
			}
		  
		});
		
	});
	
	$('#btn_regresar').click(function(){
		$('.back-action').hide('fast');
		$('.carga_solicitudes').hide();
		$('.carga_reuniones').fadeIn('slow');
		$('#btn_aplicar_filtro').data('table', '0');
		$(".carga_solicitudes tbody tr").remove();
	});

});