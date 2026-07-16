<?php
/**
 * Om Shree Sai Electricals & Electronics functions and definitions
 * 
 * Set up assets safely without dependencies on e-commerce engine libraries.
 */

function om_shree_sai_assets_init() {
    // Register Google Fonts
    wp_enqueue_style( 'om-shree-sai-fonts', 'https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;0,700;0,900;1,400&family=Barlow+Condensed:wght@600;700;900&display=swap', array(), null );

    // Enqueue Primary Non-Cart Stylesheet
    wp_enqueue_style( 'om-shree-sai-style', get_stylesheet_uri(), array('om-shree-sai-fonts'), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'om_shree_sai_assets_init' );

// Clean out unnecessary standard structural wrappers if any
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );