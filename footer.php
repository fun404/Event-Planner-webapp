<!-- footer -->
	<footer class="footer-emp bg-dark py-5">
		<div class="wrap">
			<div class="row footer-top">
				<div class="col-lg-4 footer-grid pr-5">
					<h3 class="footer-title border-bottom text-uppercase mb-4 pb-3">About Us</h3>
					<div class="footer-text">
						<!-- logo -->
						<h2>
							<a class="navbar-brand font-weight-bold bg-white p-2 mb-4" href="index.html">
								Party
								<span class="font-weight-light mr-1">Planners</span>
								<img src="images/logo2.png" class="img-fluid logo-img pt-1" alt="">
								<span class="text-dark font-weight-bold logo-style-w3l">Fun For You</span>
							</a>
						</h2>
						<!-- //logo -->
						<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed,
							convallis at
							tellus. Nulla porttitor accumsana tincidunt.</p>

					</div>
				</div>
				<div class="col-lg-4 footer-grid my-lg-0 my-4">
					<h3 class="footer-title border-bottom text-uppercase mb-4 pb-3">Quick Links</h3>
					<ul class="links list-unstyled">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li class="my-2">
							<a class="scroll" href="#about">About Us</a>
						</li>
						<li>
							<a class="scroll" href="#services">Services</a>
						</li>
						<li class="my-2">
							<a class="scroll" href="#who">Who We Are</a>
						</li>
						<li>
							<a class="scroll" href="#news">News</a>
						</li>
						<li class="mt-2">
							<a class="scroll" href="#clients">Clients</a>
						</li>
					</ul>
					<ul class="links list-unstyled">
						<li>
							<a class="scroll" href="#gallery">Gallery</a>
						</li>
						<li class="my-2">
							<a class="scroll" href="#subscribe">Subscribe</a>
						</li>
						<li>
							<a class="scroll" href="#contact">Contact Us</a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="col-lg-4 footer-grid">
					<h3 class="footer-title border-bottom text-uppercase mb-4 pb-3">Contact Us</h3>
					<div class="contact-info">
						<ul class="list-unstyled">
							<li>
								<div class="row">
									<div class="col-1">
										<i class="fas fa-map-marker"></i>
									</div>
									<div class="col-11">
										<p>The company name
											<span>Lorem ipsum dolor,</span>New York,Morris Park. </p>
									</div>
								</div>
							</li>
							<li class="my-2">
								<div class="row">
									<div class="col-1">
										<i class="fas fa-phone"></i>
									</div>
									<div class="col-11">
										<p>1234567890</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1">
										<i class="fas fa-envelope"></i>
									</div>
									<div class="col-11">
										<a href="mailto:info@example.com">mail@example.com</a>
									</div>
								</div>
							</li>
						</ul>

					</div>
					<ul class="footer-social mt-md-4 mt-3">
						<li class="mx-2">
							<a href="#">
								<span class="fab fa-facebook-f"></span>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<span class="fab fa-twitter"></span>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<span class="fab fa-google-plus-g"></span>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<span class="fab fa-linkedin-in"></span>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<span class="fas fa-rss"></span>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<span class="fab fa-vk"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<div class="copyright py-3">
		<p class="copy-right text-center ">&copy; 2018 Party Planners. All Rights Reserved | Design by
			<a href="http://w3layouts.com/"> W3layouts </a>
		</p>
	</div>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- dropdown smooth -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown smooth -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- text typing animation -->
	<script src="js/text-typing.js"></script>
	<!-- //text typing animation -->

	<!-- testimonials -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 1,
						nav: false
					},
					900: {
						items: 1,
						nav: false
					},
					1000: {
						items: 1,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //testimonials -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/party.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

	<!-- //Js files -->