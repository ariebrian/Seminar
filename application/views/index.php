<?php if (!isset($_SESSION['id'])): ?>
	<script>
		/*
		 *	Buat event scroll kebawah
		 **/
		$('.navbar').css('background-color', 'transparent');
		$(window).on('scroll', function() {
			var wn = $(window).scrollTop();
			event.preventDefault();
			if (wn > 0) {
				$('.navbar').css('background-color', '#2979FF');
			} else {
				$('.navbar').css('background-color', 'transparent');
			}
		});


		$('.navbar-toggle').click(function() {
			$('.navbar').css('background-color', '#2979FF');
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
	<div class="row carousel-holder content-full" style="margin-right: 10px !important; margin-left: 10px !important;;">
<?php else: ?>
	<div class="row carousel-holder content-normal content-full" style="margin-right: 10px !important; margin-left: 10px !important; margin-top: 60px !important">
<?php endif ?>
    <div class="col-md-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <center>
                <div class="carousel-inner">
                    <div class="item active">
                    	<a href="<?php echo base_url('index.php/detail/'.$seminar[0]->id_sem); ?>">
	                        <img class="slide-image" src="<?php echo base_url($seminar[0]->sem_img); ?>" alt="">
	                        <div class="carousel-caption"><?php echo $seminar[0]->sem_name ?></div>
                    	</a>
                    </div>
                    <div class="item">
                    	<a href="<?php echo base_url('index.php/detail/'.$seminar[0]->id_sem); ?>">
	                        <img class="slide-image" src="<?php echo base_url($seminar[1]->sem_img); ?>" alt="">
	                        <div class="carousel-caption"><?php echo $seminar[1]->sem_name ?></div>
	                    </a>
                    </div>
                    <div class="item">
                    	<a href="<?php echo base_url('index.php/detail/'.$seminar[0]->id_sem); ?>">
	                        <img class="slide-image" src="<?php echo base_url($seminar[2]->sem_img); ?>" alt="">
	                        <div class="carousel-caption"><?php echo $seminar[2]->sem_name ?></div>
                    	</a>
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
					<?php 
					//echo "<pre>";
					//var_dump($key); die();
					//echo "</pre>"; ?>
					<a href="<?php echo base_url().'index.php/detail/'.$key->id_sem; ?>">
						
					<img class="img-responsive" src="<?php echo base_url($key->sem_img); ?>" alt="">
					<?php echo $key->sem_name; ?>
					</a>
				</center>
			</div>
		<?php endforeach ?>
	</div>
</div>