$(document).ready(function(){
	
	$('.input-group').hide();
	
	setTimeout(function(){
		$('#calendar').fullCalendar('today');
	},750);
	
	$('#btn_aceptar_reunion').click(function(){
		
		var fecha = $('#txt_fecha').val();
		
		var datos = {
			"fecha" : fecha,
			"hora_inicio" : $('#txt_hora_inicio').val(),
			"hora_fin" : $('#txt_hora_fin').val()
		};
		
		$.ajax({
			url: '../api/api.php/reunion',
			type: 'POST',
			dataType: 'JSON',
			data: datos,
			success:function(data){
				
				console.log(data);
				
				$('#modal_reunion').modal('hide');
				
				if(data['error'] == false){
					swal({
						title: "Exito!",
						text: "Reunión agendada correctamente",
						type: "success",
						timer: 2500
					});
				}else{
					swal({
						title: "Error",
						text: "Fallo al agendar su reunión",
						type: "error",
						timer: 2500
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
		
		select: function(start) {
			
			var fecha_seleccionada = $.fullCalendar.moment(start).format("DD MMMM YYYY");
			
			var año = $.fullCalendar.moment(start).format("YYYY") ;
			var mes =  $.fullCalendar.moment(start).format("MM");
			var dia =  $.fullCalendar.moment(start).format("DD");
			
			$('#txt_fecha').val(año+"-"+mes+"-"+dia);
			
			$('#fecha_reunion').data("date",fecha_seleccionada);
			$('#fecha_reunion').html('<div class="col-md-12 col-12 alert alert-info text-center" role="alert"><h5> Día seleccionado: <strong>'+fecha_seleccionada+'</strong></h5></div>');
			
			$('#modal_reunion').modal('toggle');
			
		},
		
		eventClick: function(event) {
			alert("click");
		},
		
	});
	
	$(function(){  
		$('input[type="time"][value="now"]').each(function(){    
			var d = new Date(),        
				h = d.getHours(),
				m = d.getMinutes();
			if(h < 10) h = '0' + h; 
			if(m < 10) m = '0' + m; 
			$(this).attr({
				'value': h + ':' + m
			});
		});
	});
	
});