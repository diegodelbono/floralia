<?php

if ( !defined('ABSPATH')) exit;

/*
	Theme Name:		Floralia
	File theme:		home.php
	File source:    wp-content/themes/catorce/home.php
	Author: 		Diego Delbono
	Version: 		1.0
    Template name:  Home
*/

?>

<?php get_header(); ?>

<main class="main">
    <div class="container">
        <div class="flex-grid flex--center-y">                
            <div class="flex-grid__col">
                <?php if( have_rows('home') ): ?>
                    <?php while( have_rows('home') ): the_row(); ?>

                        <?php $content  = get_sub_field('content'); ?>                    
                        <?php $btnLabel = get_sub_field('button_label'); ?>
                        <?php $btnLink  = get_sub_field('button_link'); ?>

                        <div class="home-description font-size-lg">
                            <?php echo $content; ?>
                        </div>    
				
                        <a href="<?php echo $btnLink; ?>" class="btn"><?php echo $btnLabel; ?></a>                        
                        
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="flex-grid__col--full">
                <div class="home-figure"></div>                    
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
