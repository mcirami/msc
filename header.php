<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700|Lato:400,300,700|Fira+Sans:400,700italic,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <meta property="og:image" content="<?php echo bloginfo('template_url'); ?>/images/logo.png" />
    <meta property="og:description" content="Custom built and designed websites. Unique for you to stick out above the rest" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

	<header id="global_header">
		<div class="container">
			<a class="mobile_menu_icon" href="#"><!--<img id="menu" class="mobile_menu_icon" src="<?php echo bloginfo('template_url'); ?>/images/mobile_menu_icon.png" alt=""/>-->
				<span></span>
				<span></span>
				<span></span>
			</a>
			<div class="logo_wrap">
				<h1 id="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo bloginfo('template_url'); ?>/images/logo.png" /></a>
				</h1>
			</div>
			<div class="menu">
				<nav role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'header_menu' ) ); // remember to assign a menu in the admin to remove the container div ?>
				</nav>
			</div>
		</div>
	</header>