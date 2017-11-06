<div class="content-normal">
	<?php if (validation_errors()): ?>
		<div class="alert alert-danger" role="alert">
			<?php echo validation_errors(); ?>
		</div>
	<?php endif ?>
	<?php if (isset($error)): ?>
		<div class="alert alert-danger">
			<?php echo $error; ?>
		</div>
	<?php endif ?>
	<div class="row">
		
	<div class="col-lg-1"></div>
	<div class="col-lg-10">
		<div class="content-full">
			<p class="content-header">Register</p>
			<?php echo form_open('User/register'); ?>
			<form method="post" action="#">
				<div class="form-group">
					<label for="username">Username</label>
					<input class="form-control" type="text" name="username" id="username" placeholder="Username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" type="password" name="password" id="password" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="confirm">Konfirmasi Password</label>
					<input class="form-control" type="password" name="confirm" id="confirm" placeholder="Confirm Password">
				</div>
				<div class="form-group">
					<label for="name">Nama</label>
					<input class="form-control" type="text" name="name" id="name" placeholder="Nama">
				</div>
				<div class="form-group">
					<label for="email">E-mail</label>
					<input class="form-control" type="email" name="email" id="email" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="phone">Nomor Telepon</label>
					<input class="form-control" type="text" name="phone" id="phone" placeholder="Nomor Telepon">
				</div>
				<div class="form-group">
				<div class="btn-group">
					<button type="submit" class="btn btn-default btn-submit" aria expanded="false">Register</button>
				</div>
				</div>
			</form>
			<?php echo form_close(); ?>
		</div>
	</div>
	</div>
</div>