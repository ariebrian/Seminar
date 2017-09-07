<div class="page-header">
	<h1><strong>Create Event</strong></h1>
</div>
<div class="container-fluid">
	<div class="col-md-4">
		<center>	
			<img src="<?php echo base_url(); ?>img/y-tho.jpg" alt="" class="img img-responsive img-thumbnail img-upload">
			<a href="#" class="btn btn-warning">Select Photo</a>
		</center>
	</div>
	<div class="col-md-8">
		<form action="#" class="sem-content">
		<div class="sem-desc-head">
			<h4>Tambahkan Event Anda</h4>
		</div>
		<div class="sem-desc-body">
			
			<div class="form-group">
				<label for="nama">Nama Seminar</label>
				<input type="text" class="form-control" id="nama" name="nama">
			</div>
			<div class="form-group">
				<label for="tanggal">Tanggal Seminar</label>
				<input type="text" class="form-control" id="tanggal" name="tanggal">
			</div>
			<div class="form-group">
				<label for="CP">CP Seminar</label>
				<input type="text" class="form-control" id="CP" name="CP">
			</div>
			<div class="form-group">
				<label for="desc">Deskripsi Seminar</label>
				<textarea class="form-control" id="desc" name="desc" rows="10"></textarea>
			</div>
			<div class="form-group">
				<label for="link">Link Seminar</label>
				<input type="url" class="form-control" id="link" name="link">
			</div>
		</div>
		<div class="sem-desc-foot">
			<center>	
				<input type="submit" class="btn btn-lg btn-success">
			</center>
		</div>
		</form>
	</div>
</div>