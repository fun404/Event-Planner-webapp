	<!DOCTYPE html>
<html lang="en">
<head>
	<title>Social Profiler | Welcome in my Gallery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
</head>

<body>
<?php
include('header.php');
?>

	<!-- gallery  -->
	<section class="gallery" id="gallery">
		<div class="gallery-inner">
			<p class="sub-tittle text-uppercase text-center">Our Events</p>
			<h3 class="tittle text-center text-uppercase mb-sm-5 mb-4">
				Our
				<span>Gallery</span>
			</h3>
			<ul class="portfolio-categ filter my-md-5 mb-md-0 mb-3 py-4 text-center">
				<li class="port-filter all active">
					<a href="#">All</a>
				</li>
				<li class="cat-item-1">
					<a href="#" title="Category 1">category 1</a>
				</li>
				<li class="cat-item-2">
					<a href="#" title="Category 2">category 2</a>
				</li>
				<li class="cat-item-3">
					<a href="#" title="Category 3">category 3</a>
				</li>
				<li class="cat-item-4">
					<a href="#" title="Category 4">category 4</a>
				</li>

			</ul>
			<ul class="portfolio-area clearfix">
				<li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
					<span class="image-block img-hover">
						<a class="image-zoom" href="images/g1.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g1.jpg" class="img-fluid " alt="">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
					<span class="image-block">
						<a class="image-zoom" href="images/g2.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g2.jpg" class="img-fluid " alt="">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
					<span class="image-block">
						<a class="image-zoom" href="images/g3.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g3.jpg" class="img-fluid " alt="">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
					<span class="image-block">
						<a class="image-zoom" href="images/g4.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g4.jpg" class="img-fluid " alt="">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">
					<span class="image-block">
						<a class="image-zoom" href="images/g5.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g5.jpg" class="img-fluid " alt="">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
					<span class="image-block">
						<a class="image-zoom" href="images/g6.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g6.jpg" class="img-fluid " alt="">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
					<span class="image-block">
						<a class="image-zoom" href="images/g7.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g7.jpg" class="img-fluid " alt="">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
					<span class="image-block">
						<a class="image-zoom" href="images/g8.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g8.jpg" class="img-fluid " alt="">
						</a>
					</span>
				</li>
			</ul>
			<!--end portfolio-area -->
		</div>
		<!-- //gallery container -->
	</section>
	<!-- //gallery -->
<?php
include('footer.php');
?>