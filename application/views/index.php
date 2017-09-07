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
			<a href="#" class="btn btn-warning white btn-lg">Sign Up</a><br>
			<small>or</small><br>
			<small>Already have an account? <u><a href="#" class="white">Sign in</a></u></small>
		</center>
	</div>