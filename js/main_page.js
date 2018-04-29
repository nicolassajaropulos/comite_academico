$(document).ready(function(){
	
	$('.nav_bar_secretario').hide();
	$('.nav_bar_miembro').hide();
	$('.nav_bar_interesado').hide();
	
	$('.nav').on('click','.nav-link',function(){
		
		var nueva_vista = $(this).data('navi')+'.php';
		
		cargarDiv(nueva_vista);
		
	});
	
});


function cargarDiv(url){
	$('#cuerpo').load(url);
}
