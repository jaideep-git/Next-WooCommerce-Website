<?php
/**
 * Custom post types for this theme
 *
 * @package NextTheme
 */

function wpdocs_kantbtrue_init() {
    $labels = array(
        'name'                  => _x( 'Offers', 'Post type general name', 'offer'),
        'singular_name'         => _x( 'Offer', 'Post type singular name', 'offer'),
        'menu_name'             => _x( 'Offers', 'Admin Menu text', 'offer'),
        'name_admin_bar'        => _x( 'offer', 'Add New on Toolbar', 'offer'),
        'add_new'               => __( 'Add New', 'offer'),
        'add_new_item'          => __( 'Add New offer', 'offer'),
        'new_item'              => __( 'New offer', 'offer'),
        'edit_item'             => __( 'Edit offer', 'offer'),
        'view_item'             => __( 'View offer', 'offer'),
        'all_items'             => __( 'All offers', 'offer'),
        'search_items'          => __( 'Search offers', 'offer'),
        'parent_item_colon'     => __( 'Parent offers:', 'offer'),
        'not_found'             => __( 'No offers found.', 'offer'),
        'not_found_in_trash'    => __( 'No offers found in Trash.', 'offer'),
        'featured_image'        => _x( 'Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'offer'),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'offer'),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'offer'),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'offer'),
        'insert_into_item'      => _x( 'Insert into offer', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'offer'),
        'uploaded_to_this_item' => _x( 'Uploaded to this offer', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'offer'),
        'filter_items_list'     => _x( 'Filter offers list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'offer'),
        'items_list_navigation' => _x( 'Offers list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'offer'),
        'items_list'            => _x( 'Offers list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'offer'),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => '',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'offer' ),
        'capability_type'    => 'post',
        'has_archive'        => 'offers',
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );

    register_post_type( 'next_offer', $args );
}
add_action( 'init', 'wpdocs_kantbtrue_init' );