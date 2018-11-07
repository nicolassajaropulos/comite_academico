$(document).ready(function(){
	
	$.ajax({
		url: "../api/api.php/solicitudes_carrera",
		type: "GET",
		dataType: "JSON",
		success: function(data){
			
			$(data.data).each(function(i,v){
				$('.carga_solicitudes').append('<tr>'
											  +'<td>'+v.id_solicitud+'</td>'
											  +'<td>'+v.solicitud+'</td>'
											  +'<td>'+v.nombre_usuario+'</td>'
											  +'<td>'+v.fecha_creacion+'</td>'
											  +'<td>'
											  +'<button class="btn btn-info btn-sm mr-1" data-id="'+v.id_solicitud+'" id="btn_visualizar" data-user="'+v.nombre_usuario+'" data-priori="'+v.prioridad+'"><i class="fa fa-search"></i> Visualizar</button>'
											  +'<button class="btn btn-success btn-sm mr-1" data-id="'+v.id_solicitud+'" id="btn_aceptar" data-user="'+v.nombre_usuario+'"><i class="fa fa-check"></i> Aceptar</button>'
											  +'<button class="btn btn-danger btn-sm" data-id="'+v.id_solicitud+'" id="btn_rechazar" data-user="'+v.nombre_usuario+'"><i class="fa fa-times"></i> Rechazar</button>'
											  +'</td>'
											+'</tr>');
			});
			
		},
		error: function(xhr, desc, err){
			console.log(xhr);
			console.log("Descripcion: " + desc + "\nError: "  + err);
		}
	});
	
	$('.carga_solicitudes').on("click","#btn_visualizar",function(){
		
		var prioridad_interesado = $(this).data("priori");
		
		if(prioridad_interesado == 4){
			$('#modal_visualizar_solicitud_estudiante').modal('toggle');
		}else{
			$('#modal_visualizar_solicitud_profesor').modal('toggle');
		}
		
		$('.modal-title').html("Vista de Solicitud No. <strong>" + $(this).data('id') + "</strong>");
		
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
	
	$('.carga_solicitudes').on("click","#btn_aceptar",function(){
		
		var id_solicitud = $(this).data("id");
		
		swal({
			title: "¿Desea aceptar la solicitud de " + $(this).data("user") + "?",
			text: "La solicitud será enviada al comité para su revisión",
			type: "warning",
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
						"estatus" : "2"
					},
					success: function(data){
						
						setTimeout(function(){
							swal({
								title: "Exito!", 
								text: "Solicitud enviada al comite",
								type: "success",
								timer: 2000
							});
						},200);
						
						setTimeout(function(){
							cargarDiv("solicitudes_enviadas_coordinador");
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
	
	$('.carga_solicitudes').on("click","#btn_rechazar",function(){
		
		var usuario = $(this).data("user");
		var id_solicitud = $(this).data("id");
		
		$('.titulo_rechazar').html("¿Desea rechazar la solicitud de " + usuario + "?");
		
		$('#modal_rechazar_solicitud').modal("toggle");
		
		$('#btn_aceptar_rechazar_solicitud').data('id', id_solicitud);
		
	});
	
	$('#btn_aceptar_rechazar_solicitud').click(function(){
		
		var id_solicitud = $(this).data("id");
		var estatus = $('#txt_motivo').val();
		
		$.ajax({
			url: "../api/api.php/actualizar_estatus_solicitud",
			type: "PUT",
			data: {
				"id_solicitud" : id_solicitud,
				"estatus" : estatus
			},
			success: function(data){
				
				var comentario = $('#txt_comentario').val();
				
				$.ajax({
					url: "../api/api.php/comentario_solicitud",
					type: "POST",
					data: {
						"id_solicitud" : id_solicitud,
						"comentario" : comentario,
						"estatus" : '1'
					},
					success: function(data){
						
						$('#modal_rechazar_solicitud').modal('hide');
						
						setTimeout(function(){
							swal({
								title: "Exito!", 
								text: "Solicitud rechazada",
								type: "error",
								timer: 2000
							});
						},200);
						
						setTimeout(function(){
							cargarDiv("solicitudes_enviadas_coordinador");
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
	
	
});