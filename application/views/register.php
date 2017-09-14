<div class="content-normal">	
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<h1>Register</h1>
			<?php echo form_open('User/register'); ?>
			<form method="post" action="#">
				<div class="form-group">
					<h3>Username</h3>
					<input type="text" name="username" id="username" placeholder="username">
				</div>
				<div class="form-group">
					<h3>Password</h3>
					<input type="password" name="password" id="password" placeholder="password">
				</div>
				<div class="form-group">
					<h3>Konfirmasi Password</h3>
					<input type="password" name="confirm" id="confirm" placeholder="confirm">
				</div>
				<div class="form-group">
					<h3>Name</h3>
					<input type="text" name="name" id="name" placeholder="name">
				</div>
				<div class="form-group">
					<h3>E-mail</h3>
					<input type="email" name="email" id="email" placeholder="email">
				</div>
				<div class="form-group">
					<h3>Phone</h3>
					<input type="text" name="phone" id="phone" placeholder="phone">
				</div>
				<div class="form-group">
				<div class="btn-group">
					<button type="submit" class="btn btn-primary" aria expanded="false">Register</button>
				</div>
				</div>
			</form>
			<?php echo form_open('User/register'); ?>
		</div>
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
</div>
</div>