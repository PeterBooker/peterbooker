<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package peterbooker
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pb' ); ?></a>

<header id="header" class="site-header">

	<div class="title-bar container">
		<a class="title" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Peter Booker Title">Peter Booker</a>
		<a class="menu-toggle toggle" aria-controls="primary-menu" aria-expanded="false">
			<div class="toggle-box">
				<div class="toggle-inner"></div>
			</div>
		</a>
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- .main-navigation -->
		<div class="contact">
			<hr>
			<?php $email = antispambot( 'mail@peterbooker.com' ); ?>
			<p>
				Want to talk? Send me a message:<br>
				<a href="<?php echo esc_url( sprintf( 'mailto:%s', $email ), array( 'mailto' ) ); ?>"><?php echo esc_html( $email ); ?></a>
			</p>
			<ul class="social-links">
				<li><a href="https://www.twitter.com/peter_booker/" target="_blank">Twitter</a></li>
				<li><a href="https://www.reddit.com/user/peterbooker/">Reddit</a></li>
				<li><a href="https://github.com/PeterBooker/">Github</a></li>
			</ul>
		</div><!-- .contact -->
	</div>

</header>

<section id="content" class="site-content grid">
	<div class="box small-12">
