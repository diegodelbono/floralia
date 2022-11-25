<?php  

if ( !defined('ABSPATH')) exit;

/*
	Theme Name:		Floralia
	File theme:		page.php
	File source:    wp-content/themes/catorce/page.php
	Author: 		Diego Delbono
	Version: 		1.0
*/
 
?>

<?php get_header(); ?>

<main class="main">
    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
        <?php if( is_product_category() ) : ?>
        <div class="main__content container">
            <?php include('nav-shop.php') ?>
            <?php the_content(); ?>
        </div>
        <?php else : ?>
            <?php the_post_thumbnail(); ?>                    
            <!-- <h1><?php the_title(); ?> -->
            <div class="main__content container">
                <?php the_content(); ?>
            </div>
        <?php endif; ?>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
