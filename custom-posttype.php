<?php
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Sessions', 'Post Type General Name', 'twentytwenty' ),
        'singular_name'       => _x( 'Sessions', 'Post Type Singular Name', 'twentytwenty' ),
        'menu_name'           => __( 'Sessions', 'twentytwenty' ),
        'parent_item_colon'   => __( 'Parent Sessions', 'twentytwenty' ),
        'all_items'           => __( 'Session Lists', 'twentytwenty' ),
        'view_item'           => __( 'View Sessions', 'twentytwenty' ),
        'add_new_item'        => __( 'Create New Sessions', 'twentytwenty' ),
        'add_new'             => __( 'Create New', 'twentytwenty' ),
        'edit_item'           => __( 'Edit Sessions', 'twentytwenty' ),
        'update_item'         => __( 'Update Sessions', 'twentytwenty' ),
        'search_items'        => __( 'Search Sessions', 'twentytwenty' ),
        'not_found'           => __( 'Not Found', 'twentytwenty' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'sessions', 'twentytwenty' ),
        'description'         => __( 'Sessions news and reviews', 'twentytwenty' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail','author' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
        'menu_icon'   => 'dashicons-calendar-alt',
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'sessions', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );

?>