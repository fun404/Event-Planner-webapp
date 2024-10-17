<!DOCTYPE html>
<html lang="en">
<head>
	<title>Social Profiler | For Contact with US</title>
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
<!-- contact -->
	<section class="wthree-row w3-contact py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<p class="sub-tittle text-uppercase text-center">Get In Touch</p>
			<h3 class="tittle text-center text-uppercase mb-sm-5 mb-4">Contact
				<span>Us</span>
			</h3>
			<div class="row contact-form py-3">
				<div class="col-lg-6 wthree-form-left">
					<!-- contact form grid -->
					<div class="contact-top1">
						<form action="#" method="get" class="f-color">
							<div class="form-group">
								<label class="text-dark">Name</label>
								<input type="text" class="form-control" name="text" id="contactusername" required>
							</div>
							<div class="form-group">
								<label class="text-dark">Email</label>
								<input type="email" class="form-control" name="email" id="contactemail" required>
							</div>
							<div class="form-group">
								<label class="text-dark">Your Message</label>
								<textarea class="form-control" name="message" rows="5" id="contactcomment" required></textarea>
							</div>
							<button type="submit" class="btn">Submit</button>
						</form>
					</div>
					<!--  //contact form grid ends here -->
				</div>
				<!-- contact details -->
				<div class="col-lg-6 map mt-lg-0 mt-5">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"
					    allowfullscreen></iframe>
				</div>
				<!-- //contact details -->
			</div>
		</div>
	</section>
	<!-- //contact -->
	<?php
	include('footer.php');
	?>