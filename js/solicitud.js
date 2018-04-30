$(document).ready(function(){
	
	$('#estudiante').hide();
	$('#profesor').hide();
	
	$('#btn_profesor').click(function(){
		$('#estudiante').hide('slow');
		$('#profesor').show('slow');
	});
	
	$('#btn_estudiante').click(function(){
		$('#profesor').hide('slow');
		$('#estudiante').show('slow');
	});
	
	
});