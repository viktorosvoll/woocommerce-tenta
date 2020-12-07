<?php


function load_stylesheets(){
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all'); // file, dependencies, version, devices
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all'); // file, dependencies, version, devices
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets'); 

function load_javascript(){
    wp_register_script('custom', get_template_directory_uri() . '/app.js', '', 1, true); // file, dependencies, version, devices
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');

//Add menus
add_theme_support('menus');
add_theme_support('post-thumbnails');
register_nav_menus(
    array(
        'top-menu' => 'Top Menu', 
    )
);


// Add sidebar
register_sidebar(
    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    )
);

// Add sidebar
register_sidebar(
    array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    )
);

//Image size
add_image_size('post_image', 1100, 550, false);

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );