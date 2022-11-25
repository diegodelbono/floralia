<?php  

/*
    Theme Name:     Catorce
    File theme:     header.php
    File source:    wp-content/themes/catorce/header.php
    Author:         Diego Delbono
    Version:        1.0
*/
 
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    
    <title><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { echo ' &raquo; '; } ?><?php bloginfo('name'); ?></title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/app.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/plugins/owl/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/plugins/owl/owl.theme.default.min.css" />
	
	<?php wp_head(); ?>
 
</head>

<?php $count = WC()->cart->get_cart_contents_count() ?>

<body <?php body_class(); ?>>

    <header class="header">
        <div class="container">
            <div class="header__container">
                <div class="header__item">
                    <a class="logo" href="<?php echo home_url('/'); ?>" title="Floralia">Floralia</a>
                </div>
                <div class="header__item">
                    <div class="header__menu">
                        <div class="header__menu--item">
                            <a href="<?php echo home_url('/'); ?>/cart" title="Cart">
                                <div class="i i--cart"></div>
                                <span class="count">
                                    <?php if($count > 0) { echo $count; } ?>
                                </span>
                            </a>
                        </div>
                        
                        <div class="i-nav js-open-nav">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </header>

    <?php include('nav.php') ?>
