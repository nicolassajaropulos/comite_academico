$(document).ready(function(){
	
	$.ajax({
		url: "../api/api.php/solicitudes_usuario",
		type: "GET",
		dataType: "JSON",
		success: function(data){
			console.log(data);
		},
		error: function(xhr, desc, err){
			console.log(xhr);
			console.log("Descripcion: " + desc + "\nError: "  + err);
		}
	});
	
});