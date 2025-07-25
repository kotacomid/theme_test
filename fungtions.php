<?php
/**
 * Temoakte Child Theme Functions
 * Optimized to load only app.css and app.js
 */

// Muat aset utama (app.css dan app.js)
function temoakte_enqueue_primary_assets() {
    // 1. Muat style dari tema induk (Blocksy) sebagai dasar
    wp_enqueue_style(
        'blocksy-parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // 2. Muat app.css Anda
    // Pastikan file ini ada di: /assets/css/app.css
    $app_css_path = get_stylesheet_directory() . '/assets/css/app.css';
    if (file_exists($app_css_path)) {
        wp_enqueue_style(
            'temoakte-app-styles',
            get_stylesheet_directory_uri() . '/assets/css/app.css',
            ['blocksy-parent-style'],
            filemtime($app_css_path)
        );
    }

    // 3. Muat app.js Anda
    // Pastikan file ini ada di: /assets/js/app.js
    $app_js_path = get_stylesheet_directory() . '/assets/js/app.js';
    if (file_exists($app_js_path)) {
        wp_enqueue_script(
            'temoakte-app-scripts',
            get_stylesheet_directory_uri() . '/assets/js/app.js',
            array(),
            filemtime($app_js_path),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'temoakte_enqueue_primary_assets');

// Menambahkan dukungan dasar tema
function temoakte_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

    register_nav_menus(array(
        'primary' => 'Primary Navigation',
        'footer'  => 'Footer Links',
    ));
}
add_action('after_setup_theme', 'temoakte_theme_setup');
