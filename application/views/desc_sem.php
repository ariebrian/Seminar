<div class="page-header">
	<h1><strong>Deskripsi Seminar</strong></h1>
</div>
<div class="container-fluid content-full">
	<div class="col-md-4">
		<center>	
			<img src="<?php echo base_url(); ?>img/whaha.png" id="img-modal">

			<div id="myModal" class="modal">
				<span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

				<img class="modal-content" id="img01" data-zoom-image="<?php echo base_url(); ?>img/y-tho.png">
			</div>
		</center>
	</div>
	<div class="col-md-4">
		<center>
			<h2 class="title">Nama Seminar</h2>
			<p>Date</p>
			<p>CP</p>
			<p>For Registration, Please <a href="#" class="link-cp">Click Here</a></p>
		</center>
	</div>
	<div class="col-md-4">
		<div id="calendar"></div>
	</div>
</div>
<div class="content-full" style="background-color: #ECEFF1;">
	<div class="sem-content">
		<p class="sem-desc-head">
			Deskripsi Seminar
		</p>
		<p class="sem-desc-body">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim modi eos ut, totam excepturi quisquam perspiciatis harum fugit explicabo reprehenderit quis reiciendis doloribus culpa molestiae neque sunt maiores assumenda necessitatibus?
		</p>
		<div class="sem-desc-foot">
			<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>Add To Your List</a>
		</div>
	</div>
</div>

<script type="text/template" id="calendar-template">
    <div class="controls">
        <div class="clndr-previous-button">&lsaquo;</div><div class="month"><center>
        	<%= month %> <%= year%></div><div class="clndr-next-button">&rsaquo;</div>
        </center>
      </div>

	<center>
	    <div class="days-container">
	    	<div class="days">
	        	<div class="headers">
	          		<% _.each(daysOfTheWeek, function(day) { %><div class="day-header"><%= day %></div><% }); %>
	          	</div>
	        <% _.each(days, function(day) { %><div class="<%= day.classes %>" id="<%= day.id %>"><%= day.day %></div><% }); %>
	        </div>
	    </div>
	</center>
</script>