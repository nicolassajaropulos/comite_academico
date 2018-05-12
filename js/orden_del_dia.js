$(document).ready(function(){
	
	$('.carga_solicitudes').hide();
	
	$.ajax({
		url: '../api/api.php/reuniones',
		type: 'GET',
		dataType: 'JSON',
		data: datos,
		success:function(data){
			if(data['error'] == false){
				
			}else{
				
				
			}
		},
		error: function(xhr, desc, err){
			console.log(xhr);
			console.log("Detalles: " + desc + "\nError:" + err);
		}

	});
	
	$('.btn-info').click(function(){
		$('.carga_reuniones').hide();
		$('.carga_solicitudes').show('slow');
	});
	
});