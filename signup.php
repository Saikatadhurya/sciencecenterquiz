<?php $i="signup";?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Bardhaman Science Centre</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="politics_version">

   <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">
			<img class="img-fluid" src="images/logo.png" alt="" />
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="quiz.php">Give Answer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="#signup">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
            </li>
			
          </ul>
        </div>
      </div>
    </nav>
	<div class="ct-slick-homepage" data-arrows="true" data-autoplay="false">
	<div id="signup" class="section wb">
		<div class="container">
			<div class="section-title text-center">
                <h3>Sign Up</h3>
                <p>Register Here</p>
            </div><!-- end title -->
			<form>
			<div class="row">
								<div class="col-md-2"> </div>
								<div class="col-md-8">
								<div class="form-group">
										<input class="form-control form-control-lg" id="name" type="text" placeholder="Your name" required>										
									</div>		
									</div>
									</div>
								<div class="row">
								<div class="col-md-2"> </div>
								<div class="col-md-8">
								<div class="form-group">
										<input class="form-control form-control-lg" id="email" type="email" placeholder="Your Email" required>										
									</div>		
									</div>
									</div>
									<div class="row">
								<div class="col-md-2"> </div>
								<div class="col-md-8">
								<div class="form-group">
										<input class="form-control form-control-lg" id="mnumber" type="number" placeholder="Mobile Number" required>										
									</div>		
									</div>
									</div>
									<div class="row">
								<div class="col-md-2"> </div>
								<div class="col-md-4">
								<div class="form-group">
										<input class="form-control form-control-lg" id="password" type="password" placeholder="Your Password" required>										
									</div>		
									</div>
								<div class="col-md-4">
								<div class="form-group">
										<input class="form-control form-control-lg" id="confirmpassword" type="password" placeholder="Confirm Password">										
									</div>		
									</div>
									</div>
									<div class="row">
								<div class="col-md-2"> </div>
									<div class="col-md-8">
									<div class="form-group">
										<textarea class="form-control" id="address" placeholder="Your Address (Optional)" required="required" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								</div>
			<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="sim-btn btn-new from-middle animated" type="submit">Signup</button>
								</div>
			</form>					
			</div>
			</div>
			</div>
   <?php include"include/footer.php";?>
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/animated-slider.js"></script>
	<!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>