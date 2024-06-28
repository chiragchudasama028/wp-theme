<?php
/**
 * Woostify Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Woostify Child Theme
 * @since 1.0.0
 */

 function woostify_child_enqueue_scripts() {
    // Get the last modified time of the file
    $bootstrap_css_ver = filemtime(get_stylesheet_directory() . '/assets/css/bootstrap.min.css');
    $style_css_ver = filemtime(get_stylesheet_directory() . '/assets/css/style.css');
    $bootstrap_js_ver = filemtime(get_stylesheet_directory() . '/assets/js/bootstrap.bundle.min.js');
    $gsap_ver = filemtime(get_stylesheet_directory() . '/assets/js/gsap.min.js');
    $swiper_css_ver = filemtime(get_stylesheet_directory() . '/assets/css/swiper-bundle.min.css');
    $swiper_js_ver = filemtime(get_stylesheet_directory() . '/assets/js/swiper-bundle.min.js');
    $custom_js_ver = filemtime(get_stylesheet_directory() . '/assets/js/custom.js');

    // Enqueue Bootstrap 5 CSS
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), $bootstrap_css_ver);

    // Enqueue custom style.css
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), $style_css_ver);

    // Enqueue Bootstrap 5 JS
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), $bootstrap_js_ver, true);

    // Enqueue GSAP
    wp_enqueue_script('gsap', get_stylesheet_directory_uri() . '/assets/js/gsap.min.js', array(), $gsap_ver, true);

    // Enqueue Swiper CSS
    wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), $swiper_css_ver);

    // Enqueue Swiper JS
    wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), $swiper_js_ver, true);
}
add_action('wp_enqueue_scripts', 'woostify_child_enqueue_scripts');

function woostify_child_enqueue_custom_scripts() {
    $custom_js_ver = filemtime(get_stylesheet_directory() . '/assets/js/custom.js');
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery', 'gsap', 'swiper-js'), $custom_js_ver, true);
}
add_action('wp_enqueue_scripts', 'woostify_child_enqueue_custom_scripts');
