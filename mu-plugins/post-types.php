<?php 
function post_types () {

    // Blog
    register_post_type('our-blog', [
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'supports' => ['title', 'editor', 'custom-fields'],
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => [
            'name' => 'Blog',
            'add_new_item' => 'Add New Blog',
            'edit_item' => 'Edit Blog',
            'all_items' => 'All Blogs'
        ],
        'menu_icon' => 'dashicons-welcome-write-blog'
    ]);
    
}
add_action('init', 'post_types');