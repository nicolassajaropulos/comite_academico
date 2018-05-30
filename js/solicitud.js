$(document).ready(function(){
	
	$.ajax({
		url: "../api/api.php/datos_usuario",
		type: "GET",
		dataType: "JSON",
		success:function(data){
			$(data.data).each(function(i,v){
				$('#txt_nombre_estudiante').val(v.nombre_usuario);
				$('#txt_nombre_estudiante').data("id",v.numero_control);
				$('#txt_nombre_estudiante').prop("disabled",true);
				$('#txt_carrera_estudiante').val(v.nombre_carrera);
				$('#txt_carrera_estudiante').prop("disabled",true);
				
				$('#txt_nombre_profesor').val(v.nombre_usuario);
				$('#txt_nombre_profesor').data("id",v.numero_control);
				$('#txt_nombre_profesor').prop("disabled",true);
				$('#txt_carrera_profesor').val(v.nombre_carrera);
				$('#txt_carrera_profesor').prop("disabled",true);
			});
		},
		error:function(xhr, desc, err){
			console.log(xhr);
			console.log("Descripcion: " + desc + "\nError" + err);
		}
	});
	
	$.ajax({
		url: "../api/api.php/coordinador_carrera",
		type: "GET",
		dataType: "JSON",
		success:function(data){
			$('#txt_nombre_estudiante').data("cord", data['data']);
			$('#txt_nombre_profesor').data("cord", data['data']);
		},
		error:function(xhr, desc, err){
			console.log(xhr);
			console.log("Descripcion: " + desc + "\nError" + err);
		}
	});
	
	
	$('#btn_aceptar').click(function(){
		
		if($.trim($('#txt_solicitud_estudiante').val()) != '' && $.trim($('#txt_solicitud_profesor').val()) != ''){
			
			if($(this).data("session") == "4"){
				var datos = {
					"session" : $(this).data("session"),
					"id_estudiante" : $('#txt_nombre_estudiante').data("id"),
					"coordinador" : $('#txt_nombre_estudiante').data("cord"),
					"solicitud" : $('#txt_solicitud_estudiante').val(),
					"motivos_academicos" : $('#txt_motivos_academicos_estudiante').val(),
					"motivos_personales" : $('#txt_motivos_personales_estudiante').val(),
					"motivos_otros" : $('#txt_motivos_otros_estudiante').val()
				}
			}else{
				var datos = {
					"session" : $(this).data("session"),
					"id_profesor" : $('#txt_nombre_profesor').data("id"),
					"coordinador" : $('#txt_nombre_profesor').data("cord"),
					"solicitud" : $('#txt_solicitud_profesor').val(),
					"motivos_academicos" : $('#txt_motivos_academicos_profesor').val()
				}
			}
			
			$.ajax({
				url: "../api/api.php/almacenar_solicitud",
				type: "POST",
				data: datos,
				success:function(data){
					swal({
						title: "Solicitud creada con éxito",
						text: "Solicitud enviada a coordinador de carrera para validación",
						type: "success",
						timer: 2500
					});
					
					cargarDiv('solicitud');
				},
				error:function(xhr, desc, err){
					console.log(xhr);
					console.log("Descripcion: " + desc + "\nError" + err);
				}
			});
			
		}else{
			swal({
				title: "Error!",
				text: "Favor de especificar la solicitud",
				type: "error",
				timer: 2000
			});
		}
		
		
	});

	/* DROPZONE */
	// Disabling autoDiscover, otherwise Dropzone will try to attach twice.
	Dropzone.autoDiscover = false;

	Dropzone.options.myDropzone = {
	  	init: function() {
	    	this.on("addedfile", (file) => { console.log('Added: ' + file.name) });
	    	this.on('success', (file, response) => { console.log(response); });
	  	}
	};

	var myDropzone = new Dropzone('.dropzone', {
		url: '../api/api.php/imagenes',
		dictDefaultMessage: 'Arrastra archivos aquí para cargar o da click para seleccionar uno.',
		acceptedFiles: 'image/*',
		autoProccessQueue: false,
		autoQueue: false
	});

	$('#upload').click((event) => {
		myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
	});
	
});