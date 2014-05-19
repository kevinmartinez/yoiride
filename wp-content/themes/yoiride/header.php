<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.png">
	<title><?php wp_title( 'YOIRIDE', true, 'right' ); ?></title>
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400, 700' rel='stylesheet'>
	<link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet'>


	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<!-- start of wp head -->
	<?php wp_head(); ?>
	<!-- end of wp head -->
</head>

<body <?php body_class(); ?>>
		<header>
			<!-- NAVIGATION -->
			<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/"><img src="<?php bloginfo('template_url'); ?>/img/nav_bar_logo.png"></a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="<? echo is_home() ? "active" : ""; ?>"><a href="/">HEM</a></li>
							<li class="dropdown <? echo is_page(array("team","racerapporter","bilder","nyheters","sponsorer")) ? "active" : ""; ?>">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">RACING <b class="caret"></b></a>
								<ul class="dropdown-menu sub-menu">
									<li><a href="/team">TEAM</a></li>
									<!-- <li><a href="#">RACERAPPORTER</a></li> -->
									<li><a href="/bildgalleri">BILDER</a></li>
									<!--<li><a href="#">NYHETER</a></li> -->
									<li><a href="/sponsorer">SPONSORER</a></li>
								</ul>
							</li>
							<li class="dropdown <? echo is_page(array("dack","dunlop","faq","dackinfo")) ? "active" : ""; ?>">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">DUNLOP <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="/dunlop">DÄCK</a></li>
									<li><a href="/faq">FAQ</a></li>
									<!--<li><a href="#">DÄCKINFO</a></li> -->
								</ul>
							</li>
							<li class="<? echo is_page("event") ? "active" : ""; ?>"><a href="/event">EVENT</a></li>
							<li class="<? echo is_page("kontakt") ? "active" : ""; ?>"><a href="/kontakt">KONTAKT</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
