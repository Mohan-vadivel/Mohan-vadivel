<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="assets/images/favicon.png">
    <!--<meta name="theme-color" content="#d9534f">-->
	<meta name="mobile-web-app-capable" content="yes">
    <title>Software Developer - UI/UX Designer</title>

	<!--Google fonts-->
	<link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- css plugins -->
	<link href="assets/css/themify-icons.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/animsition.css" rel="stylesheet">

	<!-- css template -->
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/custom_style.css" rel="stylesheet">
	<link rel="manifest" href="assets/js/manifest.json">

	<script src="https://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	
</head>

<body>
	<!-- Box Window -->
	<div class="box_bars">
		<div class="top-bar">
			<a href="index.html" class="link-top-site animsition-link"><img src="assets/images/logo.png" /></a>
		</div>
		<div class="bottom-bar"></div>
		<div class="left-bar"></div>
		<div class="right-bar"></div>
	</div>
	<!-- end Box Window -->

	<!-- border box -->
	<div class="cover-border">
		<div class="top-mask"></div>
		<div class="bottom-mask"></div>
		<div class="left-mask"></div>
		<div class="right-mask"></div>
	</div>
	<!-- end border box -->

	<!-- loading -->
	<!--<div class="body-loading">
		<div class="mid-content2">
			<div class="spinner"></div>
		</div>
	</div>-->
	<!-- end loading -->

	<!-- btn togle menu -->
	<a href="#" class="trigger-menu" id="site-navigation-trigger">
		<div class="icon-container">
			<span class="navigation-line navigation-line01"></span>
			<span class="navigation-line navigation-line02"></span>
			<span class="navigation-line navigation-line03"></span>
		</div>
	</a>
	<!-- end btn togle menu -->

	<!-- site navigation -->
	<div class="site-navigation" id="site-navigation-area">

		<div class="navigation-bg-over nav-01 active" data-holdbg="assets/images/bg1.jpg"></div>
		<div class="navigation-bg-over nav-02" data-holdbg="assets/images/bg2.jpg"></div>
		<div class="navigation-bg-over nav-03" data-holdbg="assets/images/bg3.jpg"></div>
		<div class="navigation-bg-over nav-04" data-holdbg="assets/images/bg4.jpg"></div>
		<div class="navigation-bg-over nav-05" data-holdbg="assets/images/bg5.jpg"></div>

		<div class="navigation-bg-mask">
			<div class="cover-border">
				<div class="top-mask"></div>
				<div class="bottom-mask"></div>
				<div class="left-mask"></div>
				<div class="right-mask"></div>
			</div>
		</div>
		
		<div class="mid-content-area">
			<div class="mid-content">
				<div class="hidden-sc">
					<div id="main_menu">
						<button id="back_menu" class="btn"><i class="ti-arrow-left"></i></button>
						<ul class="list-unstyled text-center" id="menu_area">
							<li class="active"><a href="index.html" data-hover="nav-01" class="animsition-link">Home </a></li>
							<li class=""><a href="about.html" data-hover="nav-02" class="animsition-link">About-Me </a></li>
							<!--<li class=""><a href="resume.html" data-hover="nav-03" class="animsition-link">Resume </a></li>-->
							<li class=""><a href="portfolio.html" data-hover="nav-04" class="animsition-link">Projects </a></li>
							<li class=""><a href="contact.php" data-hover="nav-05" class="animsition-link">Contact </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!-- end site navigation -->

	<!-- site content -->
	<div id="contact" class="site-content">
		<div class="animsition">
			<!-- block full screen -->
			<section class="page-full-window relative-pos bg-overfly" data-holdbg="assets/images/bg5.jpg">
				<div class="mid-content2">
					<div class="container text-center color-white">
						<h1 class="super-big-font">Contact Me</h1>
						<div class="simple-line"></div>
						<!--<h3>The information required to contact someone, such as an address or telephone number</h3>-->
						<p class="let-space-3">
							<a href="mailto:vadivelmohan2@gmail.com" class="color-white">vadivelmohan2@gmail.com</a>
							<br/>
							<a href="tel:+919047079148" class="color-white">+91 904 707 9148</a></p>
					</div>
					<div class="container">
						<div class="col-md-6 mobi_container">
							<div class="map_bg">
								<div id="map"></div>
							</div>
						</div>

						<aside class="col-md-6 mobi_container">
							<!-- form_space-->
							<div class="contact_bg">
								<form method="post"  id="contact_form" role="form" class="form ">
								    <div class="row success-msg" style="color:white;display:none"></div>
									<div class="row">
										<div class="col-md-6 input_space">
											<input name="name" id="name" class="input-md form-control" placeholder="Name *" maxlength="100" required="" type="text">
										</div>
										<div class="col-md-6 input_space">
											<input name="email" id="email" class="input-md form-control" placeholder="Email *" maxlength="100" required="" type="email">
										</div>
									</div>
									<div class="input_space">
										<input name="subject" id="subject" class="input-md form-control" placeholder="Subject" maxlength="100" required="" type="text">
									</div>
									<div class="input_space">
										<textarea name="text" id="text" class="input-md form-control" rows="5" placeholder="Message" maxlength="400"></textarea>
									</div>
									<div class="pull-right mrg_0">
										<button type="button" href="#" class="btn btn-cts1 btn-m10" id="submit" value="submit" name="submit"> Send A Message</button>
										<!--<button name="submit" type="submit" href="#" class="btn btn-default contact_sent"> Send A Message</button>-->
									</div>
								</form>
							</div>
						</aside>
						<div class="clearfix"></div>
					</div>
				</div>
			</section>
		</div>
		<!-- end full screen -->
	</div>
	
	
	
	<!-- end .animsition -->
	<!--</div>-->
	<!-- end site content -->

	<!-- site footer -->
	<div class="site-footer">
		<div class="text-center">Copyright &copy; 2017
			<a href="http://mohanvadivel.com" class="black_link strong" target="_blank">mohanvadivel.com</a>
		</div>
	</div>
	<!-- end site footer -->

