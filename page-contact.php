<?php  

if ( !defined('ABSPATH')) exit;

/*
	Theme Name:		Floralia
	File theme:		page.php
	File source:    wp-content/themes/catorce/page.php
	Author: 		Diego Delbono
	Version: 		1.0
    Template name:  Contact
*/
 
?>

<?php get_header(); ?>

<main class="main">
    <div class="main__content container">
        <div class="flex-grid border-top">

            <?php if( have_rows('contact') ): ?>
                <?php while( have_rows('contact') ): the_row(); ?>
                
                    <?php $title    = get_sub_field('title'); ?>
                    <?php $contact  = get_sub_field('content'); ?>
                    <?php $form     = get_sub_field('form'); ?>

                    <div class="flex-grid__col">
                        <h1><?php echo $title; ?></h1>
                    </div>
                    <div class="flex-grid__col font-size-lg">
                        <?php echo $contact; ?>
                    </div>
                    <div class="flex-grid__col">
                        <?php echo do_shortcode('[contact-form-7 id="94" title="Contact form 1"]'); ?>
                    </div>        
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>

