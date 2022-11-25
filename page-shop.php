<?php  

if ( !defined('ABSPATH')) exit;

/*
	Theme Name:		Floralia
	File theme:		page.php
	File source:    wp-content/themes/catorce/page.php
	Author: 		Diego Delbono
	Version: 		1.0
    Template name:  Shop
*/
 
?>

<?php get_header(); ?>

<main class="main">

    <div class="main__content container">

        <?php include('nav-shop.php') ?>
        
        <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

    </div>
    
</main>

<?php get_footer(); ?>
