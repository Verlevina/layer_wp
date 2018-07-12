<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package layer
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class( 'main-body' ); ?>>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
  your browser</a> to improve your experience and security.</p>
<![endif]-->
<div class="wrapper">
  <header class="main-header">
    <div class="top-header">
	<?php
			if ( !is_front_page() ) :
				?>
      <a class="main-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      	<?php endif?>
        <?php dynamic_sidebar( 'logo' ); ?>
        	<?php
			if ( !is_front_page() && !is_home() ) :
				?>
      </a>
    <?php endif?>
		<?php dynamic_sidebar( 'contacts' ); ?>
	</div>
    <button class="open-menu" type="button">
      <div class="open-menu-icon"></div>
    </button>
    <nav class="main-menu">

    		<?php
			wp_nav_menu( array(
				'theme_location' => 'mainMenu',
				'container'       => false, 
			) );
			?>
    </nav>
    <section class="bottom-header">
      <h2 class="visually-hidden">Фото уверенного в себе адвоката и дополнительное меню</h2>
      <div class="photo">
        <p>Адвокатская практика<br>
          <span class="practiceInYears"></span>
        </p>
      </div>
      <div>
      <button class="secondary-nav-description" type="button">Адвокатская практика</button>

      	    		<?php
			wp_nav_menu( array(
				'theme_location' => 'rightMenu',
				'items_wrap'      => '<ul  class="secondary-nav">%3$s</ul>',
				'container'       => false, 
				'link_before'     => '<div class="secondary-nav-picture"></div><div class="secondary-nav-description">',
				'link_after'      => '</div>',
			) );
			?>
        </div>
    </section>
  </header>
  <main class="main-content">



	
