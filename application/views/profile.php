<!-- Buat Data Diri -->
<h1 class="page-header"><strong>Profil Saya</strong></h1>
<div class="container-fluid content-normal" style="padding: 0 5px 0 5px;">
	<div class="content-full">
		<div class="row">
			<div class="col-md-4">
				<img src="<?php echo base_url(); ?>img/y-tho.jpg" alt="" class="img">
			</div>
			<ul style="list-style-type: none; padding: 10px 0 0 25px;">
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
				<?php foreach ($sem as $seminar) {?>
				<tr>
					<td>
						<img src="<?php echo base_url($seminar->sem_img); ?>" alt="" class="img-responsive img-list">
					</td>
					<td>
						<p><?php echo $seminar->sem_desc; ?></p>
					</td>
				</tr>
				<?php endforeach ?>
			</table>
			</div>
		</div>
	</div>
	<div class="content-full" style="margin: 0 0 10px 10px; padding-right: 0;">
		<center>
			<div id="calendar"></div>
		</center>
	</div>
</div>

<script>
	$('#calendar').fullCalendar({
		header: {
			left: 'prev, next',
			center: 'title',
			right: ''
		},
		editable: false,
		events: [
			<?php foreach ($sem as $key): ?>
				{
					title: '<?php echo $key->sem_name; ?>',
					start: '<?php echo $key->sem_date; ?>'
				},
			<?php endforeach ?>
		]
	});

</script>