<script>
	if ('serviceWorker' in navigator) {
		console.log("Will service worker register?");
		navigator.serviceWorker.register('assets/js/service-worker.js').then(function(reg){
			console.log("Yes it did.");
		}).catch(function(err) {
			console.log("No it didn't. This happened: ", err)
		});
    }
</script>
	<!-- jQuery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!-- jQuery plugins-->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/animsition.min.js"></script>

	<!-- template js -->
	<script src="assets/js/app.js"></script>
	
	<script>
	$(document).ready(function(){
		$("#submit").click(function(){
			var name = $("#name").val();
			var email = $("#email").val();
			var subject = $("#subject").val();
			var text = $("#text").val();
			// Returns successful data submission message when the entered information is stored in database.
			var dataString = 'name='+ name + '&email='+ email + '&subject='+ subject + '&text='+ text;
				if(name==''||email==''||subject==''||text==''){
					alert("Please Fill All Fields");
				}
				else
				{
				// AJAX Code To Submit Form.
				//	url: "https://script.google.com/macros/s/AKfycbxb5n0LuG6ratnFUtIiENd6plUC7OW6TW4_n5LYU2Z3kwcMY59O/exec",
					$.ajax({
						type: "post",
						url: "form.php",
						data: $('#contact_form').serialize(),
						cache: false,
						success: function(result){
							if(result=='success') {
							    $('.success-msg').html('Mail send successfully');
							} else {
							    $('.success-msg').html('Mail sending failed');
							}
							 $('.success-msg').show();
							 $('#contact_form').trigger("reset");
						}
					});
				}
		return false;
		});
		});
	</script>
	
	<script>
		$(document).ready(function() {
			//g.map mouse cursor
			$('.map_bg').click(function() {
				$('.map_bg #map').css("pointer-events", "auto");
			});

			$(".map_bg").mouseleave(function() {
				$('.map_bg #map').css("pointer-events", "none");
			});
		});
	</script>
	<script type="text/javascript">
		var locations = [
			["<div class='lms_map_infowindow'><h4>Mohan.V.</h4><p>No.12, AH Block 3rd Street,<br>Anna nagar<br>Chennai &ndash; 600 040<br><br>Phone : 91 - 9047 079 148<br>Email : <a href='mailto:vadivelmohan2@gmail'>vadivelmohan2@gmail </a></p></div>", 13.085126, 80.211378, ],
		];

		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 14,
			center: new google.maps.LatLng(13.0935311, 80.2127988),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});

		var infowindow = new google.maps.InfoWindow();

		var marker, i;

		for (i = 0; i < locations.length; i++) {
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				map: map,
				url: locations[i][4]
			});

			google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					infowindow.setContent(locations[i][0]);
					infowindow.open(map, marker);
				}
			})(marker, i));
		}
	</script>

	</body>

	</html>