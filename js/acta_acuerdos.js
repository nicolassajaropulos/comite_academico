$(document).ready(function(){
	
	$('.acta_acuerdo').hide();
	
	$('.btn-primary').click(function(){
		$('.lista_reuniones').hide();
		$('.acta_acuerdo').show('slow');
	});
});