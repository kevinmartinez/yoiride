<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
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
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( 'YOIRIDE', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet'>

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
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html">YOIRIDE</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">RACING <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">TEAM</a></li>
									<li class="divider"></li>
									<li><a href="#">RACERAPPORTER</a></li>
									<li class="divider"></li>
									<li><a href="#">BILDER</a></li>
									<li class="divider"></li>
									<li><a href="#">NYHETER</a></li>
									<li class="divider"></li>
									<li><a href="#">SPONSORER</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">DUNLOP <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="dack.html">DÄCK</a></li>
									<li class="divider"></li>
									<li><a href="#">FAQ</a></li>
									<li class="divider"></li>
									<li><a href="#">DÄCKINFO</a></li>
								</ul>
							</li>
							<li><a href="#">EVENT</a></li>
							<li><a href="#">KONTAKT</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
