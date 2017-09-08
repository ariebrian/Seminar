$(document).ready(function() {
	/*
	 *	Calendar Event
	 **/
	$('#calendar').clndr({
		template: $('#calendar-template').html(),
		events:[
			{
				date: "2017-09-10",
				title: "wahaha"
			}
		],
		clickEvents: {
			click: function (target) {
				console.log(target);
			}
		},
	});

	/*
	 *	Click Event
	 **/
	$('#zoom-in').click(function() {
		$('#img01').css('cursor', 'zoom-in');
	});
	$('#zoom-out').click(function() {
		$('#img01').css('cursor', 'zoom-out');
	});
	$('#img-modal').click(function() {
		$('#myModal').css('display', 'block');
		$('#img01').prop('src', this.src)
	});
	$('.close').click(function() {
		$('#myModal').css('display', 'none');
	});
	$('#img01').click(function() {
		var status = $('#img01').css('cursor');
		if (status == "zoom-in") {
			$('#img01').css({
				"min-height": 'auto',
				"max-height": 'max-content',
				"min-width": 'auto',
				"max-width": 'max-content',
			});
		} else {
			$('#img01').css({
				"min-height": '',
				"max-height": '',
				"min-width": '',
				"max-width": '',
			});
		}
	});

	/*
	 *	Key Pressed Event
	 **/
	 $(document).keyup(function(e) {
	 	if (e.keyCode === 27) {		// ESC button
	 		$('#myModal').css('display', 'none');
	 	}
	 });

});