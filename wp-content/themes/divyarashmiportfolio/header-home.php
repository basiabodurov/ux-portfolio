<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
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
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">


					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					<div class="logo">
						<h1 class="logotype">DR</h1>
						 <p class="subtitle fancy"><span><h2>Divya Rashmi UX Designer</h2></span></p>
					</div>


					<div class="social">
							<ul>
								<li><a target="_blank" href="https://www.facebook.com/divya.rashmi.104?ref=br_rs"><i class="fa fa-facebook-square"></i></a></li>
								<li><a target="_blank" href="https://www.linkedin.com/in/divyarashmi"><i class="fa fa-linkedin"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/allokik_kiran"><i class="fa fa-twitter"></i></a></li>
								<li><a target="_blank" href="https://www.behance.net/divyarashmi"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->

			</header><!-- #masthead -->

			<div id="content" class="site-content">
