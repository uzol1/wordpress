<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fancy Lab
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="site">
			<!-- Banner HTML code starts here -->
	<div class="main-banner-page">
		<div class="main-banner">
			<!-- Navbar HTML code starts here -->
			<!-- HTML code for responsive navbar appearing as slidemenu in smaller devices starting from 991px; -->
			<div class="slidemenu" id="slidemenu" style="right: 0px;">
				<div class="hamburger-close" id="hamburger-close" onclick="mynewFunction()">×</div>
				<div class="menu-main-menu-container">
					<div class="menu-main-menu-container">
						<ul id="menu-main-menu" class="menu">
							<li id="menu-item-28"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-16 current_page_item menu-item-28">
								<a aria-current="page">Home</a></li>
							<li id="menu-item-273"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-273">
								<a href="">About Us</a>
							</li>
							<li id="menu-item-302"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-302">
								<a href="">Our Services</a>
							</li>
							<li id="menu-item-529"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-529">
								<a href="">Our Capabilities</a>
							</li>
							<li id="menu-item-634"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-634">
								<a href="">Blog</a>
							</li>
						</ul>
					</div>
				</div>

			</div>
			<!-- HTML code for responsive navbar appearing as slidemenu in smaller devices starting from 991px; ends here -->

			<header class="navbar">
				<div class="container-space">
					<div class="content-wrap">
						<div class="hamburger" onclick="mynewFunction()">
							<div class="line"></div>
							<div class="line"></div>
							<div class="line"></div>
						</div>
						<div class="header-logo">
							<figure>
								<a href="<?php echo home_url();?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/logo-mezzaflor.png"></a>
							</figure>
							
						</div>
						<div class="main-nav">
							<div class="navbar-menu">
								<div class="header-down">
								<div class="container">
									<div class="row">
									<div class="col-lg-12 col-sm-12 col-12 align-items-center">
										<div class="d-lg-block"><?php 
										echo wp_nav_menu(
											array( 
											'theme_location'  => 'fancy_lab_main_menu',
											'menu_id'         => 'menu-top-menu-1', 
											'menu_class'      => 'main-menu text-uppercase d-flex justify-content-between',
											'container_class' => 'menu-top-menu-container'
											) 
										); ?>
										</div>
									</div>
									</div>
								</div>
								</div>
							</div>
						</div>
						<div class="search-box">
							<div class="search">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				</div>





			</header>	