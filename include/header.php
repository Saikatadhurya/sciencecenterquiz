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
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
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
              <a class="nav-link js-scroll-trigger <?php if(strcmp($i,'quiz')==0) { echo 'active';}?>" href="quiz.php">Give Answer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger <?php if(strcmp($i,'signup')==0) { echo 'active';}?>" href="signup.php">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
            </li>
			
          </ul>
        </div>
      </div>
    </nav>