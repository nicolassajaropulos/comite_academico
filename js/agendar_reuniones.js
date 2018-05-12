$(document).ready(function(){
	
	setTimeout(function(){
		$('#calendar').fullCalendar('today');
	},750);
	
	$('#btn_aceptar_reunion').click(function(){
		
		alert($('#txt_hora_inicio').val());
		alert($('#txt_hora_fin').val());
		
		$.ajax({
			url: '../api/api.php/cliente',
			type: 'POST',
			dataType: 'JSON',
			success:function(data){
				if(data['error'] == false){
					swal({
						title: "Sesión aceptada",
						text: "Enviado a página principal",
						type: "success",
						timer: 3000
					});
				}else{
					
					swal({
						title: "Datos no válidos",
						text: "El número de control o la contraseña no coinciden",
						type: "error",
						timer: 3000
					});
					
				}
			},
			error: function(xhr, desc, err){
				console.log(xhr);
				console.log("Detalles: " + desc + "\nError:" + err);
			}

		});
		
	});
	
	var calendar = $('#calendar').fullCalendar({
		
		lang: 'es',
		height: 550,
		allDaySlot:false,
		minTime: '06:00:00',
		maxTime: '23:00:00',
		eventLimit: 4,
		selectable: true,
		defaultView: 'month',
		
		//events: '',
		
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		
		select: function(start) {
			
			var fecha_seleccionada = $.fullCalendar.moment(start).format("YYYY MMMM DD");
			
			$('#fecha_reunion').html('<div class="col-md-12 col-12 alert alert-info text-center" role="alert"><h5> Día seleccionado: <strong>'+fecha_seleccionada+'</strong></h5></div>');
			
			$('#modal_reunion').modal('toggle');
			
		},
		
		eventClick: function(event) {
			alert("click");
		},
		
	});
	
});