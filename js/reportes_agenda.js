$(document).ready(function(){
	
	setTimeout(function(){
		$('#calendar').fullCalendar('today');
	},750);
	
	
	var calendar = $('#calendar').fullCalendar({
		
		lang: 'es',
		height: 550,
		allDaySlot:false,
		minTime: '00:00:00',
		maxTime: '23:59:00',
		eventLimit: 4,
		selectable: true,
		defaultView: 'month',
		
		events: '../modelo/select/reuniones_fullcalendar.php',
		
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		
		eventClick: function(event) {
			
			var fecha_seleccionada = $.fullCalendar.moment(event).format("DD MMMM YYYY");
			
			var año = $.fullCalendar.moment(event).format("YYYY") ;
			var mes =  $.fullCalendar.moment(event).format("MMMM");
			var dia =  $.fullCalendar.moment(event).format("DD");
			
			$('#fecha_reunion').html('<div class="col-md-12 col-12 alert alert-info text-center" role="alert"><h5> Día seleccionado: <strong>'+ (dia - 1) + ' ' + mes + ' ' + año +'</strong></h5></div>');
			
			var nombre_evento = event.title;
			
			var id_reunion = nombre_evento.split(".");
			
			$.ajax({
					url: "../api/api.php/informacion_reunion",
					type: "GET",
					dataType: "JSON",
					data: {
						"id_reunion" : id_reunion[1]
					},
					success: function(data){
						
						$(data.data).each(function(i,v){
							$('#txt_hora_inicio').val(v.hora_inicio);
							$('#txt_hora_fin').val(v.hora_finalizada);
							
							$('#txt_hora_inicio').prop("disabled",true);
							$('#txt_hora_fin').prop("disabled",true);
							
							$('#lugar_reunion').html('<div class="col-md-12 col-12 alert alert-warning text-center" role="alert"><h5> Lugar: <strong>'+ v.nombre_lugar +'</strong></h5></div>');
							
							if(v.estatus == "1"){
								var mensaje = "Activa";
							}else{
								var mensaje = "Inactiva";
							}
							
							$('#estatus_reunion').html('<div class="col-md-12 col-12 alert alert-danger text-center" role="alert"><h5> Estado: <strong>'+ mensaje +'</strong></h5></div>');
							
						});
						
					},
					error: function(xhr, desc, err){
						console.log(xhr);
						console.log("Descripcion: " + desc + "\nError: "  + err);
					}
				});
			
			$('#modal_reunion').modal('toggle');
		},
		
	});
	
});