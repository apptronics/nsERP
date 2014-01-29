</div> <!-- page-container -->
	<script src="<?php echo base_url('assets/jquery/js/jquery-1.10.2.js') ?>"></script>
	<script src="<?php echo base_url('assets/jquery/js/jquery-ui.min-1.10.4.js') ?>"></script>
	<script src="<?php echo base_url('assets/lodash/lodash-2.4.1.js') ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<?php
   $CI =& get_instance();
   if ($this->uri->segment(1) === "schedule")
   {
?>
   <script src="<?php echo base_url('assets/fullcalendar/fullcalendar.min.js') ?>" ></script>
<?php
}
?>
	<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
	<script>
	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		$('#calendar').fullCalendar({
			editable: true,
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					title: 'Long Event',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/'
				}
			]
		});
		
	});

</script>
</body>
</html>
