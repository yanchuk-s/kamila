$(function() {
  	"use strict";
  	$("#form-select").selectbox();
	if($(window).width() >= 768) {
    	$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek'
			},
			defaultDate: '2016-05-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			firstDay: 1,
			columnFormat: 'dddd',
			displayEventEnd: true,
			timeFormat: 'h:mm A',
			eventLimit: 2,
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				var title = prompt('Event Title:');
				var eventData;
				if (title) {
					eventData = {
						title: title,
						start: start,
						end: end
					};
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
				}
				$('#calendar').fullCalendar('unselect');
			},
			events: [
				{
					title: 'Dental Care',
					start: '2016-04-27 08:00:00',
					end: '2016-04-27 10:00:00'
				},
				{
					title: 'Cancer Center',
					start: '2016-05-04 08:00:00',
					end: '2016-05-04 10:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Psychology',
					start: '2016-05-04 15:00:00',
					end: '2016-05-04 19:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Vet Clinic',
					start: '2016-05-05 09:00:00',
					end: '2016-05-05 11:00:00',
				},
				{
					title: 'General Surgery',
					start: '2016-05-02 08:00:00',
					end: '2016-05-02 10:00:00'
				},
				{
					title: 'Heart Center',
					start: '2016-04-29 08:00:00',
					end: '2016-04-29 10:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Pediatric',
					start: '2016-04-29 15:00:00',
					end: '2016-04-29 19:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Maternity',
					start: '2016-04-30 09:00:00',
					end: '2016-04-30 11:00:00'
				},
				{
					title: 'Dental Care',
					start: '2016-05-10 08:00:00',
					end: '2016-05-10 10:00:00'
				},
				{
					title: 'Heart Center',
					start: '2016-05-12 08:00:00',
					end: '2016-05-12 10:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Pediatric',
					start: '2016-05-12 15:00:00',
					end: '2016-05-12 19:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Cancer Center',
					start: '2016-05-24 08:00:00',
					end: '2016-05-24 10:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Psychology',
					start: '2016-05-24 15:00:00',
					end: '2016-05-24 19:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Maternity',
					start: '2016-05-20 09:00:00',
					end: '2016-05-20 11:00:00'
				},
				{
					title: 'Dermatology',
					start: '2016-05-27 17:00:00',
					end: '2016-05-27 19:00:00'
				},
				{
					title: 'Cancer Center',
					start: '2016-05-30 08:00:00',
					end: '2016-05-30 10:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Psychology',
					start: '2016-05-30 15:00:00',
					end: '2016-05-30 19:00:00',
					backgroundColor: '#0f77ad'
				}
			]
		});
    } else {
		$('#calendar').fullCalendar({
			// defaultView: 'agendaDay',
			firstDay: 1,
			displayEventEnd: true,
			timeFormat: 'H:mm',
			columnFormat: 'ddd',
			eventLimit: 1,
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				var title = prompt('Event Title:');
				var eventData;
				if (title) {
					eventData = {
						title: title,
						start: start,
						end: end
					};
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
				}
				$('#calendar').fullCalendar('unselect');
			},
			events: [
				{
					title: 'Dental Care',
					start: '2016-04-27 08:00:00',
					end: '2016-04-27 10:00:00'
				},
				{
					title: 'Cancer Center',
					start: '2016-05-04 08:00:00',
					end: '2016-05-04 10:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Psychology',
					start: '2016-05-04 15:00:00',
					end: '2016-05-04 19:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Vet Clinic',
					start: '2016-05-05 09:00:00',
					end: '2016-05-05 11:00:00',
				},
				{
					title: 'General Surgery',
					start: '2016-05-02 08:00:00',
					end: '2016-05-02 10:00:00'
				},
				{
					title: 'Heart Center',
					start: '2016-04-29 08:00:00',
					end: '2016-04-29 10:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Pediatric',
					start: '2016-04-29 15:00:00',
					end: '2016-04-29 19:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Maternity',
					start: '2016-04-30 09:00:00',
					end: '2016-04-30 11:00:00'
				},
				{
					title: 'Dental Care',
					start: '2016-05-10 08:00:00',
					end: '2016-05-10 10:00:00'
				},
				{
					title: 'Heart Center',
					start: '2016-05-12 08:00:00',
					end: '2016-05-12 10:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Pediatric',
					start: '2016-05-12 15:00:00',
					end: '2016-05-12 19:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Cancer Center',
					start: '2016-05-24 08:00:00',
					end: '2016-05-24 10:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Psychology',
					start: '2016-05-24 15:00:00',
					end: '2016-05-24 19:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Maternity',
					start: '2016-05-20 09:00:00',
					end: '2016-05-20 11:00:00'
				},
				{
					title: 'Dermatology',
					start: '2016-05-27 17:00:00',
					end: '2016-05-27 19:00:00'
				},
				{
					title: 'Cancer Center',
					start: '2016-05-30 08:00:00',
					end: '2016-05-30 10:00:00',
					backgroundColor: '#0f77ad'
				},
				{
					title: 'Psychology',
					start: '2016-05-30 15:00:00',
					end: '2016-05-30 19:00:00',
					backgroundColor: '#0f77ad'
				}
			],
		 	eventRender: function(event, element) {
				element.popover({
					title: event.title,
					placement: 'top'
				});
			}
		});
    }
  
});