<?php  

if ( !defined('ABSPATH')) exit;

/*
	Theme Name:		Floralia
	File theme:		page.php
	File source:    wp-content/themes/catorce/page.php
	Author: 		Diego Delbono
	Version: 		1.0
    Template name:  Policies
*/
 
?>

<?php get_header(); ?>

<main class="main">
    <div class="main__content container">
        <div class="g-row">
            <div class="g-row__col">
                <h2>Refund policies</h2>
            </div>
            <div class="g-row__col">
                <?php if( have_rows('polices') ): ?>
                    <div class="accordion">
                        <?php while( have_rows('polices') ): the_row(); ?>
                            <div class="accordion__item">
                                <div class="accordion__header">
                                    <p><?php the_sub_field('polices_title'); ?></p>
                                </div>
                                <div class="accordion__content">
                                    <?php the_sub_field('polices_description'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="separator"></div>
        <div class="g-row">
            <div class="g-row__col">
                <h2>Terms of service</h2>
            </div>
            <div class="g-row__col">
                <?php if( have_rows('terms') ): ?>
                    <div class="accordion">
                        <?php while( have_rows('terms') ): the_row(); ?>
                            <div class="accordion__item">
                                <div class="accordion__header">
                                    <p><?php the_sub_field('terms_title'); ?></p>
                                </div>
                                <div class="accordion__content">
                                    <?php the_sub_field('terms_description'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

