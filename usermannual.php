<?php
session_start();
include"db/config.php";
if(!isset($_SESSION['all'][0])){
	header('location:logot.php');
}
$query = "select * from userinfo where id='".$_SESSION['all'][0]."'";
$exe = mysqli_query($con,$query);
$row = mysqli_fetch_array($exe);
$arr=array('age','peraddress','coraddress','qualification','maritalstatus');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Social Profiler | For profile with company</title>
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
<div id="home">
		<!-- navigation -->
		<div class="main-top">
			<nav class="navbar navbar-expand-lg navbar-light fixed-navi p-lg-0 py-lg-0 py-2">
				<div class="wrap navi-agiles">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-lg-auto text-center">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
						

							
							<?php
							if(isset( $_SESSION['all'][0])){ ?>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
								    aria-haspopup="true" aria-expanded="false">
									User
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">

									<a class="dropdown-item" href="#"><?php echo $_SESSION['all'][1]; ?></a>
									<a class="dropdown-item" href="logot.php?uid=<?=base64_encode($_SESSION['all'][1]); ?>">Logout</a>
									
								</div>
							</li>
							
						</ul>
							<?php  } else {	?>
				<a href="logint.php" class="reqe-button ml-lg-3">Login</a>
				<a href="register.php" class="reqe-button ml-lg-3">Register</a>
				<?php }	?>
						<!-- //login -->
					</div>
				</div>
			</nav>
		</div>
		<!-- //navigation -->
	</div>
	<!-- //header 2 -->

	<section class="wthree-row w3-contact py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<p class="sub-tittle text-uppercase text-center">STEP AHEAD</p>
			<h3 class="tittle text-center text-uppercase mb-sm-5 mb-4">
				COMPLETE ! PROFILE <span>Here</span>
			</h3>
			</div>
		</section>
		<div class="container">
		<div class="row">
				<div class="col-lg-6 wthree-form-left">
					<!-- contact form grid -->
					<div class="contact-top1">
						<form action="#" name="reg" method="post" class="f-color" >
						
							<div class="form-group">
								<label class="text-dark"></label>
<input type="text" name="<?php ?>" class="form-control" value="<?=$row['name']; ?>" readonly>
							
							</div>
							<div class="form-group">
								<label class="text-dark"></label>
<input type="text" name="<?php ?>" class="form-control" value="<?=$row['email']; ?>" readonly>
							
							</div>
							<div class="form-group">
								<label class="text-dark"></label>
<input type="text"  class="form-control" value="<?=$row['mobile']; ?>" readonly>
							
							</div>
							<div class="form-group">
								<label class="text-dark"></label>
<input type="text"  class="form-control" value="<?=$row['dob']; ?>" readonly>
							
							</div>
							<div class="form-group">
								<label class="text-dark"></label>
<input type="text" name="<?php ?>" class="form-control" value="<?=$row['gender']; ?>" readonly>
							
							</div>
							<div class="form-group">
								<label class="text-dark"></label>
<input type="text" name="<?php ?>" class="form-control" value="<?=$row['nationality']; ?>" readonly>
							
							</div>
							<div class="form-group">
								<label class="text-dark"></label>

							
							</div>
							
						</form>
					</div>
					</div>
					
					<!--  //contact form grid ends here -->
				
				<!-- contact details -->
				<div class="col-lg-6 map mt-6">
					<div class="contact-top1">
						<form action="#" name="reg" method="post" class="f-color" >
						
							<div class="form-group">
								<label class="text-dark"></label>
<input type="text" name="" class="form-control" value="" readonly>
							
							</div>
												<button type="submit" class="btn" id="btn" onclick="validate()">Submit</button>
						</form>
					</div>
				</div>
				<!-- //contact details -->
			</div>
		</div>
		
	<!-- //contact -->
	<?php
	include('footer.php');
	?>