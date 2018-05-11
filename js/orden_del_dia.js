$(document).ready(function(){
	
	$('.carga_solicitudes').hide();
	
	$('.btn-info').click(function(){
		$('.carga_reuniones').hide();
		$('.carga_solicitudes').show('slow');
	});
	
});