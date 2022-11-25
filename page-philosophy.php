<?php  

if ( !defined('ABSPATH')) exit;

/*
	Theme Name:		Floralia
	File theme:		page.php
	File source:    wp-content/themes/catorce/page.php
	Author: 		Diego Delbono
	Version: 		1.0
    Template name:  Philosophy
*/
 
?>

<?php get_header(); ?>

<main class="main">
    <div class="main__content container">
        <div class="flex-grid border-top">

            <?php if( have_rows('philosophy') ): ?>
                <?php while( have_rows('philosophy') ): the_row(); ?>
                
                    <?php $title    = get_sub_field('title'); ?>
                    <?php $contact  = get_sub_field('content'); ?>
                    
                    <div class="flex-grid__col">
                        <h1><?php echo $title; ?></h1>
                    </div>
                    <div class="flex-grid__col--full">

                        <div class="owl-carousel owl-theme">

                            <?php if( have_rows('gallery') ): ?>
                                <?php while( have_rows('gallery') ): the_row(); ?>

                                    <?php $photo    = get_sub_field('photo'); ?>
                                    <?php $caption  = get_sub_field('caption'); ?>

                                    <figure class="figure">
                                        <img src="<?php echo $photo['url']; ?>"/>
                                        <div class="figure__caption">
                                            <?php echo $caption; ?>
                                        </div>
                                    </figure>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>

                        <div class="half-content">
                            <?php echo $contact; ?>
                        </div>

                    </div>                    
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>

