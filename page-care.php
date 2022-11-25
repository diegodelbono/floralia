<?php  

if ( !defined('ABSPATH')) exit;

/*
	Theme Name:		Floralia
	File theme:		page.php
	File source:    wp-content/themes/catorce/page.php
	Author: 		Diego Delbono
	Version: 		1.0
    Template name:  Care
*/
 
?>

<?php get_header(); ?>


<main class="main">
    <div class="main__content container">
        <div class="row">

            <?php if( have_rows('care') ): ?>                
                <?php while( have_rows('care') ): the_row(); ?>

                    <div class="accordion-item">
                        <div class="flex-grid">
                    
                            <?php $title = get_sub_field('title'); ?>

                            <div class="flex-grid__col">
                                <div class="font-size-lg">
                                    <?php echo $title; ?>
                                </div>
                            </div>

                            <div class="flex-grid__col--full">
                                <div class="accordion">

                                    <?php if( have_rows('type') ): ?>
                                        <?php while( have_rows('type') ): the_row(); ?>

                                            <?php $title    = get_sub_field('title'); ?>                    
                                            <?php $content  = get_sub_field('content'); ?>

                                            <div class="accordion__item">
                                                <div class="accordion__header">
                                                    <div class="font-size-lg">
                                                        <?php echo $title; ?>
                                                    </div>
                                                </div>
                                                <div class="accordion__content">
                                                    <?php echo $content; ?>
                                                </div>
                                            </div>
                                            
                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </div>
                            </div>

                        </div>
                    </div>                


                <?php endwhile; ?>
            <?php endif; ?>           

        </div>
    </div>
</main>

<?php get_footer(); ?>
