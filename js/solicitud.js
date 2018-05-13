$(document).ready(function(){
	
	$.ajax({
		url: "../api/api.php/datos_usuario",
		type: "GET",
		dataType: "JSON",
		success:function(data){
			$(data.data).each(function(i,v){
				$('#txt_nombre_estudiante').val(v.nombre_usuario);
				$('#txt_nombre_estudiante').prop("disabled",true);
				$('#txt_carrera_estudiante').val(v.nombre_carrera);
				$('#txt_carrera_estudiante').prop("disabled",true);
			});
		},
		error:function(xhr, desc, err){
			console.log(xhr);
			console.log("Descripcion: " + desc + "\nError" + err);
		}
	});
	
});