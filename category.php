<?php  

if ( !defined('ABSPATH')) exit;

/*
	Theme Name:		Floralia
	File theme:		category.php
	File source:    wp-content/themes/catorce/category.php
	Author: 		Diego Delbono
	Version: 		1.0
*/
 
?>

<?php get_header(); ?>

<main class="main">
    <div class="main__header">
        <div class="container">
            <h1><?php single_cat_title(); ?></h1>
        </div>
    </div>
    <div class="main__content container">
        <div class="g-row">
            <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                <?php the_title(); ?>
                <?php the_permalink(); ?>
                <?php the_post_thumbnail(''); ?>
                <?php the_excerpt(); ?>
            <?php endwhile; endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
