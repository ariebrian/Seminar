<!-- Buat Data Diri -->
<h1 class="page-header"><strong>Profil Saya</strong></h1>
<div class="container-fluid content-normal" style="padding: 0 5px 0 5px;">
	<div class="content-full">
		<div class="row">
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
				<?php 
					// echo "<pre>";
					// var_dump($jadwal);
					// die();
					// echo "</pre>";
				 ?>
				<?php if ($jadwal[0] == false): ?>
					<p>Belum memasukkan event ke jadwal</p>
				<?php else:?>
				<tr>
					<th>Photo</th>
					<th>Name</th>
					<th>Date</th>
					<th>Description</th>
				</tr>
				<?php foreach ($jadwal as $sch) {?>
				<tr>
					<td>
						<img src="<?php echo base_url($sch[0]->sem_img); ?>" alt="" class="img-responsive img-list">
						<!--<p><?php echo $sch[0]->sem_name; ?></p>-->
					</td>
					<td>
						<p><?php echo $sch[0]->sem_name; ?></p>
					</td>
					<td>
						<p><?php echo $sch[0]->sem_date; ?></p>
					</td>
					<td>
						<p><?php echo $sch[0]->sem_desc; ?></p>
					</td>
				<?php } ?>
				<?php endif ?>
				</tr>
			</table>
			</div>
			<div class="tab-pane fade in" id="event">
			<table class="table table-striped">
				<?php if (empty($sem)): ?>
					<p>Belum memasukkan event</p>
				<?php else:?>	
				<tr>
					<th>Photo</th>
					<th>Name</th>
					<th>Description</th>
				</tr>
				<?php 	foreach ($sem as $seminar) {?>
				<tr>
					<td>
						<img src="<?php echo base_url($seminar->sem_img); ?>" alt="" class="img-responsive img-list">
					</td>
					<td>
						<p><?php echo $seminar->sem_name; ?></p>
					</td>
					<td>
						<p><?php echo $seminar->sem_desc; ?></p>
					</td>
				<?php } ?>
				
				<?php endif ?>
				</tr>
				
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
		<?php if ($jadwal[0]) : ?>
		events: [
			<?php foreach ($jadwal as $key): ?>
				{
					title: '<?php echo $key->sem_name; ?>',
					start: '<?php echo $key->sem_date; ?>'
				},
			<?php endforeach; ?>
		]
		<?php endif; ?>
	});

</script>