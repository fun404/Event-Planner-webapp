<?php
session_start();
	//
echo $_SESSION['user_id']

//include"db/config.php";
?>
<!-- header -->
	<header>
		<!-- top-bar -->
		<div class="top-bar py-2 bg-light">
			<div class="wrap">
				<div class="row">
					<div class="col-xl-6 col-md-3 top-left-locate">
						<div class="select-city text-md-left text-center">
							<select class="list_of_cities">
								<optgroup label="Popular Cities">
									<option selected style="display:none;color:#eee;">Select City</option>
									<option>Birmingham</option>
									<option>Anchorage</option>
									<option>Phoenix</option>
									<option>Little Rock</option>
									<option>Los Angeles</option>
									<option>Denver</option>
									<option>Bridgeport</option>
									<option>Wilmington</option>
									<option>Jacksonville</option>
									<option>Atlanta</option>
									<option>Honolulu</option>
									<option>Boise</option>
									<option>Chicago</option>
									<option>Indianapolis</option>
								</optgroup>
								<optgroup label="Alabama">
									<option>Birmingham</option>
									<option>Montgomery</option>
									<option>Mobile</option>
									<option>Huntsville</option>
									<option>Tuscaloosa</option>
								</optgroup>
								<optgroup label="Alaska">
									<option>Anchorage</option>
									<option>Fairbanks</option>
									<option>Juneau</option>
									<option>Sitka</option>
									<option>Ketchikan</option>
								</optgroup>
								<optgroup label="Arizona">
									<option>Phoenix</option>
									<option>Tucson</option>
									<option>Mesa</option>
									<option>Chandler</option>
									<option>Glendale</option>
								</optgroup>
								<optgroup label="Arkansas">
									<option>Little Rock</option>
									<option>Fort Smith</option>
									<option>Fayetteville</option>
									<option>Springdale</option>
									<option>Jonesboro</option>
								</optgroup>
								<optgroup label="California">
									<option>Los Angeles</option>
									<option>San Diego</option>
									<option>San Jose</option>
									<option>San Francisco</option>
									<option>Fresno</option>
								</optgroup>
								<optgroup label="Colorado">
									<option>Denver</option>
									<option>Colorado</option>
									<option>Aurora</option>
									<option>Fort Collins</option>
									<option>Lakewood</option>
								</optgroup>
								<optgroup label="Connecticut">
									<option>Bridgeport</option>
									<option>New Haven</option>
									<option>Hartford</option>
									<option>Stamford</option>
									<option>Waterbury</option>
								</optgroup>
								<optgroup label="Delaware">
									<option>Wilmington</option>
									<option>Dover</option>
									<option>Newark</option>
									<option>Bear</option>
									<option>Middletown</option>
								</optgroup>
								<optgroup label="Florida">
									<option>Jacksonville</option>
									<option>Miami</option>
									<option>Tampa</option>
									<option>St. Petersburg</option>
									<option>Orlando</option>
								</optgroup>
								<optgroup label="Georgia">
									<option>Atlanta</option>
									<option>Augusta</option>
									<option>Columbus</option>
									<option>Savannah</option>
									<option>Athens</option>
								</optgroup>
								<optgroup label="Hawaii">
									<option>Honolulu</option>
									<option>Pearl City</option>
									<option>Hilo</option>
									<option>Kailua</option>
									<option>Waipahu</option>
								</optgroup>
								<optgroup label="Idaho">
									<option>Boise</option>
									<option>Nampa</option>
									<option>Meridian</option>
									<option>Idaho Falls</option>
									<option>Pocatello</option>
								</optgroup>
								<optgroup label="Illinois">
									<option>Chicago</option>
									<option>Aurora</option>
									<option>Rockford</option>
									<option>Joliet</option>
									<option>Naperville</option>
								</optgroup>
								<optgroup label="Indiana">
									<option>Indianapolis</option>
									<option>Fort Wayne</option>
									<option>Evansville</option>
									<option>South Bend</option>
									<option>Hammond</option>
								</optgroup>
								<optgroup label="Iowa">
									<option>Des Moines</option>
									<option>Cedar Rapids</option>
									<option>Davenport</option>
									<option>Sioux City</option>
									<option>Waterloo</option>
								</optgroup>
								<optgroup label="Kansas">
									<option>Wichita</option>
									<option>Overland Park</option>
									<option>Kansas City</option>
									<option>Topeka</option>
									<option>Olathe </option>
								</optgroup>
								<optgroup label="Kentucky">
									<option>Louisville</option>
									<option>Lexington</option>
									<option>Bowling Green</option>
									<option>Owensboro</option>
									<option>Covington</option>
								</optgroup>
								<optgroup label="Louisiana">
									<option>New Orleans</option>
									<option>Baton Rouge</option>
									<option>Shreveport</option>
									<option>Metairie</option>
									<option>Lafayette</option>
								</optgroup>
								<optgroup label="Maine">
									<option>Portland</option>
									<option>Lewiston</option>
									<option>Bangor</option>
									<option>South Portland</option>
									<option>Auburn</option>
								</optgroup>
								<optgroup label="Maryland">
									<option>Baltimore</option>
									<option>Frederick</option>
									<option>Rockville</option>
									<option>Gaithersburg</option>
									<option>Bowie</option>
								</optgroup>
								<optgroup label="Massachusetts">
									<option>Boston</option>
									<option>Worcester</option>
									<option>Springfield</option>
									<option>Lowell</option>
									<option>Cambridge</option>
								</optgroup>
								<optgroup label="Michigan">
									<option>Detroit</option>
									<option>Grand Rapids</option>
									<option>Warren</option>
									<option>Sterling Heights</option>
									<option>Lansing</option>
								</optgroup>
								<optgroup label="Minnesota">
									<option>Minneapolis</option>
									<option>St. Paul</option>
									<option>Rochester</option>
									<option>Duluth</option>
									<option>Bloomington</option>
								</optgroup>
								<optgroup label="Mississippi">
									<option>Jackson</option>
									<option>Gulfport</option>
									<option>Southaven</option>
									<option>Hattiesburg</option>
									<option>Biloxi</option>
								</optgroup>
								<optgroup label="Missouri">
									<option>Kansas City</option>
									<option>St. Louis</option>
									<option>Springfield</option>
									<option>Independence</option>
									<option>Columbia</option>
								</optgroup>
								<optgroup label="Montana">
									<option>Billings</option>
									<option>Missoula</option>
									<option>Great Falls</option>
									<option>Bozeman</option>
									<option>Butte-Silver Bow</option>
								</optgroup>
								<optgroup label="Nebraska">
									<option>Omaha</option>
									<option>Lincoln</option>
									<option>Bellevue</option>
									<option>Grand Island</option>
									<option>Kearney</option>
								</optgroup>
								<optgroup label="Nevada">
									<option>Las Vegas</option>
									<option>Henderson</option>
									<option>North Las Vegas</option>
									<option>Reno</option>
									<option>Sunrise Manor</option>
								</optgroup>
								<optgroup label="New Hampshire">
									<option>Manchesters</option>
									<option>Nashua</option>
									<option>Concord</option>
									<option>Dover</option>
									<option>Rochester</option>
								</optgroup>
								<optgroup label="New Jersey">
									<option>Newark</option>
									<option>Jersey City</option>
									<option>Paterson</option>
									<option>Elizabeth</option>
									<option>Edison</option>
								</optgroup>
								<optgroup label="New Mexico">
									<option>Albuquerque</option>
									<option>Las Cruces</option>
									<option>Rio Rancho</option>
									<option>Santa Fe</option>
									<option>Roswell</option>
								</optgroup>
								<optgroup label="New York">
									<option>New York</option>
									<option>Buffalo</option>
									<option>Rochester</option>
									<option>Yonkers</option>
									<option>Syracuse</option>
								</optgroup>
								<optgroup label="North Carolina">
									<option>Charlotte</option>
									<option>Raleigh</option>
									<option>Greensboro</option>
									<option>Winston-Salem</option>
									<option>Durham</option>
								</optgroup>
								<optgroup label="North Dakota">
									<option>Fargo</option>
									<option>Bismarck</option>
									<option>Grand Forks</option>
									<option>Minot</option>
									<option>West Fargo</option>
								</optgroup>
								<optgroup label="Ohio">
									<option>Columbus</option>
									<option>Cleveland</option>
									<option>Cincinnati</option>
									<option>Toledo</option>
									<option>Akron</option>
								</optgroup>
								<optgroup label="Oklahoma">
									<option>Oklahoma City</option>
									<option>Tulsa</option>
									<option>Norman</option>
									<option>Broken Arrow</option>
									<option>Lawton</option>
								</optgroup>
								<optgroup label="Oregon">
									<option>Portland</option>
									<option>Eugene</option>
									<option>Salem</option>
									<option>Gresham</option>
									<option>Hillsboro</option>
								</optgroup>
								<optgroup label="Pennsylvania">
									<option>Philadelphia</option>
									<option>Pittsburgh</option>
									<option>Allentown</option>
									<option>Erie</option>
									<option>Reading</option>
								</optgroup>
								<optgroup label="Rhode Island">
									<option>Providence</option>
									<option>Warwick</option>
									<option>Cranston</option>
									<option>Pawtucket</option>
									<option>East Providence</option>
								</optgroup>
								<optgroup label="South Carolina">
									<option>Columbia</option>
									<option>Charleston</option>
									<option>North Charleston</option>
									<option>Mount Pleasant</option>
									<option>Rock Hill</option>
								</optgroup>
								<optgroup label="South Dakota">
									<option>Sioux Falls</option>
									<option>Rapid City</option>
									<option>Aberdeen</option>
									<option>Brookings</option>
									<option>Watertown</option>
								</optgroup>
								<optgroup label="Tennessee">
									<option>Memphis</option>
									<option>Nashville</option>
									<option>Knoxville</option>
									<option>Chattanooga</option>
									<option>Clarksville</option>
								</optgroup>
								<optgroup label="Texas">
									<option>Houston</option>
									<option>San Antonio</option>
									<option>Dallas</option>
									<option>Austin</option>
									<option>Fort Worth</option>
								</optgroup>
								<optgroup label="Utah">
									<option>Salt Lake City</option>
									<option>West Valley City</option>
									<option>Provo</option>
									<option>West Jordan</option>
									<option>Orem</option>
								</optgroup>
								<optgroup label="Vermont">
									<option>Burlington</option>
									<option>Essex</option>
									<option>South Burlington</option>
									<option>Colchester</option>
									<option>Rutland</option>
								</optgroup>
								<optgroup label="Virginia">
									<option>Virginia Beach</option>
									<option>Norfolk</option>
									<option>Chesapeake</option>
									<option>Arlington</option>
									<option>Richmond</option>
								</optgroup>
								<optgroup label="Washington">
									<option>Seattle</option>
									<option>Spokane</option>
									<option>Tacoma</option>
									<option>Vancouver</option>
									<option>Bellevue</option>
								</optgroup>
								<optgroup label="West Virginia">
									<option>Charleston</option>
									<option>Huntington</option>
									<option>Parkersburg</option>
									<option>Morgantown</option>
									<option>Wheeling</option>
								</optgroup>
								<optgroup label="Wisconsin">
									<option>Milwaukee</option>
									<option>Madison</option>
									<option>Green Bay</option>
									<option>Kenosha</option>
									<option>Racine</option>
								</optgroup>
								<optgroup label="Wyoming">
									<option>Cheyenne</option>
									<option>Casper</option>
									<option>Laramie</option>
									<option>Gillette</option>
									<option>Rock Springs</option>
								</optgroup>
							</select>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-xl-6 col-md-9 top-right-nav-w3ls mt-2 text-md-right text-center">
						<ul>
							<li>
								<a href="#about" class="text-dark scroll">About Us</a>
							</li>
							<li class="mx-xl-5 mx-3">
								<a href="#services" class="text-dark scroll">Services</a>
							</li>
							<li>
								<a href="#news" class="text-dark scroll">News</a>
							</li>
							<li class="mx-xl-5 mx-3">
								<a href="#clients" class="text-dark scroll">Clients</a>
							</li>
							<li>
								<a href="#contact" class="text-dark scroll">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- //top-bar -->
		<div class="header-middle-agile">
			<div class="row wrap">
				<div class="col-xl-8 col-md-6 col-sm-5 p-0 text-sm-left text-center">
					<!-- logo -->
					<h1>
						<a class="navbar-brand font-weight-bold" href="index.html">
							Party
							<span class="font-weight-light mr-1">Planners</span>
							<img src="images/logo2.png" class="img-fluid logo-img pt-1" alt="">
							<span class="text-dark logo-style-w3l">Fun For You</span>
						</a>
					</h1>
					<!-- //logo -->
				</div>
				<div class="col-xl-4 col-md-6 col-sm-7 right-w3ls p-0">
					<div class="row">
						<div class="col-sm-7 col-5 img-left-w3ls pt-3 text-right">
							<img src="images/mobile.png" alt="" class="img-fluid">
						</div>
						<div class="col-sm-5 col-7 info-w3ls mt-3">
							<p>Lets Talk</p>
							<h4 class="text-dark font-weight-bold">+012 3456 789</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- //top-bar -->

	<!-- header 2 -->
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
							<li class="nav-item mx-xl-4 mx-lg-2">
								<a class="nav-link" href="aboutus.php">About Us</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
								    aria-haspopup="true" aria-expanded="false">
									Pages
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">

									<a class="dropdown-item" href="subscribe.php">Subscribe</a>
									<a class="dropdown-item" href="service.php">Services</a>
									<a class="dropdown-item" href="news.php">News</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="client.php">Clients</a>
								</div>
							</li>
							<li class="nav-item  mx-xl-4 mx-lg-2">
								<a class="nav-link " href="gallery.php">Gallery</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="who-we.php">Who We Are</a>
							</li>
							<li class="nav-item ml-xl-4 ml-lg-2">
								<a class="nav-link" href="contact.php">Contact Us</a>
							</li>
						</ul>
						<!-- login -->
						
				<!-- <a href="skype:7503170659?call" class="reqe-button ml-lg-5">Request a Call Back</a>-->
				<a href="logint.php" class="reqe-button ml-lg-3">Login</a>
				<a href="register.php" class="reqe-button ml-lg-3">Register</a>
						<!-- //login -->
					</div>
				</div>
			</nav>
		</div>
		<!-- //navigation -->
	</div>
	<!-- //header 2 -->