$(document).ready(function(){
	
	$('.carga_solicitudes').hide();
	$('.envidencia').hide();
	
	$('#btn_solicitud').click(function(){
		$('.carga_reuniones').hide();
		$('.carga_solicitudes').show('slow');
	});
	
	$('#btn_evidencia').click(function(){
		$('.carga_solicitudes').hide();
		$('.envidencia').show('slow');
	});
	
});