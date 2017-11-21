<!DOCTYPE html>
<html>
<head>
	<title>Seminarr</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/clndr-style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/user.css">

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/moment.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/underscore-min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/clndr.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/user.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a href="<?php echo base_url(); ?>index.php" class="navbar-brand"><img src="<?php echo base_url(); ?>img/y-tho.jpg" id="logo-brand">Seminarr</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<?php if (isset($_SESSION['uname'])): ?>
					<ul class="nav navbar-nav">
						<li><a href="<?php echo base_url().'index.php/profile/'.$_SESSION['id']; ?>">My Profile</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url(); ?>index.php/logout"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-search"></span>Search</a></li>
					</ul>
				<?php else: ?>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url(); ?>index.php/login"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-search"></span>Search</a></li>
					</ul>
				<?php endif ?>
			</div>
		</div>
	</nav>
	<div class="content">