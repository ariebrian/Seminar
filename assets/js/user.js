$(document).ready(function() {
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
		showAdjacentMonths: false,

	});
});