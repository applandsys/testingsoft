<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rice Testing - Sytem Checking by NASA</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/scrolling-nav.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg  fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"> <img src="<?php echo base_url();?>images/nasa-logo.svg" alt=""></a>
	
		
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
			 <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#testing">Testing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
			<?php if($this->session->userdata('login')){?> 
			
			<li class="nav-item">
              <a style="color: red" class="nav-link js-scroll-trigger" href="<?php echo base_url();?>testingpanel/signout">Signout</a>
            </li>
			
			<?php }?>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary headbox text-white">
      <div class="container text-center">
        <h1>NASA Official</h1>
        <p class="lead">Testing System for Third Party Service</p>
      </div>
    </header>
	
	
	<?php echo $content; ?>

    <!-- Footer 
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
    </footer>
	-->

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="<?php echo base_url();?>assets/js/scrolling-nav.js"></script>

  </body>

</html>
