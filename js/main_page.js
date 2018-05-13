$(document).ready(function(){
	
	$('.nav').on('click','.nav-link',function(){
		
		var nueva_vista = $(this).data('navi');
		
		cargarDiv(nueva_vista);
		
	});
	
	$('.logout').click(function(){
		$.ajax({
			url: '../logout.php',
			success:function(data){
				
				swal({
					title: "Cerrando sesión",
					type: "", 
					imageUrl: '../imagenes/logout.png',
					imageWidth: 400,
					imageHeight: 200,
					imageAlt: 'Custom image',
					animation: false,
					showCancelButton: false,
					showConfirmButton: false,
					timer: 2000
				});
				
				setTimeout(function(){
					window.location.href = "../index.php";
				},2000);
			},
			error: function(xhr, desc, err){
				console.log(xhr);
				console.log("Detalles: " + desc + "\nError:" + err);
			}
		});
	});
	
});


function cargarDiv(url){
	$('#cuerpo').load(url+'.php');
}
