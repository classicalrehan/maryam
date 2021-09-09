<?php

if (!defined('ABSPATH')) {
    die();
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

add_action('wp_enqueue_scripts', 'maryam_enqueue_styles');

function maryam_enqueue_styles() {
    wp_enqueue_style('reset-style', get_stylesheet_directory_uri() . '/css/reset.css', false);
    wp_enqueue_style('bootstrap-grid-style', get_stylesheet_directory_uri() . '/css/bootstrap-grid.min.css', false);
    wp_enqueue_style('animations-style', get_stylesheet_directory_uri() . '/css/animations.css', false);
    wp_enqueue_style('perfect-scrollbar.css', get_stylesheet_directory_uri() . '/css/perfect-scrollbar.css', false);
    wp_enqueue_style('owl-carousel-style', get_stylesheet_directory_uri() . '/css/owl.carousel.css', false);
    wp_enqueue_style('magnific-popup-style', get_stylesheet_directory_uri() . '/css/magnific-popup.css', false);
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/css/main.css', false);

    wp_enqueue_script('modernizr-script', get_stylesheet_directory_uri() . '/js/modernizr.custom.js', array('jquery'), true, true);
    wp_enqueue_script('animating-script', get_stylesheet_directory_uri() . '/js/animating.js', array('jquery'), true, true);
    wp_enqueue_script('imagesloaded.pkgd.min-script', get_stylesheet_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), true, true);
    wp_enqueue_script('perfect-scrollbar', get_stylesheet_directory_uri() . '/js/perfect-scrollbar.min.js', array('jquery'), true, true);
    wp_enqueue_script('jquery.shuffle.min-script', get_stylesheet_directory_uri() . '/js/jquery.shuffle.min.js', array('jquery'), true, true);
    wp_enqueue_script('masonry.pkgd.min-script', get_stylesheet_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'), true, true);
    wp_enqueue_script('owl.carousel.min-script', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), true, true);
    wp_enqueue_script('jquery.magnific-popup.min-script', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), true, true);
    wp_enqueue_script('validator-script', get_stylesheet_directory_uri() . '/js/validator.js', array('jquery'), true, true);
    wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), true, true);
}

add_theme_support('post-thumbnails');
add_image_size('single-banner', 720, 330);

add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
add_filter('image_send_to_editor', 'remove_width_attribute', 10);

function remove_width_attribute($html) {
    $html = preg_replace('/(width|height)="\d*"\s/', "", $html);
    return $html;
}

add_action('widgets_init', 'my_register_sidebars');

function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
            array(
                'id' => 'primary',
                'name' => __('Primary Sidebar'),
                'description' => __('A short description of the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

register_nav_menus(array(
    'primary' => 'Primary Menu',
    'header' => 'Header menu',
    'footer' => 'Footer menu'
));
add_action('logo', 'get_logo', 10, 3);

if (!function_exists('get_logo')) {

    function get_logo($class, $id, $alt = "Maryam Mirza") {
        $logo = get_field('logo', 'option');
        if (!empty($logo)) {

            echo '<img src = "' . $logo['url'] . '" class="' . $class . '" id="' . $id . '" alt = "' . $alt . '">';
        }
    }

}

if (function_exists('acf_add_options_page')) {

    $parent = acf_add_options_page(array(
        'page_title' => 'General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'position' => 40,
        'redirect' => false
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'About Us',
        'menu_title' => 'About Us',
        'parent_slug' => $parent['menu_slug']
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Header',
        'menu_title' => 'Header',
        'parent_slug' => $parent['menu_slug']
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Footer',
        'menu_title' => 'Footer',
        'parent_slug' => $parent['menu_slug']
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Social Profiles',
        'menu_title' => 'Social Profiles',
        'parent_slug' => $parent['menu_slug']
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Contact',
        'menu_title' => 'Contact',
        'parent_slug' => $parent['menu_slug']
    ));
}
if (!is_admin()) {

    function wpb_search_filter($query) {
        if ($query->is_search) {
            $query->set('post_type', 'post');
        }
        return $query;
    }

    add_filter('pre_get_posts', 'wpb_search_filter');
}