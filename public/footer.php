	<!--footer-->
	<footer>
		<div class="container">
			<div class="row footer-top-w3layouts-agile">
				<div class="col-lg-3 footer-grid" data-aos="zoom-in">
					<div class="footer-title">
						<h2>About Us</h2>
					</div>
					<div class="footer-text">
						<p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. lacinia eget consectetur sed, convallis at tellus..</p>

					</div>
				</div>
				<div class="col-lg-3 footer-grid" data-aos="zoom-in">
					<div class="footer-title">
						<h3>Contact Us</h3>
					</div>
					<div class="footer-office-hour">
						<ul>
							<li class="hd">Address :</li>
							<li>No.27 - 5549436 street lorem ipsum, ipsum City, Country</li>

						</ul>
						<ul>
							<li class="hd">Phone:+ 1 (234) 567 8901</li>
							<li class="hd">Email:
								<a href="mailto:info@example.com">info@example.com</a>
							</li>
							<li class="hd">Fax: 1(234) 567 8901</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 footer-grid" data-aos="zoom-in">
					<div class="footer-title">
						<h3>Recent Works</h3>
					</div>
					<div class="footer-list">
						<div class="flickr-grid">
							<a href="single.html">
								<img src="images/g1.jpg" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#">
								<img src="images/g2.jpg" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#">
								<img src="images/g3.jpg" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#">
								<img src="images/g4.jpg" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#">
								<img src="images/g9.jpg" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#">
								<img src="images/g5.jpg" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="single.html">
								<img src="images/g6.jpg" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#">
								<img src="images/g7.jpg" alt=" ">
							</a>
						</div>
						<div class="flickr-grid">
							<a href="#">
								<img src="images/g8.jpg" alt=" ">
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid" data-aos="zoom-in">
					<div class="footer-title">
						<h3>Subscribe</h3>
					</div>
					<p>Vivamus magna justo, lacinia eget consectetur sed.</p>
					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email..." required="">
						<button class="btn1">
							<i class="far fa-envelope"></i>
						</button>
					</form>
					<div class="clearfix"></div>
				</div>

			</div>

		</div>
	</footer>
	<!---->
	<div class="copyright">
		<div class="container">
			<div class="copyrighttop" data-aos="fade-left">
				<ul>
					<li>
						<h4>Follow us on:</h4>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-pinterest-p"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="copyrightbottom" data-aos="fade-right">
				<p>© 2018 Digital Biz. All Rights Reserved | Design by
					<a href="http://w3layouts.com/">W3layouts</a>
				</p>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- simpleLightbox -->
	<script src="js/simpleLightbox.js"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>
	<!-- //simpleLightbox -->
	<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
	 
	  $(window).load(function(){
		$('.flexslider').flexslider({
		  animation: "slide",
		  start: function(slider){
			$('body').removeClass('loading');
		  }
		});
	  });
	</script>
  
	<!-- //flexSlider -->

	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<!-- /js files -->
	<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<script src='js/aos.js'></script>
	<script src="js/aosindex.js"></script>
	<!-- //js files -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>

</html>