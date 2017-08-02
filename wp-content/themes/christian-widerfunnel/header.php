<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Christian-widerfunnel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title>Christian Widerfunnel - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		
		<nav role="navigation">
	    <div class="nav-wrapper container">
				<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) : ?>
						<a id="logo-container" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="brand-logo"><?php bloginfo( 'name' ); ?></a>
					<?php else : ?>
						<a id="logo-container" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="brand-logo"><?php bloginfo( 'name' ); ?></a>
					<?php
					endif; ?><!-- .site-branding -->
	      <ul class="right hide-on-med-and-down">
	        <li><a href="#">Navbar Link</a></li>
	        <li>
	        	<a class="waves-effect waves-light btn"><?php esc_html_e( 'Primary Menu', 'christian-widerfunnel' ); ?></a>
	        	
	        </li>
	        <li>
		        <?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</li>
	      </ul>
	      
					

	      <ul id="nav-mobile" class="side-nav">
	        <li><a href="#">Navbar Link</a></li>
	      </ul>
	      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
	    </div>
	  </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
