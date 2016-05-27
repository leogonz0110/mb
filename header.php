<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package manilabuy
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper" class="home">
	   <header class="header">
		   <div class="topbar">
			   <div class="border00"></div>
			   <div class="container">
				   <div class="row">
					   <div class="col-sm-5 info">
						   <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> 000-000-0000</a>
						   <a href="#"><i class="fa fa-paper-plane" aria-hidden="true"></i> admin@mb.com</a>
					   </div>
					   <div class="col-sm-4 search">
						   <form action="#" method="post">
							   <div class="input-group">
								   <input type="text" class="form-control" placeholder="Search for...">
								   <span class="input-group-btn">
									   <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
								   </span>
							   </div>
						   </form>
					   </div>
					   <div class="col-sm-3 myspace">
						   <div class="row">
							   <ul class="clearfix">
								   <li><a href="#" class="user-btn"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								   <li><a href="#" class="wish-btn"><i class="fa fa-heart" aria-hidden="true"><span class="detail">0</span></i></a></li>
								   <li><a href="#" class="cart-btn"><i class="fa fa-shopping-cart" aria-hidden="true"><span class="detail">0</span></i></a></li>
							   </ul>
						   </div>
					   </div>
				   </div>
			   </div>
		   </div>
		   <div class="main">
			   <div class="container">
				   <div class="row">
					   <a href="#" class="logo"><img src="images/logo.png" alt=""></a>
					   <a href="#" class="mobile-btn"><i class="fa fa-bars" aria-hidden="true"></i></a>
					   <nav id="site-navigation" class="main-navigation" role="navigation">
 			  			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mb' ); ?></button>
	 			  			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	 			  		</nav><!-- #site-navigation -->
				   </div>
			   </div>
		   </div>
	   </header>

		<div id="content" class="site-content">
