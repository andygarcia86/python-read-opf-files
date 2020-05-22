<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eezy-store
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'eezy-store' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="custom-header">
		
	<div class="container">
		<div class="site-branding">
			<div class="col-sm-7 col-xs-6 brand-logo">
				<?php
				
				eezy_store_custom_logo();
				
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>	
			</div>
			
			<div class="col-sm-5 col-xs-6 login-sec">
			
				<?php 
					
				if ( class_exists( 'WooCommerce' ) ) :?> 
					
					<a href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id')));?>"><span class="mobile_hide"><?php esc_html_e('My Account', 'eezy-store'); ?></span> <span class="fa fa-user"></span></a>
						
				<?php endif; ?>
			
				
				<div class="basket-cart">
				
				<?php 
					
					if ( class_exists( 'WooCommerce' ) ) :?>
						
						<a class="cart-contents" href="<?php echo esc_url(function_exists( 'wc_get_cart_url') ? wc_get_cart_url() : $woocommerce->cart->get_cart_url()); ?>" title="<?php esc_attr_e('View your shopping cart', 'eezy-store'); ?>"><span class="icon-basket-loaded"></span><?php echo sprintf(_n('%d item', '%d items', WC()->cart->cart_contents_count, 'eezy-store'), WC()->cart->cart_contents_count);?> <?php echo wp_kses_post(WC()->cart->get_cart_total()); ?></a>
						
				<?php endif; ?>	
				</div>
			</div>
			
		</div><!-- .site-branding -->
		
		
		<div class="navbar-container">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' , 'container_class'=> 'eezy-store-nav') ); ?>

				<!-- Language menu -->
				<ul id="primary-menu" class="menu nav-menu" aria-expanded="false" style="float: right;">
					<li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom">
						<a href="<?php echo(get_site_url()); ?>/change-lang?lang=es_ES"><i class="flag-icon es-flag"></i> Es</a>
					</li>
					<li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom">
						<a href="<?php echo(get_site_url()); ?>/change-lang?lang=en_US"><i class="flag-icon en-flag"></i>En</a>
					</li>
				</ul>

			</nav><!-- #site-navigation --> 
			
			<span class="eezy-search-icon"><a href="javascript:void(0);"><i class="fa fa-search"></i></a></span>
			
			<div class="eezy-search-form">
				<?php get_search_form(); ?>
			</div>
			
		</div><!--end container-->
	</div>
	
	<div class="custom-header-media">
		<?php the_custom_header_markup(); ?>
	</div>
	
	</div>	
	</header><!-- #masthead -->
	
	<div class="container">

	<div id="content" class="site-content">