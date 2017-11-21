<?php if (isset($_SESSION['message_display'])): ?>
  <?php if ($_SESSION['message_display'] === "Anda Berhasil Logout"): ?>
    <div class="alert alert-success text-center">
      <?php echo $_SESSION['message_display']; ?>
    </div>
  </div>
  <?php else: ?> 
    <div class="container">
      <div class="alert alert-danger text-center">
        <?php echo $_SESSION['message_display']; ?>
      </div>
    </div>
  <?php endif ?>
  <?php echo validation_errors(); ?>
  <?php session_destroy(); ?>  
<?php endif ?>
<?php if (validation_errors() != null): ?>
  <div class="container">
    <div class="alert alert-danger text-center">
      <?php echo validation_errors(); ?>
    </div>
  </div>  
<?php endif ?>
<?php if (isset($_SESSION['uname'])) {
  redirect('');
} ?>
<div class="content-normal">
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10" width="100%">
			<div class="content-full">
				<p class="content-header">
					Log In to Seminar
				</p>
				<?php echo form_open('User/login_proc'); ?>
				<form action="" method="post" action="#"> 
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
					<div class="btn-group">
						<button type="submit" class="btn btn-primary btn-submit" aria-expanded="false">Log In</button>
					</div>
					</div>
					<center>
						<small>
							<p class="small">Didn't have an account? <a href="<?php echo base_url(); ?>index.php/register">Sign Up</a></p>
							<a href="#" class="small">Forgot Password?</a>
						</small>
					</center>
				</form>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>