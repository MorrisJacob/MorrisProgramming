<?php

$siteurl = "https://www.morrisprogramming.com/";

if(basename($_SERVER['PHP_SELF']) == "index.php"){
	$active = "home";
} elseif(basename($_SERVER['PHP_SELF']) == "pricing.php"){
	$active = "pricing";
} elseif(basename($_SERVER['PHP_SELF']) == "about.php"){
	$active = "about";
} elseif(basename($_SERVER['PHP_SELF']) == "contact.php"){
	$active = "contact";
} elseif(basename($_SERVER['PHP_SELF']) == "blog.php"){
	$active = "blog";
}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Morris Programming - Experience Programming</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Morris Programming - Experience Programming" />
	<meta name="keywords" content="Morris Programming, programs, javascript, html, jquery, php, visual basic, vb, vb.net, java, oop, html5, css3, mobile first, responsive" />
	<meta name="author" content="Jacob Morris" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	
	
	<link rel="shortcut icon" href="<?php echo $siteurl ?>/images/logo/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo $siteurl ?>/images/logo/favicon.ico" type="image/x-icon">
	
	
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo $siteurl ?>/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo $siteurl ?>/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo $siteurl ?>/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo $siteurl ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $siteurl ?>/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo $siteurl ?>/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo $siteurl ?>/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php echo $siteurl ?>/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>


			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
					<!--Morris Programming JS-->
	<script src="<?php echo $siteurl ?>/js/mp-js.js"></script>
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call <a href="tel://3176430663" class="redcolor">(317)643-0663</a> for consultation</p>
						<!--<ul class="fh5co-social">
							<li><a href="https://www.facebook.com/MorrisProgramming/" target="_blank"><i class="icon-facebook"></i></a></li>
						</ul>-->
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-5">
					<div id="mp-logo"><a href="<?php echo $siteurl ?>/index.php"><img src="<?php echo $siteurl ?>/images/logo/Logo.jpg" class="img img-responsive" alt="Morris Programming Logo" /></a></div>
						<div id="fh5co-logo"><a href="<?php echo $siteurl ?>/index.php">Experience Programming<span>.</span></a></div>
					</div>
					<div class="col-xs-7 text-right menu-1">
						<ul>
							<li class="<?php if((isset($active)) && ($active == "home")) {echo "active"; } ?>"><a href="<?php echo $siteurl ?>/index.php">Home</a></li>
							<li class="<?php if((isset($active)) && ($active == "pricing")) {echo "active"; } ?>"><a href="<?php echo $siteurl ?>pricing.php">Pricing</a></li>
							<li class="<?php if((isset($active)) && ($active == "about")) {echo "active"; } ?>"><a href="<?php echo $siteurl ?>/about.php">About</a></li>
							<!--<li class="<?php if(!isset($active)) {echo "active"; } ?> has-dropdown">
								<a href="#">Lessons</a>
								<ul class="dropdown">
									<li><a href="<?php echo $siteurl ?>/php/lessons/html.php">Html</a></li>
									<li><a href="<?php echo $siteurl ?>/php/lessons/css.php">CSS</a></li>
									<li><a href="<?php echo $siteurl ?>/php/lessons/javascript.php">JavaScript</a></li>
									<li><a href="<?php echo $siteurl ?>/php/lessons/visualbasic.php">Visual Basic</a></li>
									<li><a href="<?php echo $siteurl ?>/php/lessons/java.php">Java</a></li>
								</ul>
							</li>-->
							<li class="<?php if((isset($active)) && ($active == "contact")) {echo "active"; } ?>"><a href="<?php echo $siteurl ?>/contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
