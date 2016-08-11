<script type='text/javascript'>
	function show_results() {
		// Remove query strings
		var clean_uri = location.protocol + "//" + location.host + location.pathname;
		window.history.replaceState({}, document.title, clean_uri);
		// Jump to contact page
		location.hash = '#contact';
		// It's jQuery. so should load jQuery before use
		//$('.navbar a[href*=#contact]:not([href=#])').addClass('active').trigger('click');
	}
</script>
<?php
	$result  = "";
	if (isset($_GET['result']) 
		&& ($_GET['result'] == "success"
		|| $_GET['result'] == "error")) { 
		$result = $_GET['result'];
		unset($_GET['result']);
		echo "<script type='text/javascript'> show_results();</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- Load font awesome for glyphicons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<!-- Load Bootstrap v4.0.0-alpha.2 CSS -->
	<link  rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link  rel="stylesheet" href="css/myStyle.css" type="text/css" />
    <title>John Jeong: Portfolio Home</title>
</head>
<body>

<header>
	<!-- Navigation -->
    <nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="http://ABC.COM"><img class="img-fluid logo-inline" src="images/logo-28.gif" alt="Logo">John Jeong</a>
            <!-- Toggle Button -->
            <button type="button" class="navbar-toggler hidden-sm-up pull-xs-right" data-toggle="collapse" data-target="#nav-content">☰</button> 
            <!-- Nav Content -->
            <div class="collapse navbar-toggleable-xs" id="nav-content">
                <ul class="nav navbar-nav pull-sm-right">
                    <li class="nav-item"><a class="nav-link" href='#home'><span class="fa fa-home" aria-hidden="true"></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#youtube">YouTube</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Portfolio page -->
<section id="home" class="section-cyan">
	<div class="container clearfix">
		<div class="row">
			<div class="col-md-12">
				<h2 class="page-header">Portfolio</h2>
				<!-- 1st row -->
				<div class="row">
					<!-- Bazzar Ceramics Studio -->
					<div class="col-sm-4">
						<div class="card card-inverse card-primary-grad margin-bottom30" id="card-bc">
							<img class="card-img-top img-fluid" src="images/Card-BC.jpg" alt="Bazzar Ceramics Studio Image">
							<div class="card-block">
								<h3 class="card-title">Bazzar Ceramics Studio</h3>
								<p class="card-text"><img class="img-fluid icon-inline" src="images/wordpress32.png" alt="WordPress icon">WordPress, Shopping Mall</p>
							</div>
						</div>
					</div>
					<!-- Job Hunter -->
					<div class="col-sm-4">
						<div class="card card-inverse card-primary-grad margin-bottom30" id="card-jh">
							<img class="card-img-top img-fluid" src="images/Card-JH.jpg" alt="Job Hunter Image">
							<div class="card-block">
								<h3 class="card-title">Job Hunter</h3>
								<p class="card-text">PHP, MySQL, HTML/CSS</p>
							</div>
						</div>
					</div>
					<!-- Sport Warehouse -->
					<div class="col-sm-4">
						<div class="card card-inverse card-primary-grad margin-bottom30" id="card-sw">
							<img class="card-img-top img-fluid" src="images/Card-SW.jpg" alt="Sport Warehouse Image">
							<div class="card-block">
								<h3 class="card-title">Sport Warehouse</h3>
								<p class="card-text">Flash, PHP, MySQL, HTML/CSS</p>
							</div>
						</div>
					</div>
				</div><!-- end 1st row -->
				
				<!-- 2nd row -->
				<div class="row">
					<!-- Portfolio Website -->
					<div class="col-sm-4">
						<div class="card card-inverse card-primary-grad margin-bottom30" id="card-ph">
							<img class="card-img-top img-fluid" src="images/Card-PH.jpg" alt="Portfolio Website Image">
							<div class="card-block">
								<h3 class="card-title">Portfolio Website</h3>
								<p class="card-text">PHP, MySQL, HTML/CSS</p>
							</div>
						</div>
					</div>
					<!-- Android app -->
					<div class="col-sm-4">
						<div class="card card-inverse card-primary-grad margin-bottom30" id="card-aa">
							<img class="card-img-top img-fluid" src="images/Card-AA.jpg" alt="Android app">
							<div class="card-block">
								<h3 class="card-title">Android app</h3>
								<p class="card-text">Java, Android Studio</p>
							</div>
						</div>
					</div>
					<!-- Vet Clinic -->
					<div class="col-sm-4">
						<div class="card card-inverse card-primary-grad margin-bottom30" id="card-vc">
							<img class="card-img-top img-fluid" src="images/Card-VC.jpg" alt="Vet Clinic">
							<div class="card-block">
								<h3 class="card-title">Vet Clinic</h3>
								<p class="card-text">VB.Net, DAL Class, Stored Procedure</p>
							</div>
						</div>
					</div>
				</div><!-- end 2nd row -->
				
				<!-- 3rd Row -->
				<div class="row">
					<!-- Static Bazzar Ceramics Studio -->
					<div class="col-sm-4">
						<div class="card card-inverse card-primary-grad margin-bottom30" id="card-sb">
							<img class="card-img-top img-fluid" src="images/Card-SB.jpg" alt="Static Bazzar Ceramics Studio Image">
							<div class="card-block">
								<h3 class="card-title">Static BC Studio</h3>
								<p class="card-text"><img class="img-fluid icon-inline" src="images/bootstrap.png" alt="bootstrap icon">Bootstrap 3, Google fonts</p>
							</div>
						</div>
					</div>
					<!-- Google Blogger -->
					<div class="col-sm-4">
						<div class="card card-inverse card-primary-grad margin-bottom30" id="card-mt">
							<img class="card-img-top img-fluid" src="images/Card-MT.jpg" alt="Static Bazzar Ceramics Studio Image">
							<div class="card-block">
								<h3 class="card-title">Military Techno-thrillers</h3>
								<p class="card-text"><img class="img-fluid icon-inline" src="images/blogger.png" alt="Google Blogger icon">Blogger</p>
							</div>
						</div>
					</div>
					<!-- Airline Reservation -->
					<div class="col-sm-4">
						<div class="card card-inverse card-primary-grad margin-bottom30" id="card-ar">
							<img class="card-img-top img-fluid" src="images/Card-AR.jpg" alt="Airline Reservation Image">
							<div class="card-block">
								<h3 class="card-title">Airline Reservation</h3>
								<p class="card-text">Visual Basic.Net</p>
							</div>
						</div>
					</div>
				</div><!-- end 3rd row -->
			</div><!-- end col-md-12 -->
		</div><!-- end row -->
	</div><!--  end container -->
</section>

<!-- YouTube page -->
<section id="youtube" class="section-gray">
	<div class="container clearfix">
		<div class="row">
			<div class="col-md-12">
				<h2 class="page-header">YouTube Channel</h2>
				<!-- 1st row -->
				<div class="row">	
					<!-- Vet Clinic -->
					<div class="col-sm-6 margin-bottom30">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FcBo1bKC7rE" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<!-- Airline Reservation -->
					<div class="col-sm-6 margin-bottom30">
						<div  class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/z9y3NafcnPs" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div><!-- end 1st row -->
				
				<!-- 2nd row -->
				<div class="row">	
					<!-- Android app -->
					<div class="col-sm-6 margin-bottom30">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aakp6iZ4qAk" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<!-- Computer Components Warehouse -->
					<div class="col-sm-6 margin-bottom30">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GAJRiVW8TgU" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div><!-- end 2nd row -->
				
				<!-- 3rd row -->
				<div class="row">	
					<!-- Super Paint -->
					<div class="col-sm-6 margin-bottom30">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jIcnJeeZejk" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<!-- Bubble Sort -->
					<div class="col-sm-6 margin-bottom30">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7Rf5a6RUk2k" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div><!-- end 3rd row -->
			</div><!-- end col-md-12 -->
		</div><!-- end row -->
	</div><!-- end container -->
</section>

<!-- Contact page -->
<section id="contact" class="section-cyan">
	<div class="container clearfix">
		<div class="row">
			<div class="col-md-12">
				<h2 class="page-header">Contact</h2>
				<!-- Embedded Google Map -->
				<div id="map-container"></div>
				
				<div class="row">	
					<div class="col-sm-offset-2 col-sm-8">
						<!-- Show results of the sending message -->
						<?php if ($result == "success") { ?>
							<div class="alert alert-success">
								<p>Thank you!</p>
								<p>Your message has been successfully sent. I will contact you soon!</p>
							</div>
						<?php } else if ($result == "error") { ?>
							<div class="alert alert-danger">
								<p>Oops!</p>
								<p>Something went wrong. Please try again later.</p>
							</div>
						<?php } ?>
						<!-- Contact Form -->
						<form id="contact-form" method="post" action="gdform.php" class="contact-form form">
							<div class="controls">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="firstname">Your firstname *</label>
											<input type="text" name="firstname" id="firstname" placeholder="Enter your firstname" required="required" class="form-control">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="lastname">Your lastname *</label>
											<input type="text" name="lastname" id="lastname" placeholder="Enter your lastname" required="required" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="email">Your email *</label>
									<input type="email" name="email" id="email" placeholder="Enter your email" required="required" class="form-control">
								</div>
								<div class="form-group">
									<label for="subject">Subject *</label>
									<input type="text" name="subject" id="subject" placeholder="Enter your subject" required="required" class="form-control">
								</div>
								<div class="form-group">
									<label for="message">Your message for me *</label>
									<textarea rows="4" name="message" id="message" placeholder="Enter your message for me here. I will get back to you within 5 business days" required="required" class="form-control"></textarea>
								</div>
								<div class="text-center">
									<input type="submit"  name="submit" value="Send message" class="btn btn-primary btn-block">
								</div>
							</div>
						</form><!-- end contact form -->	
					</div><!-- end col-sm-8 -->								
				</div><!-- end row -->
			</div><!-- end col-md-12 -->
		</div><!-- end row -->
	</div><!-- end container -->
</section>

<footer class="footer">
	<div class="container">
		<span class="text-muted">Copyright © 2016 John Jeong. Images copyright their respective owners.</span>
	</div>
</footer>

<!-- Bootstrap Core JavaScript -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Google Embeded Map JavaScript -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<!-- Tooltips are opt-in for performance reasons -->
<!-- <script src="https://cdn.jsdelivr.net/tether/1.2.0/tether.min.js"></script>  -->
<!-- My JavaScript -->
<script type="text/javascript" src="js/myScript.js"></script>
</body>
</html>