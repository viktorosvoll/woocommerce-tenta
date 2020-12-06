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

register_nav_menus(
    array(
        'top' => 'Main Menu', 
    )
);
