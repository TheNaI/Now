<?php

function Now_setup() {
    add_custom_image_header('header_style', 'admin_header_style');
    register_nav_menu( 'primary', __( 'Navigation Menu', 'Now' ) );
    add_theme_support( 'post-thumbnails' );
    add_post_type_support( 'page', 'excerpt' );
    $labels = array(
        'name'               => _x( 'Ports', 'post type general name' ),
        'singular_name'      => _x( 'Port', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'book' ),
        'add_new_item'       => __( 'Add New Port' ),
        'edit_item'          => __( 'Edit Port' ),
        'new_item'           => __( 'New Port' ),
        'all_items'          => __( 'All Ports' ),
        'view_item'          => __( 'View Port' ),
        'search_items'       => __( 'Search Ports' ),
        'not_found'          => __( 'No Ports found' ),
        'not_found_in_trash' => __( 'No Ports found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Ports'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Ports and Port specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'has_archive'   => true,
    );
    register_post_type( 'Port', $args );
}
add_action( 'after_setup_theme', 'Now_setup' );

?>