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
											  +'<td><button class="btn btn-info btn-sm" data-id="'+v.id_reunion+'" id="btn_orden_dia"><i class="fa fa-list-alt"></i> Solicitudes</button></td>'
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
			url: '../api/api.php/solicitudes_reunion?id_reunion='+id_reunion,
			type: 'GET',
			dataType: 'JSON',
			success:function(data){
				console.log(data);
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

	// MENU DE NAVEGACIÓN DE LA DERECHA

	$('#btn_aceptar').click(function(){
		// Accion para btn_aceptar
	});

	$('#btn_regresar').click(function(){
		$('.back-action').hide('fast');
		$('.carga_solicitudes').hide();
		$('.carga_reuniones').show('slow');
		$('#btn_aplicar_filtro').data('table', '0');
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