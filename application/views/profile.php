<!-- Buat Data Diri -->
<h1 class="page-header"><strong>Profil Saya</strong></h1>
<div class="container-fluid content-normal" style="padding: 0 5px 0 5px;">
	<div class="content-full">
		<div class="row">
			<div class="col-md-4">
				<img src="<?php echo base_url(); ?>img/y-tho.jpg" alt="" class="img">
			</div>
			<ul style="list-style-type: none; padding: 10px 0 0 25px;">
				<!--<li>
					<a href="#">
						<span class="glyphicon glyphicon-comment"></span>
						99 new messages
					</a>
				</li>-->
				<li>
					<span class="glyphicon glyphicon-user"></span>
					<?php echo $user[0]->uname; ?>
				</li>
				<li>
					<span class="glyphicon glyphicon-envelope"></span>
					<?php echo $user[0]->email; ?>
				</li>
				<li>
					<span class="glyphicon glyphicon-earphone"></span>
					<?php echo $user[0]->phone; ?>
				</li>
			</ul>
		</div>
	</div>
	<div class="content-full">
		<ul class="nav nav-pills nav-justified">
			<li class="active"><a href="#list" data-toggle="pill">List Seminar</a></li>
			<li><a href="#event" data-toggle="pill">My Event</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane fade in active" id="list">
			<table class="table table-bordered">
				<tr>
					<th>Photo</th>
					<th>Description</th>
				</tr>
				<?php for ($i=0; $i < 3; $i++) { ?>
				<tr>
					<td>
						<img src="<?php echo base_url(); ?>img/y-tho.jpg" alt="" class="img-responsive img-list">
					</td>
					<td>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum dolorum doloribus voluptate sit officiis veritatis consequuntur, praesentium quo voluptatibus aliquam mollitia maxime, impedit recusandae illo sapiente ab, fugit amet, eius.</p>
					</td>
				</tr>
				<?php } ?>
			</table>
			</div>
			<div class="tab-pane fade in" id="event">
			<table class="table table-striped">
				<tr>
					<th>Photo</th>
					<th>Description</th>
				</tr>
				<?php foreach ($sem as $seminar) {
					
				?>
				<tr>
					<td>
						<img src="<?php echo base_url($seminar->sem_img); ?>" alt="" class="img-responsive img-list">
					</td>
					<td>
						<p><?php echo $seminar->sem_desc; ?></p>
					</td>
				</tr>
				<?php } ?>
			</table>
			</div>
		</div>
	</div>
	<div class="content-full" style="margin: 0 0 10px 10px; padding-right: 0;">
		<div id="calendar"></div>
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
	          <div class="events">
	            <div class="headers">
	              <div class="event-header">EVENT BULAN INI</div>
	            </div>
	            <div class="events-list">
	              <% _.each(eventsThisMonth, function(event) { %>
	                <div class="event">
	                  <a href="<%= event.url %>"><%= moment(event.date).format('MMMM Do') %>: <%= event.title %></a>
	                </div>
	              <% }); %>
	            </div>
	          </div>
	        </div>
	    </div>
	</center>
</script>