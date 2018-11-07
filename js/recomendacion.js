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
											  +'<td class="text-center"><button class="btn btn-info btn-sm" data-id="'+v.id_reunion+'" id="btn_solicitudes"><i class="fa fa-list-alt"></i> Solicitudes</button></td>'
											+'</tr>');
			});
		},
		error: function(xhr, desc, err){
			console.log(xhr);
			console.log("Detalles: " + desc + "\nError:" + err);
		}

	});
	
	$('.carga_reuniones').on("click","#btn_solicitudes",function(){
		
		var id_reunion = $(this).data("id");
		
		$.ajax({
			url: '../api/api.php/solicitudes_reunion_recomendacion?id_reunion='+id_reunion,
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
												  +'<button class="btn btn-info btn-sm" data-id="'+v.id_solicitud+'" id="btn_visualizar" data-user="'+v.nombre_usuario+'" data-priori="'+v.prioridad+'"><i class="fa fa-search"></i> Visualizar</button>'
												  +'<button class="btn btn-primary btn-sm ml-1" data-id="'+v.id_solicitud+'" id="btn_recomendacion" data-user="'+v.nombre_usuario+'" data-priori="'+v.prioridad+'"><i class="fa fa-clipboard-check"></i> Recomendacion</button>'
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
	
	$('.carga_solicitudes').on("click","#btn_recomendacion",function(){
		
		var id_solicitud = $(this).data('id');
		
		$.ajax({
			url: '../api/api.php/cuenta_validacion_solicitud?id_solicitud='+id_solicitud,
			type: 'GET',
			dataType: 'JSON',
			success:function(data){
				
				$(data.data).each(function(i,v){
					$('.numero_aceptadas').html('<h5><strong>Votos positivos:</strong> ' + v['aceptadas'] + '</h5>');
					$('.numero_rechazadas').html('<h5><strong>Votos negativos:</strong> ' + v['rechazadas'] + '</h5>');
					
					var solicitud_estatus = "";
					
					if( v['aceptadas'] > v['rechazadas']){
						solicitud_estatus = "Aceptada";
					}else if(v['rechazadas'] > v['aceptadas']){
						solicitud_estatus = "Rechazada";
					}else{
						solicitud_estatus = "Votación igualada, requiere voto de calidad.";
					}
					
					$('.solicitud_estatus').html('<h5><strong>Desición comité:</strong> ' + solicitud_estatus + '</h5>');
					
				});
				
				$('#btn_almacenar_recomendacion').data('id', id_solicitud);
				$('#btn_almacenar_recomendacion').data('response', solicitud_estatus);
				
			},
			error: function(xhr, desc, err){
				console.log(xhr);
				console.log("Detalles: " + desc + "\nError: " + err);
			}
		});
		
		$('#modal_recomendacion').modal('show');
	
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
	
	$('#btn_almacenar_recomendacion').click(function(){
		
		var id_solicitud = $(this).data('id');
		var comentario = $('#txt_recomendacion').val();
		
		$.ajax({
			url: "../api/api.php/comentario_solicitud",
			type: "POST",
			data: {
				"id_solicitud" : id_solicitud,
				"comentario" : comentario,
				"estatus" : '4'
			},
			success: function(data){
				
				$.ajax({
					url: "../api/api.php/actualizar_estatus_solicitud",
					type: "PUT",
					data: {
						"id_solicitud" : id_solicitud,
						"estatus" : "4"
					},
					success: function(data){
						
						setTimeout(function(){
							swal({
								title: "Exito!", 
								text: "Solicitud agendada en reunion",
								type: "success",
								timer: 2000
							});
						},200);
						
						setTimeout(function(){
							cargarDiv("recomendacion");
						},2000);
						
					},
					error: function(xhr, desc, err){
						console.log(xhr);
						console.log("Descripcion: " + desc + "\nError: "  + err);
					}
				});
				
			},
			error: function(xhr, desc, err){
				console.log(xhr);
				console.log("Descripcion: " + desc + "\nError: "  + err);
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