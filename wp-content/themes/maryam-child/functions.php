<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

add_action('wp_enqueue_scripts', 'maryam_enqueue_styles');

function maryam_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style($parenthandle, get_template_directory_uri() . '/style.css', array(), // if the parent theme code has a dependency, copy it to here
            $theme->parent()->get('Version')
    );
    wp_enqueue_style('child-style', get_stylesheet_uri(), array($parenthandle), $theme->get('Version'));
    wp_enqueue_style('reset-style', get_stylesheet_directory_uri(). '/css/reset.css', $theme->get('Version'));
    wp_enqueue_style('bootstrap-grid-style', get_stylesheet_directory_uri(). '/css/bootstrap-grid.min.css', $theme->get('Version'));
    wp_enqueue_style('animations-style', get_stylesheet_directory_uri(). '/css/animations.css', $theme->get('Version'));
    wp_enqueue_style('owl-carousel-style', get_stylesheet_directory_uri(). '/css/owl.carousel.css', $theme->get('Version'));
    wp_enqueue_style('magnific-popup-style', get_stylesheet_directory_uri(). '/css/magnific-popup.css', $theme->get('Version'));
    wp_enqueue_style('main-style', get_stylesheet_directory_uri(). '/css/main.css', $theme->get('Version'));
    
    wp_enqueue_script('modernizr-script', get_stylesheet_directory_uri() . '/js/modernizr.custom.js', array( 'jquery' ),true,true);
    wp_enqueue_script('animating-script', get_stylesheet_directory_uri() . '/js/animating.js', array( 'jquery' ),true,true);
    wp_enqueue_script('imagesloaded.pkgd.min-script', get_stylesheet_directory_uri() . '/js/imagesloaded.pkgd.min.js', array( 'jquery' ),true,true);
    wp_enqueue_script('jquery.shuffle.min-script', get_stylesheet_directory_uri() . '/js/jquery.shuffle.min.js', array( 'jquery' ),true,true);
    wp_enqueue_script('masonry.pkgd.min-script', get_stylesheet_directory_uri() . '/js/masonry.pkgd.min.js', array( 'jquery' ),true,true);
    wp_enqueue_script('owl.carousel.min-script', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ),true,true);
    wp_enqueue_script('jquery.magnific-popup.min-script', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.min.js', array( 'jquery' ),true,true);
    wp_enqueue_script('validator-script', get_stylesheet_directory_uri() . '/js/validator.js', array( 'jquery' ),true,true);
    wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ),true,true);   
}
