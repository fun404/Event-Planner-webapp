<!DOCTYPE html>
<html lang="en">
<head>
	<title>Social Profiler | For SignUp with company</title>
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
	<script src="js/validate.js"></script>
</head>

<body>
<?php
include('header.php');
if(isset($_SESSION['all'][0])){ ?>
<script>
window.location="index.php";
</script>	
<?php }
if(isset($_POST['login']))
{
	$e = $_POST['email'];
	$p = $_POST['pass'];
	$cn = base64_encode($p);
?>
	<section class="wthree-row w3-contact py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<p class="sub-tittle text-uppercase text-center">Registered User</p>
			<h3 class="tittle text-center text-uppercase mb-sm-5 mb-4">
				Login !<span>Here</span>
			</h3>
			<div class="row contact-form py-3">
			<div class="col-lg-3 wthree-form-left">
			</div>
				<div class="col-lg-6 wthree-form-left">
					<!-- contact form grid -->
					<div class="contact-top1">
						<form action="#" name="reg" method="post" class="f-color">
							
							<div class="form-group">
								<label class="text-dark">Email</label>
								<input type="email" class="form-control" name="email"  onclick="ValidateLogin()" onchange="ValidateLogin()">
								<span class="text-danger" id="email"></span>
							</div>	
							<div class="form-group">
								<label class="text-dark">Password</label>
								<input type="password" class="form-control" name="pass"  onclick="ValidateLogin()" onchange="ValidateLogin()">
								<span class="text-danger" id="pas"></span>
							</div>
							<input type="submit" class="btn" name="login" id="btn" onclick="ValidateLogin()"  value="Login">
						</form>
					</div>
					<!--  //contact form grid ends here -->
				</div>
				<!-- contact details -->
				<div class="col-lg-3 map mt-lg-0 mt-3">
				
				</div>
				<!-- //contact details -->
			</div>
		</div>
	</section>
	<!-- //contact -->
	<?php
	include('footer.php');
	?>