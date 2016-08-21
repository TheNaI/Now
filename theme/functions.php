<?php
require get_template_directory() . '/inc/custom-header.php';

function Now_setup() {

    add_custom_image_header('header_style', 'admin_header_style');
    register_nav_menu( 'primary', __( 'Navigation Menu', 'Now' ) );
    add_theme_support( 'post-thumbnails' );

}
add_action( 'after_setup_theme', 'Now_setup' );

?>