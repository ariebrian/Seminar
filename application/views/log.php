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
<?php if (isset($_SESSION['user_name'])) {
  redirect('');
} ?>
<div class="content-normal">
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4 ">
			<h1>Log In to Seminar</h1>
			<?php echo form_open('User/login_proc'); ?>
			<form action="" method="post" action="#"> 
				<div class="form-group">
					<h3>Username</h3>
					<input type="text" class="form-control" name="username" id="username" placeholder="username">
				</div>
				<div class="form-group">
					<h3>Password</h3>
					<input type="password" name="password" id="password" class="form-control" placeholder="password">
				</div>
				<div class="form-group">
				<div class="btn-group">
					<button type="submit" class="btn btn-primary" aria-expanded="false">Log In</button>
				</div>
				</div>
				<a href="">Forgot Password?</a>
			</form>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>