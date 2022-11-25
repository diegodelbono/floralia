<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<?php 
	$price = $product->get_price();
	$attachment_ids = $product->get_gallery_image_ids();
?>

<?php if( have_rows('specs') ): ?>
	<?php while( have_rows('specs') ): the_row(); ?>
		<?php $detail = get_sub_field('detail'); ?>  
		<?php $description = get_sub_field('description'); ?>  
		<?php $moreInfo = get_sub_field('more_info'); ?>  
	<?php endwhile; ?>
<?php endif; ?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<div class="product-single">                

		<div class="product-single__detail">

			<div class="product-single__detail--header">			
				<h1><?php the_title(); ?></h1>
				<p class="font-size-lg"><?php echo $detail; ?></p>
				<p class="font-size-lg">USD <?php echo $price; ?></p>
			</div>

			<div class="product-single__detail--content">
				<?php echo $description; ?>
				<div class="text--tertiary"><?php echo $moreInfo; ?></div>
			</div>	

			<div class="product-single__detail--footer">
				<div class="summary entry-summary">
					<?php do_action( 'woocommerce_single_product_summary' ); ?>
				</div>
			</div>

		</div>

		<div class="product-single__gallery">
			<?php do_action('woocommerce_before_single_product_summary' ); ?>
			<!--<div class="owl-carousel owl-theme owl--single">
				<?php
					foreach( $attachment_ids as $attachment_id ){
						echo "<figure class='figure'>" .  wp_get_attachment_image($attachment_id, 'full') . "</figure>";
					}
				?>
			</div>-->
		</div>	
	</div>	
	<!--< ?php do_action('woocommerce_before_single_product_summary' ); ?>
	< ?php do_action( 'woocommerce_after_single_product_summary' ); ?>
	< ?php do_action( 'woocommerce_after_single_product' ); ?>-->

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	//do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
