<?php
/**
 * Register a Projects post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
add_action( 'init', 'aura_projects_init' );
/**
 *
 */
function aura_projects_init() {
    $labels = array(
        'name'               => _x( 'Projects', 'post type general name', 'aura-projects' ),
        'singular_name'      => _x( 'Project', 'post type singular name', 'aura-projects' ),
        'menu_name'          => _x( 'Projects', 'admin menu', 'aura-projects' ),
        'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'aura-projects' ),
        'add_new'            => _x( 'Add New', 'projects', 'aura-projects' ),
        'add_new_item'       => __( 'Add New Project', 'aura-projects' ),
        'new_item'           => __( 'New Project', 'aura-projects' ),
        'edit_item'          => __( 'Edit Project', 'aura-projects' ),
        'view_item'          => __( 'View Project', 'aura-projects' ),
        'all_items'          => __( 'All Projects', 'aura-projects' ),
        'search_items'       => __( 'Search Projects', 'aura-projects' ),
        'parent_item_colon'  => __( 'Parent Projects:', 'aura-projects' ),
        'not_found'          => __( 'No Projects found.', 'aura-projects' ),
        'not_found_in_trash' => __( 'No Projects found in Trash.', 'aura-projects' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'aura-projects' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        //'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail')
    );

    register_post_type( 'projects', $args );
}

