<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Car Rental</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url('assets/site/css/bootstrap.min.css'); ?>" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="<?php echo base_url('assets/site/css/animate.css'); ?>" rel="stylesheet">

  <!-- Google Font Lato -->
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo base_url('assets/site/css/font-awesome.min.css'); ?>">

  <!-- Plugin Styles -->
  <link href="<?php echo base_url('assets/site/css/datepicker.css'); ?>" rel="stylesheet">

  <!-- Main Styles -->
  <link href="<?php echo base_url('assets/site/css/styles.css'); ?>" rel="stylesheet">

  <link href="<?php echo base_url('assets/site/css/mystyle.css'); ?>" rel="stylesheet">

  
  
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link href="<?php echo base_url('assets/site/css/ie8fix.css'); ?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
    <![endif]-->


    <!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/site/img/ico/apple-touch-icon-144-precomposed.png'); ?>">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/site/img/ico/apple-touch-icon-114-precomposed.png'); ?>">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/site/img/ico/apple-touch-icon-72-precomposed.png'); ?>">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/site/img/ico/apple-touch-icon-57-precomposed.png'); ?>">
<link rel="shortcut icon" href="<?php echo base_url('assets/site/img/ico/favicon.png'); ?>">

<script src="<?php echo base_url('assets/site/js/modernizr-2.8.3.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/site/js/jquery-1.11.3.min.js'); ?>"></script>

  </head>
  <body id="top" data-spy="scroll" data-target=".navbar" data-offset="260">

    <!-- Header start -->
    <header data-spy="affix" data-offset-top="39" data-offset-bottom="0" class="large">
      <div class="top-header-bar">
        <div class="container">
			<div class="row">
				<div class="col-md-6">
					<p>Some text goes here...</p>
				</div>
				<div class="col-md-6 text-right">
					<a href="#"><i class="fa fa-user"></i> Sign in</a>
					<ul id="signup" class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">SIGN UP / join <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<div class="signup-dropdown">
							<p>Welcome to E - Car Rental showroom</p>
							<a href="#" class="btn btn-orange btn-block">Sign In</a>
							<hr/>
							<p>Are you new to showroom?</p>
							<a href="#" class="btn btn-orange btn-block">Register Now</a>
						</div>
					</ul>
				</li>	
			</ul>	
				</div>
				
			</div>
        </div>
      </div>
      <div class="row container box">
        <div class="col-md-3">
          <!-- Logo start -->
          <div class="brand">
            <h1><a class="scroll-to" href="<?php echo site_url(); ?>"><img class="img-responsive"  src="<?php echo base_url('assets/site/img/logo.gif'); ?>" alt="Car|Rental"></a></h1>
          </div>
          <!-- Logo end -->
        </div>

        <div class="col-md-6">
          <div class="pull-right">
            <div class="header-info pull-right">
              <!--<div class="contact pull-left">CONTACT:</div>-->
              <!-- Language Switch start -->
              <!--<div class="language-switch pull-right">
                <div class="dropdown">
                  <a data-toggle="dropdown" href="#" id="language-switch-dropdown">Select your language </a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="language-switch-dropdown">
                    <li><a href="#"><img src="img/flags/United-States.png" alt="usa"> English</a></li>
                    <li><a href="#"><img src="img/flags/Germany.png" alt="germany"> German</a></li>
                    <li><a href="#"><img src="img/flags/France.png" alt="france"> French</a></li>
                  </ul>
                </div>
              </div>-->
              <!-- Language Switch end -->
            </div>
          </div>
          <form action="<?php echo site_url('Search'); ?>" method="post">
          <div class="search-site">
            <div class="input-group">
            
              <input type="text" class="form-control" placeholder="Search in Listings...">
              <div class="input-group-btn">
                <button type="button" class="search-dropdown btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">or search directly <span class="caret"></span></button>

                <ul class="dropdown-menu dropdown-menu-right">
                  <?php if(isset($headerCars) && $headerCars){ ?>
                      <?php foreach($headerCars as $car){ ?>
                        <li><a href="#<?php echo $car['car_id'] ?>"><?php echo $car['car_name'] ?></a></li>
                      <?php } ?>
                  <?php } ?>
                </ul>
              </div><!-- /btn-group -->
              <button type="submit" class="btn search-site-btn"><i class="fa fa-search"></i></button>
            </div>
          </div>  
          </form>
          
        </div>
        <div class="col-md-3">
		</div>
      </div>
      <div class="row container box hide-on-scroll">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
              <!-- Toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand scroll-to" href="#top">
                  <img class="img-responsive"  src="<?php echo base_url('assets/site/img/logo.gif'); ?>" alt="Car|Rental"></a>
              </div>
              <!-- Collect the nav links, for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- Nav-Links start -->
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#" class="scroll-to">Home</a></li>
                  <li><a href="<?php echo site_url('Showroom'); ?>" class="scroll-to">All Showrooms</a></li>
                  <li><a href="#vehicles" class="scroll-to">Cars</a></li>
                  <li><a href="#reviews" class="scroll-to">Reviews</a></li>
                  <li><a href="#locations" class="scroll-to">Locations</a></li>
                  <li><a href="<?php echo site_url('Customer/dashboard'); ?>" class="scroll-to">Become a Rental Owner</a></li>
                </ul>
                <!-- Nav-Links end -->
              </div>
            </div>
          </nav>
        </div>
        <div class="col-md-2"></div>
      </div>

    </header>
    <!-- Header end -->