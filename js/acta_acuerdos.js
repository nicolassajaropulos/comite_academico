$(document).ready(function(){
	
	
	$('.btn_anio').click(function(){
		
		var anio = $(this).data('id');
		
		$('#datos').data('anio', anio);
		
		$('.div_anio').hide();
		$('.div_mes').fadeIn('slow');
		
	});
	
	$('.btn_mes').click(function(){
		
		var anio = $('#datos').data('anio');
		var mes = $(this).data('id');
		
		$.ajax({
			url: '../api/api.php/solicitudes_fecha',
			type: 'GET',
			dataType: 'JSON',
			data:{
				"anio" : anio,
				"mes" : mes
			},
			success:function(data){
				
				$(data.data).each(function(i,v){
					$('.carga_solicitudes').append('<tr>'
												  +'<td>'+v.id_solicitud+'</td>'
												  +'<td>'+v.solicitud+'</td>'
												  +'<td>'+v.nombre_usuario+'</td>'
												  +'<td>'+v.fecha_creacion+'</td>'
												  +'<td class="text-center">'
												  +'<button class="btn btn-info btn-sm mr-1" data-id="'+v.id_solicitud+'" id="btn_visualizar" data-user="'+v.nombre_usuario+'" data-priori="'+v.prioridad+'"><i class="fa fa-search"></i> Visualizar</button>'
												  +'<button class="btn btn-primary btn-sm mr-1" data-id="'+v.id_solicitud+'" id="btn_comentarios" data-user="'+v.nombre_usuario+'" data-priori="'+v.prioridad+'"><i class="fas fa-sticky-note"></i> Comentarios</button>'
												  +'</td>'
												+'</tr>');
				});
				
			},
			error: function(xhr, desc, err){
				console.log(xhr);
				console.log("Detalles: " + desc + "\nError: " + err);
			}
		});
		
		$('.div_mes').hide();
		$('.carga_solicitudes').fadeIn('slow');
		
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
	
	$('.carga_solicitudes').on("click","#btn_comentarios",function(){

		var id_solicitud = $(this).data('id');
		
		$('.carga_comentarios tbody tr').remove();
		
		$.ajax({
			url: "../api/api.php/solicitud_comentarios",
			type: "GET",
			dataType: "JSON",
			data: {
				"id_solicitud" : id_solicitud
			},
			success: function(data){
				
				$(data.data).each(function(i,v){
					
					var estado_voto = "";
					if(v.estatus == "2"){
						estado_voto = "Aceptada";
					}else{
						estado_voto = "Rechazada";
					}
					
					$('.carga_comentarios').append('<tr>'
												  +'<td>'+ v.nombre_usuario +'</td>'
												  +'<td>'+ v.comentario +'</td>'
												  +'<td>'+ estado_voto +'</td>'
												+'</tr>');
												
				});
				
			},
			error: function(xhr, desc, err){
				console.log(xhr);
				console.log("Descripcion: " + desc + "\nError: "  + err);
			}
		});
		
		$('#modal_comentario').modal('toggle');
		
	});
	
	$('.div_mes').hide();
	$('.carga_solicitudes').hide();
	$('.acta_acuerdo').hide();
	$('.back-action').hide();
	
	$('.btn_acta_acuerdos').click(function(){
		$('.lista_reuniones').hide();
		$('.acta_acuerdo').show('slow');
		$('.back-action').show('slow');
	});

	$('#btn_regresar').click(function(){
		$('.lista_reuniones').show('slow');
		$('.acta_acuerdo').hide();
		$('.back-action').hide('slow');
	});

	
	// MODAL FILTROS

	$('.datepicker').datepicker({
	    format: 'dd/mm/yyyy',
	    language: 'es',
	    todayBtn: "linked",
	    autoclose: true,
	    todayHighlight: true
	});

	$('#btn_limpiar_filtro').click(function(){
		$('#txt_fecha_reunion_filtro').val('');
		$('#txt_convocador_filtro').val('');
		$('#btn_aplicar_filtro').click();
	});

	$('#btn_aplicar_filtro').click(function(){

		var date_filter = $.trim($('#txt_fecha_reunion_filtro').val().toUpperCase());
		var name_filter = $.trim($('#txt_convocador_filtro').val().toUpperCase());
		var name = "", date = "";

		$('#tbl_recomendaciones tbody tr').each(function(){

			date = $(this).find("td").eq(0).html().toUpperCase();
			name = $(this).find("td").eq(1).html().toUpperCase();

			if ((date_filter == "" || date.indexOf(date_filter) > -1) && (name_filter == "" || name.indexOf(name_filter) > -1)){
				$(this).show();
			} else {
				$(this).hide();
			}

		});

		$('#dlg_filtro').modal('hide');

	});

});