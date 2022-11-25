<?php  

if ( !defined('ABSPATH')) exit;

/*
	Theme Name:		Floralia
	File theme:		page.php
	File source:    wp-content/themes/catorce/page.php
	Author: 		Diego Delbono
	Version: 		1.0
    Template name:  Policy
*/
 
?>

<?php get_header(); ?>

<main class="main">
    <div class="main__content container">
        <div class="flex-grid border-top">

            <?php if( have_rows('policy') ): ?>
                <?php while( have_rows('policy') ): the_row(); ?>
                
                    <?php $title   = get_sub_field('title'); ?>
                    <?php $extract  = get_sub_field('extract'); ?>
                    <?php $content  = get_sub_field('content'); ?>

                    <div class="flex-grid__col">
                        <h1><?php echo $title; ?></h1>
                    </div>
                    <div class="flex-grid__col">
                        <?php echo $extract; ?>
                    </div>
                    <div class="flex-grid__col text--tertiary">
                        <?php echo $content; ?>
                    </div>        
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>

