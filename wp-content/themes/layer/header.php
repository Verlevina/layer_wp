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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
  your browser</a> to improve your experience and security.</p>
<![endif]-->
<div class="wrapper">
  <header class="main-header">
    <div class="top-header">
	<?php
			if ( is_front_page() && is_home() ) :
				?>
      <a class="main-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      	<?php endif?>
        <div class="logo">
          <span>Адвокат</span>
          <div class="layer-name"><?php bloginfo( 'description' ); ?></div>
          <p>Подпись. Важная подпись</p>
        </div>
        	<?php
			if ( is_front_page() && is_home() ) :
				?>
      </a>
    <?php endif?>
      <div class="header-contacts">
        <span>Контакты:</span>
        <a href="tel: +700000000">+7 (000) 123-45-67</a>
        <a href="mailto:ex@ex.ru">ex@ex.ru</a>
      </div>
    </div>
    <button class="open-menu" type="button">
      =
    </button>
    <nav class="main-menu">

    		<?php
			wp_nav_menu( array(
				'theme_location' => 'mainMenu',
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
			) );
			?>
        </div>
    </section>
  </header>
  <main class="main-content">



	
