<?php


// Menu /////////////////////////////////////////////////////////
add_action( 'init', 'menu_post_type', 0 );
function menu_post_type() {

    $labels = array(
        'name'                => esc_html__( 'Restaurant Menu', 'Post Type General Name', 'fable' ),
        'singular_name'       => esc_html__( 'Restaurant Menu', 'Post Type Singular Name', 'fable' ),
        'menu_name'           => esc_html__( 'Restaurant Menu', 'fable' ),
        'parent_item_colon'   => esc_html__( 'Parent Menu:', 'fable' ),
        'all_items'           => esc_html__( 'All Restaurant Menus', 'fable' ),
        'view_item'           => esc_html__( 'View Restaurant enu', 'fable' ),
        'add_new_item'        => esc_html__( 'Add New Restaurant Menu', 'fable' ),
        'add_new'             => esc_html__( 'Add New Restaurant Menu', 'fable' ),
        'edit_item'           => esc_html__( 'Edit Restaurant Menu', 'fable' ),
        'update_item'         => esc_html__( 'Update Restaurant Menu', 'fable' ),
        'search_items'        => esc_html__( 'Search Restaurant Menus', 'fable' ),
        'not_found'           => esc_html__( 'No Restaurant Menus found', 'fable' ),
        'not_found_in_trash'  => esc_html__( 'No Restaurant Menus found in Trash', 'fable' ),
    );
    $args = array(
        'label'               => esc_html__( 'menu', 'fable' ),
        'description'         => esc_html__( 'menu information pages', 'fable' ),
        'labels'              => $labels,
        'supports'            => array( 'thumbnail', 'editor', 'title', 'comments','excerpt'),
        'taxonomies'          => array('categories'),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'menu_icon'          => 'dashicons-calendar',
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => null,        
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'restaurant_menu', $args );
}

add_action( 'init', 'create_restaurant_menu_taxonomies', 0 );
// create categories taxonomy
function create_restaurant_menu_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => esc_html__( 'Categories', 'taxonomy general name' , 'fable'),
        'singular_name'     => esc_html__( 'Categories', 'taxonomy singular name' , 'fable'),
        'search_items'      => esc_html__( 'Search Categories', 'fable'),
        'all_items'         => esc_html__( 'All Categories', 'fable' ),
        'parent_item'       => esc_html__( 'Parent Category', 'fable' ),
        'parent_item_colon' => esc_html__( 'Parent Category:' , 'fable'),
        'edit_item'         => esc_html__( 'Edit Category' , 'fable'),
        'update_item'       => esc_html__( 'Update Category' , 'fable'),
        'add_new_item'      => esc_html__( 'Add New Category' , 'fable'),
        'new_item_name'     => esc_html__( 'New Category Name' , 'fable'),
        'menu_name'         => esc_html__( 'Categories' , 'fable'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'restaurant_menu' )        
    );

    register_taxonomy( 'categories', array('restaurant_menu'), $args );
}

