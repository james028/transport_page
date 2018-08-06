<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>


	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<main>
        <div class="nav-logo">
                <a href="<?php echo esc_url(home_url('/'));?>"><img src="assets/img/logo.png" /></a> 
        </div>
        <img src="<?php echo site_url(); ?>/wp-content/themes/strona-bus/content/1.jpg" alt="" />
        <div class="menu">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/'));?>">Strona głowna</a></li>
                <li><a href="<?php echo site_url('/events/'); ?>">Wydarzenia</a></li>
                <li><a href="<?php echo site_url('/gallery/'); ?>">Zdjęcia</a></li>
                <li><a href="<?php echo site_url('/contact/'); ?>">Kontakt</a></li>
            </ul>
        </div>
        <div class="nav-phone">
                <i class="fas fa-phone"></i>
                <p style="font-weight: bold;">509-232-160</p>
        </div>
        <div class="menu-btn" id="menu-hamb">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>

        <div class="nav-block" id="nav-block" id="nav-blocka">
            <ul>
                    <li><a href="<?php echo esc_url(home_url('/'));?>">Strona głowna</a></li>
                    <li><a href="<?php echo site_url('/events/'); ?>">Wydarzenia</a></li>
                    <li><a href="<?php echo site_url('/gallery/'); ?>">Zdjęcia</a></li>
                    <li><a href="<?php echo site_url('/contact/'); ?>">Kontakt</a></li>
            </ul>
        </div>
    </main>