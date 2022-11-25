<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || false === wc_get_loop_product_visibility( $product->get_id() ) || ! $product->is_visible() ) {
	return;
}
?>

<?php $price = $product->get_price(); ?>

<li <?php wc_product_class( '', $product ); ?>>
    <article class="article">
        <a class="article__thumb" href="<?php the_permalink(); ?>">
            
            <?php if( have_rows('gallery') ): ?>
                <?php while( have_rows('gallery') ): the_row(); ?>
            
                    <?php $mainImage        = get_sub_field('main_image'); ?>                    
                    <?php $secondaryImage   = get_sub_field('secondary_image'); ?>                    
                
                    <div class="thumb thumb--show">
                        <figure class="figure">
                            <img src="<?php echo $mainImage['url']; ?>">
                        </figure>    
                    </div>

                    <div class="thumb thumb--hover">
                        <figure class="figure">
                            <img src="<?php echo $secondaryImage['url']; ?>">
                        </figure> 
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </a>

        <div class="article__caption">

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>    
            
            <?php if( have_rows('specs') ): ?>
                <?php while( have_rows('specs') ): the_row(); ?>                    
                    <?php $detail = get_sub_field('detail'); ?>  
                    <p class="text--tertiary"><?php echo $detail; ?></p>
                <?php endwhile; ?>
            <?php endif; ?>            

            <p class="price text--tertiary">USD <?php echo $price; ?></p>

        </div>

    </article>
</li>
