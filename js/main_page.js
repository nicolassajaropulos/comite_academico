$(document).ready(function(){
	
	$.ajax({
		url: '../api/api.php/datos_usuario_main',
		type: 'GET',
		dataType: 'JSON',
		success:function(data){
			
			$(data.data).each(function(i,v){
				$('#numero_control').html(v.numero_control);
				$('#nombre_usuario').html(v.nombre_usuario);
				$('#puesto').html(v.puesto);
				$('#papel_comite').html(v.prioridad);
			});
			
		},
		error: function(xhr, desc, err){
			console.log(xhr);
			console.log("Detalles: " + desc + "\nError:" + err);
		}
	});

	$.ajax({
		url: '../api/api.php/proxima_reunion',
		type: 'GET',
		dataType: 'JSON',
		success:function(data){
			
			$(data.data).each(function(i,v){
				$('#fecha_reunion').html(v.fecha+" "+ v.hora_inicio);
			});
			
		},
		error: function(xhr, desc, err){
			console.log(xhr);
			console.log("Detalles: " + desc + "\nError:" + err);
		}
	});
	
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
					imageWidth: 200,
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
