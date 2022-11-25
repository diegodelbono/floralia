<?php  

if ( !defined('ABSPATH')) exit;

/*
	Theme Name:		Floralia
	File theme:		functions.php
	File source:    wp-content/themes/catorce/functions.php
	Author: 		Diego Delbono
	Version: 		1.0
*/


/*	remove action
	------------------------------------------- */
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

/*	Favicon
	------------------------------------------- */
	function blog_favicon() {
		echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
	}
	
	add_action('wp_head', 'blog_favicon');
 
/*	Nav
	------------------------------------------- */
	register_nav_menus(array(
		'header-menu'   => __('Header Menu', 'template'),
        'shop-menu'   => __('Shop Menu', 'template'),
	));

/*	Widget
	------------------------------------------- */
	function widgets_init() {
		// Widget
		register_sidebar(array(
			'name' => __('Sidebar', 'Catorce'),
			'before_widget' => '<div class="video__content">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
			'id' => 'sidebar'
		));
	}

	add_action('widgets_init', 'widgets_init');


/*	Thumbnails
	------------------------------------------- */
	add_theme_support('post-thumbnails');
    add_image_size('blog-medium', 580, 430, true);
    add_image_size('blog-big', 1300, 750, true);

/*	Remove Styles
------------------------------------------- */
    add_action('wp_enqueue_scripts', 'remove_styles', 100);
    function remove_styles() {
        wp_dequeue_style( 'selectWoo' );
        wp_dequeue_style( 'woocommerce_frontend_styles' );
        wp_dequeue_style( 'woocommerce-general');
        wp_dequeue_style( 'woocommerce-layout' );
        wp_dequeue_style( 'woocommerce-smallscreen' );
        wp_dequeue_style( 'woocommerce_fancybox_styles' );
        wp_dequeue_style( 'woocommerce_chosen_styles' );
        wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
        wp_dequeue_style( 'woocommerce-inline' );
        wp_dequeue_style( 'select2' );
    }

/*	Remove Inputs
	------------------------------------------- */
    add_filter( 'woocommerce_checkout_fields' , 'remove_inputs' );
    function remove_inputs( $fields ) {
        //unset($fields['billing']['billing_postcode']);
        //unset($fields['billing']['billing_city']);
        unset($fields['billing']['billing_company']);
        
        //unset($fields['billing']['billing_address']);
        unset($fields['billing']['billing_address_2']);
        //unset($fields['billing']['billing_state']);
        //unset($fields['billing']['billing_address_1']);
        return $fields;
    }

/*	Woocommerce - Text
	------------------------------------------- */
    add_filter( 'gettext', function( $translated_text ) {
        if ( 'View cart' === $translated_text ) {
            $translated_text = 'View bag';
        }
        if ( 'Add to cart' === $translated_text ) {
            $translated_text = 'Add to bag';
        }
		if ( 'Update cart' === $translated_text ) {
            $translated_text = 'Update bag';
        }
        return $translated_text;
    } );

/*	Thank you text
	------------------------------------------- */
	add_filter( 'woocommerce_thankyou_order_received_text', 'avia_thank_you' );
	function avia_thank_you() {
		 $added_text = '<p>Thank you for purchasing at Floralia. Your order has been successfully received.</p><p>You will receive an email from Floralia shortly with your purchase details and an estimated delivery date.</p>';
		 return $added_text ;
	}
    


/*	Plus minus buttons
	------------------------------------------- */
	add_action( 'woocommerce_after_quantity_input_field', 'bbloomer_display_quantity_plus' );
	
	function bbloomer_display_quantity_plus() {
		echo '<button type="button" class="plus">+</button>';
	}
	
	add_action( 'woocommerce_before_quantity_input_field', 'bbloomer_display_quantity_minus' );
	
	function bbloomer_display_quantity_minus() {
		echo '<button type="button" class="minus">-</button>';
	}  

	add_action( 'wp_footer', 'bbloomer_add_cart_quantity_plus_minus' );
	
	function bbloomer_add_cart_quantity_plus_minus() {
	
	if ( ! is_product() && ! is_cart() ) return;
		
	wc_enqueue_js( "   
			
		$(document).on( 'click', 'button.plus, button.minus', function() {
	
			var qty = $( this ).parent( '.quantity' ).find( '.qty' );
			var val = parseFloat(qty.val());
			var max = parseFloat(qty.attr( 'max' ));
			var min = parseFloat(qty.attr( 'min' ));
			var step = parseFloat(qty.attr( 'step' ));
	
			if ( $( this ).is( '.plus' ) ) {
				if ( max && ( max <= val ) ) {
				qty.val( max ).change();
				} else {
				qty.val( val + step ).change();
				}
			} else {
				if ( min && ( min >= val ) ) {
				qty.val( min ).change();
				} else if ( val > 1 ) {
				qty.val( val - step ).change();
				}
			}
	
		});
			
	" );
	}