<?php 
$this->load->library('session');
if (!isset($_SESSION['uname'])) {
	redirect('login');
}

 ?>
<div class="page-header">
	<h1><strong>Create Event</strong></h1>
</div>
<div class="container-fluid">
	<div class="col-md-4">
		<?php echo form_open_multipart('Seminar/insert'); ?>
		<form method="post" enctype="multipart/form-data" action="#" class="sem-content">
		<center>	
			<!-- <img src="<?php echo base_url(); ?>img/y-tho.jpg" alt="" class="img img-responsive img-upload" id="photo-preview"> -->
			<input type="file" name="images" accept=".jpg,.png" class="btn btn-warning" id="images">
		</center>
	</div>
	<div class="col-md-8">
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
				<input type="date" class="form-control" id="tanggal" name="tanggal">
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
				<input type="text" class="form-control" id="link" name="link">
			</div>
		</div>
		<div class="sem-desc-foot">
			<center>	
				<input type="submit" class="btn btn-lg btn-success">
			</center>
		</div>
		</form>
		<?php echo form_close(); ?>
	</div>
</div>