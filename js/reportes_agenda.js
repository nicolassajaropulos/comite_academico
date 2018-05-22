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
			var mes =  $.fullCalendar.moment(event).format("MM");
			var dia =  $.fullCalendar.moment(event).format("DD");
			
			$('#txt_fecha').val(año+"-"+mes+"-"+dia);
			
			$('#fecha_reunion').data("date",fecha_seleccionada);
			$('#fecha_reunion').html('<div class="col-md-12 col-12 alert alert-info text-center" role="alert"><h5> Día seleccionado: <strong>'+fecha_seleccionada+'</strong></h5></div>');
			
			$('#modal_reunion').modal('toggle');
		},
		
	});
	
});