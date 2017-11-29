<div class="page-header">
	<h1><strong>Deskripsi Seminar</strong></h1>
</div>
<div class="container-fluid content-full">
	<div class="col-md-4">
		<center>	
			<img src="<?php echo base_url().$details[0]->sem_img; ?>" id="img-modal">

			<div id="myModal" class="modal">
				<span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

				<img class="modal-content" id="img01" data-zoom-image="<?php echo base_url(); ?>img/y-tho.png">
			</div>
		</center>
	</div>
	<div class="col-md-4">
		<center>
			<h2 class="title"><?php echo $details[0]->sem_name; ?></h2>
			<p><?php echo $details[0]->sem_date; ?></p>
			<p><?php echo $details[0]->sem_cp; ?></p>
			<p>For Registration, Please <a href="<?php echo $details[0]->link_reg; ?>" class="link-cp" style="color: blue;">Click Here</a></p>
		</center>
	</div>
	<div class="col-md-4">
		<div id="calendar"></div>
	</div>
</div>
<div class="content-full">
	<p class="sem-desc-head">
		Deskripsi Seminar
	</p>
	<p class="sem-desc-body">
		<?php echo $details[0]->sem_desc; ?>
	</p>
	<div class="sem-desc-foot">
		<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>Add To Your List</a>
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