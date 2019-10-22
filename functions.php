<?php

function addCustomThemeFiles_1902(){

    wp_enqueue_style('bootstrapCSS1902', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('customCSS1902', get_template_directory_uri() . '/assets/css/style.css', array(), '0.0.2', 'all');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapJS1902', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_script('customJS1902', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '0.0.1', true);
};

add_action('wp_enqueue_scripts', 'addCustomThemeFiles_1902');


add_theme_support('post-thumbnails');

add_image_size('icon', 50, 50, true);

function addCustomMenus_1902(){
    add_theme_support('menus');
    // register_nav_menu('top_navigation', 'This is the navigation which is located at the top of each page.);
    register_nav_menu('top_navigation', __('The Top navigation is the navigation located at the top of each page.', '1902Custom'));
    register_nav_menu('side_navigation', __('The Side navigation is the navigation located at the side of each page', '1902Custom'));
    register_nav_menu('bottom_navigation', __('The Bottom navigation is the navigation located at the bottom of each page', '1902Custom'));
}

add_action('after_setup_theme', 'addCustomMenus_1902');

function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );
