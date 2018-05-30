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
											  +'<td class="text-center"><button class="btn btn-info btn-sm" data-id="'+v.id_reunion+'" id="btn_orden_dia"><i class="fa fa-list-alt"></i> Solicitudes</button></td>'
											+'</tr>');
			});
		},
		error: function(xhr, desc, err){
			console.log(xhr);
			console.log("Detalles: " + desc + "\nError:" + err);
		}

	});

	/* DROPZONE */
	// Disabling autoDiscover, otherwise Dropzone will try to attach twice.
	Dropzone.autoDiscover = false;

	Dropzone.options.myDropzone = {
	  	init: function() {
	    	this.on("addedfile", (file) => { console.log('Added: ' + file.name); });
	    	this.on('success', (file, response) => { console.log('Success: ' + response); });
	  	}
	};

	var myDropzone = new Dropzone('.dropzone', {
		url: '../api/api.php/imagenes',
		dictDefaultMessage: 'Arrastra archivos aquí para cargar o da click para seleccionar uno.',
		acceptedFiles: 'image/*',
		autoProccessQueue: false,
		autoQueue: false
	});

	$('.upload').click((event) => {
		console.log($('#btn_id_solicitud_profesor').val());
		console.log($('#btn_id_solicitud_estudiante').val());
		// myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
	});
	
	$('.carga_reuniones').on("click","#btn_orden_dia",function(){
		
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
												  +'<button class="btn btn-info btn-sm mr-1" data-id="'+v.id_solicitud+'" id="btn_visualizar" data-user="'+v.nombre_usuario+'" data-priori="'+v.prioridad+'"><i class="fa fa-search"></i> Visualizar</button>'
												  // +'<button class="btn btn-success btn-sm mr-1" data-id="'+v.id_solicitud+'" id="btn_aceptar" data-user="'+v.nombre_usuario+'"><i class="fa fa-check"></i> Aceptar</button>'
												  // +'<button class="btn btn-danger btn-sm" data-id="'+v.id_solicitud+'" id="btn_rechazar" data-user="'+v.nombre_usuario+'"><i class="fa fa-times"></i> Rechazar</button>'
												  +'</td>'
												+'</tr>');
				});
				
				$('.carga_solicitudes').append('<tr class="btn_agendar_solicitud" data-id="'+id_reunion+'">'+
													'<td colspan="5" class="text-center"><strong><i class="fa fa-calendar-plus"></i> Agendar solicitud en esta reunión</strong></td>'+
												'</tr>');
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

	$('.carga_solicitudes').on("click",".btn_agendar_solicitud",function(){
		
		$('.carga_solicitudes_pendientes tbody tr').remove();
		
		var id_reunion = $(this).data('id');
		
		$.ajax({
			url: "../api/api.php/solicitudes_estatus",
			type: "GET",
			dataType: "JSON",
			data: {
				"estatus" : "2"
			},
			success: function(data){
				
				$(data.data).each(function(i,v){
					$('.carga_solicitudes_pendientes').append('<tr>'
												  +'<td>'+v.id_solicitud+'</td>'
												  +'<td>'+v.nombre_usuario+'</td>'
												  +'<td>'+v.solicitud+'</td>'
												  +'<td>'+v.fecha_creacion+'</td>'
												  +'<td class="text-center">'
												  +'<button class="btn btn-info btn-block btn-sm mr-1" data-id="'+v.id_solicitud+'" id="btn_visualizar" data-user="'+v.nombre_usuario+'" data-priori="'+v.prioridad+'"><i class="fa fa-search"></i> Visualizar</button>'
												  +'<button class="btn btn-success btn-block btn-sm mr-1" data-id-solicitud="'+v.id_solicitud+'" data-id-reunion="'+id_reunion+'" id="btn_agendar_solicitud_pendiente" data-user="'+v.nombre_usuario+'"><i class="fa fa-calendar-alt"></i> Agendar</button>'
												  +'</td>'
												+'</tr>');
				});
				
			},
			error: function(xhr, desc, err){
				console.log(xhr);
				console.log("Descripcion: " + desc + "\nError: "  + err);
			}
		});
		
		$('#modal_solicitudes_pendientes').modal('toggle');
		
	});
	
	$('.carga_solicitudes_pendientes').on("click","#btn_agendar_solicitud_pendiente",function(){
		
		var id_reunion = $(this).data('id-reunion');
		var id_solicitud = $(this).data('id-solicitud');
		
		$.ajax({
			url: "../api/api.php/solicitud_reunion",
			type: "POST",
			data: {
				"id_solicitud" : id_solicitud,
				"id_reunion" : id_reunion
			},
			success: function(data){
				
				$.ajax({
					url: "../api/api.php/actualizar_estatus_solicitud",
					type: "PUT",
					data: {
						"id_solicitud" : id_solicitud,
						"estatus" : "3"
					},
					success: function(data){
						
						$('#modal_solicitudes_pendientes').modal('hide');
						
						setTimeout(function(){
							swal({
								title: "Exito!", 
								text: "Solicitud agendada en reunion",
								type: "success",
								timer: 2000
							});
						},200);
						
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
	
	$('.carga_solicitudes').on("click","#btn_visualizar",function(){
		
		var prioridad_interesado = $(this).data("priori");
		
		if(prioridad_interesado == 4){
			$('#modal_visualizar_solicitud_estudiante').modal('show');
		}else{
			$('#modal_visualizar_solicitud_profesor').modal('show');
		}
		
		var id_solicitud = $(this).data('id');
		$('#btn_id_solicitud_profesor').val(id_solicitud);
		$('#btn_id_solicitud_estudiante').val(id_solicitud);

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
		
	});
	
	$('.carga_solicitudes_pendientes').on("click","#btn_visualizar",function(){
		
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
						"comentario" : comentario
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

	// MODAL PARA FILTROS

	$('.datepicker').datepicker({
	    format: 'dd/mm/yyyy',
	    language: 'es',
	    todayBtn: "linked",
	    autoclose: true,
	    todayHighlight: true
	});

	$('#btn_limpiar_filtro').click(function(){
		$('#txt_fecha_filtro').val('');
		$('#txt_convocador_filtro').val('');
		$('#btn_aplicar_filtro').click();
	});

	$('#btn_aplicar_filtro').click(function(){

		var date_filter = $.trim($('#txt_fecha_filtro').val().toUpperCase());
		var name_filter = $.trim($('#txt_convocador_filtro').val().toUpperCase());
		var name = "", date = "";

		if ($(this).data('table') == 0) {

			$('.carga_reuniones tbody tr').each(function(){

				name = $(this).find("td").eq(0).html().toUpperCase();
				date = $(this).find("td").eq(1).html().toUpperCase();

				if ((date_filter == "" || date.indexOf(date_filter) > -1) && (name_filter == "" || name.indexOf(name_filter) > -1)){
					$(this).show();
				} else {
					$(this).hide();
				}

			});

		} else {
			
			$('.carga_solicitudes tbody tr').each(function(){

				name = $(this).find("td").eq(0).html().toUpperCase();
				date = $(this).find("td").eq(2).html().toUpperCase();

				if ((date_filter == "" || date.indexOf(date_filter) > -1) && (name_filter == "" || name.indexOf(name_filter) > -1)){
					$(this).show();
				} else {
					$(this).hide();
				}

			});

		}

		$('#dlg_filtro').modal('hide');

	});
	
});