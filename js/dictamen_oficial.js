$(document).ready(function(){
	
	$.ajax({
		url: '../api/api.php/solicitudes_estatus?estatus=5',
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
											  +'<button class="btn btn-primary btn-sm ml-1" data-id="'+v.id_solicitud+'" id="btn_desicion_final" data-user="'+v.nombre_usuario+'" data-priori="'+v.prioridad+'"><i class="fa fa-paste"></i> Desición final</button>'
											  +'</td>'
											+'</tr>');
			});
			
		},
		error: function(xhr, desc, err){
			console.log(xhr);
			console.log("Detalles: " + desc + "\nError: " + err);
		}
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
	
	$('.carga_solicitudes').on("click","#btn_desicion_final",function(){
		
		var id_solicitud = $(this).data('id');
		
		$('#btn_aceptar_validar_solicitud').data('id',id_solicitud);
		$('#btn_rechazar_validar_solicitud').data('id',id_solicitud);
		
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
						$('.empate').hide();
						$('.modal-footer').show();
					}else if(v['rechazadas'] > v['aceptadas']){
						$('.empate').hide();
						$('.modal-footer').show();
						solicitud_estatus = "Rechazada";
					}else{
						solicitud_estatus = "Votación igualada, requiere voto de calidad.";
						$('.modal-footer').hide();
						$('.empate').show();
					}
					
					$('.solicitud_estatus').html('<h5><strong>Desición comité:</strong> ' + solicitud_estatus + '</h5>');
					
				});
				
				$('#btn_almacenar_recomendacion').data('id', id_solicitud);
				
			},
			error: function(xhr, desc, err){
				console.log(xhr);
				console.log("Detalles: " + desc + "\nError: " + err);
			}
		});
		
		$.ajax({
			url: '../api/api.php/recomendacion?id_solicitud='+id_solicitud,
			type: 'GET',
			dataType: 'JSON',
			success:function(data){
				
				$(data.data).each(function(i,v){
					
					$('#txt_recomendacion').data('id',v.id_comentario);
					$('#txt_recomendacion').val(v.comentario);
					$('#txt_recomendacion').prop("disabled",true);
					
					$('#btn_validar_recomendacion').data('id',id_solicitud);
					
				});
				
			},
			error: function(xhr, desc, err){
				console.log(xhr);
				console.log("Detalles: " + desc + "\nError: " + err);
			}
		});
		
		$('#modal_desicion_final').modal('toggle');
		
	});
	
	$('#btn_rechazar_validar_solicitud').click(function(){
		
		$('#modal_desicion_final').modal('hide');
		
		var id_solicitud = $(this).data('id');
		var comentario = $('#txt_recomendacion').val();
		
		swal({
			title: "¿Desea rechazar la solicitud?",
			text: "Con esto usted rechaza la implementacion de esta solicitud.",
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
					url: "../api/api.php/actualizar_estatus_solicitud",
					type: "PUT",
					data: {
						"id_solicitud" : id_solicitud,
						"estatus" : "13"
					},
					success: function(data){
						
						setTimeout(function(){
							swal({
								title: "Solicitud rechazada!",
								type: "success",
								timer: 2000
							});
						},800);
						
						setTimeout(function(){
							cargarDiv("dictamen_oficial");
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
	
	$('#btn_aceptar_validar_solicitud').click(function(){
		
		var id_solicitud = $(this).data('id');
		
		$('#modal_desicion_final').modal('hide');
		
		swal({
			title: "¿Desea aceptar la solicitud?",
			text: "Con esto, usted accede a que se efectue la solicitud",
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
					url: "../api/api.php/actualizar_estatus_solicitud",
					type: "PUT",
					data: {
						"id_solicitud" : id_solicitud,
						"estatus" : "6"
					},
					success: function(data){
						
						setTimeout(function(){
							swal({
								title: "Solicitud aceptada!",
								type: "success",
								timer: 2000
							});
						},800);
						
						setTimeout(function(){
							cargarDiv("dictamen_oficial");
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
	
	
});