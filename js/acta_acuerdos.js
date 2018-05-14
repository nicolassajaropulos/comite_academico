$(document).ready(function(){
	
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