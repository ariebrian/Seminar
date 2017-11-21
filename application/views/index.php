<?php if (!isset($_SESSION['id'])): ?>
	<script>
		/*
		 *	Buat event scroll kebawah
		 **/
		$('.navbar').css('background-color', 'transparent');
		$(window).on('scroll', function() {
			event.preventDefault();
			var wn = $(window).scrollTop();
			if (wn > 0) {
				$('.navbar').css('background-color', '#2979FF');
			} else {
				$('.navbar').css('background-color', 'transparent');
			}
		});
	</script>
	<div class="jumbotron">
		<center>
			<div class="page-header">
				<h2>
					Bergabunglah Bersama Kami, Temukan Seminar Yang Anda Inginkan!
				</h2>
			</div>
			<a href="<?php echo base_url(); ?>index.php/register" class="btn btn-warning white btn-lg">Sign Up</a><br>
			<small>or</small><br>
			<small>Already have an account? <u><a href="<?php echo base_url(); ?>index.php/login" class="white">Sign in</a></u></small>
		</center>
	</div>
<?php endif ?>
<?php if (!isset($_SESSION['id'])): ?>
	<div class="row carousel-holder content-full" style="margin-right: 10px !important; margin-left: 10px !important;">
<?php else: ?>
	<div class="row carousel-holder content-normal content-full" style="margin-right: 10px !important; margin-left: 10px !important;">
<?php endif ?>
    <div class="col-md-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>
            <center>
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="slide-image" src="<?php echo base_url(); ?>img/y-tho.jpg" alt="">
                        <div class="carousel-caption">wahaha</div>
                    </div>
                    <div class="item">
                        <img class="slide-image" src="<?php echo base_url(); ?>img/y-tho.jpg" alt="">
                        <div class="carousel-caption">wahaha2</div>
                    </div>
                </div>
            </center>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
</div>

<div class="content-full">
	<p class="content-header">Suggestion</p>
	<div class="row">
		<?php foreach ($seminar as $key): ?>
			<div class="col-md-3">
				<center>
					<img class="img-responsive" src="#" alt="">
					<?php echo $key->sem_name; ?>
				</center>
			</div>
		<?php endforeach ?>
	</div>
</div>