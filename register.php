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
$ar = array('Indian','Australian','American','African','Korean','Iraq','Iran','Nepal','Chinese','Japanese','Other');
?>

	<section class="wthree-row w3-contact py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<p class="sub-tittle text-uppercase text-center">Create An Account</p>
			<h3 class="tittle text-center text-uppercase mb-sm-5 mb-4">
				Register !<span>Here</span>
			</h3>
			<div class="row contact-form py-3">
			<div class="col-lg-3 wthree-form-left">
			</div>
				<div class="col-lg-6 wthree-form-left">
					<!-- contact form grid -->
					<div class="contact-top1">
						<form action="#" name="reg" method="post" class="f-color" >
							<div class="form-group">
								<label class="text-dark">Name</label>
<input type="text" class="form-control" name="txt" onclick="validate()" onchange="validate()">
								<br/>
                               <span class="text-danger" id="name"></span>
							</div>
							<div class="form-group">
								<label class="text-dark">Email</label>
								<input type="email" class="form-control" name="email"  onclick="validate()" onchange="validate()">
								<span class="text-danger" id="email"></span>
							</div>
							<div class="form-group">
								<label class="text-dark">Mobile	</label>
								<input type="text" class="form-control" name="mobile"   onclick="validate()" onchange="validate()">
								<span class="text-danger" id="mobile"></span>
							</div>
							<div class="form-group">
								<label class="text-dark">D.O.B</label>
								<input type="date" class="form-control" name="dob"   onclick="validate()" onchange="validate()">
								<span class="text-danger" id="dt"></span>
							</div>
							<div class="form-group">
								<label class="text-dark">Gender</label>
								<input type="radio"  name="gender"   onclick="validate()" onchange="validate()" value="Male"> Male
								<input type="radio" name="gender" value="Female"   onclick="validate()" onchange="validate()"> Female<br/>
								<span class="text-danger" id="gen"></span>
							</div>
							
							<div class="form-group">
								<label class="text-dark">Nationality </label>
								
								<select class="form-control" name="national" onclick="validate()" onchange="validate()">
								<option value="">Select Nationality</option>
								<?php
								foreach($ar as $key=>$value){ 
								echo "<option value='$value'>$value </option>";	
								}
								?>
								</select>
								<span class="text-danger" id="country"></span>
							</div>
							<div class="form-group">
								<label class="text-dark">Password</label>
								<input type="password" class="form-control" name="pass"  onclick="validate()" onchange="validate()">
								<span class="text-danger" id="pas"></span>
							</div>
							<button type="submit" class="btn" id="btn" onclick="validate()">Submit</button>
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