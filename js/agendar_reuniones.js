$(document).ready(function(){
	
	setTimeout(function(){
		$('#calendar').fullCalendar('today');
	},750);
	
	
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
			alert("select");
		},
		
		eventClick: function(event) {
			alert("click");
		},
		
		/*eventDrop: function(event, delta, revertFunc) {alert(event.title + " was dropped on " + event.start.format());if (!confirm("Are you sure about this change?")) {revertFunc();}},
		eventResize: function(event) {swal({title: "Cuidado",text: "No se puede modificar la duración de la reservación",type: "error",timer: "2000"});revertFunc();}*/
		
	});
	
});