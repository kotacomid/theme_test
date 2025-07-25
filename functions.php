<?php
/**
 * Theme Name: Temoakte Flowbite
 * Description: Integrasi penuh WordPress dengan Flowbite dan Tailwind CSS.
 * Author: Temoakte
 * Template: blocksy
 * Version: 3.0.0
 */

// 1. Memuat Aset Utama (CSS & JS)
add_action('wp_enqueue_scripts', function() {
    // Memuat style dari tema induk (Blocksy)
    wp_enqueue_style(
        'blocksy-parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Memuat app.css (berisi Tailwind & Flowbite)
    $app_css_path = get_stylesheet_directory() . '/assets/css/app.css';
    if (file_exists($app_css_path)) {
        wp_enqueue_style(
            'temoakte-app-styles',
            get_stylesheet_directory_uri() . '/assets/css/app.css',
            ['blocksy-parent-style'],
            filemtime($app_css_path)
        );
    }

    // Memuat app.js (berisi logika Flowbite)
    $app_js_path = get_stylesheet_directory() . '/assets/js/app.js';
    if (file_exists($app_js_path)) {
        wp_enqueue_script(
            'temoakte-app-scripts',
            get_stylesheet_directory_uri() . '/assets/js/app.js',
            [],
            filemtime($app_js_path),
            true
        );
    }
});

// 2. Setup Fitur Dasar Tema
add_action('after_setup_theme', function() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', [
        'height'      => 40,
        'width'       => 40,
        'flex-width'  => true,
        'flex-height' => true,
    ]);

    // Daftarkan lokasi menu
    register_nav_menus([
        'primary' => 'Primary Menu (Desktop)',
        'mobile'  => 'Mobile Menu (Drawer)',
        'footer'  => 'Footer Links',
    ]);
});

// 3. Custom Walker untuk Menu Navigasi (Styling Flowbite/Tailwind)
class Temoakte_Nav_Walker extends Walker_Nav_Menu {
    // Walker untuk menu desktop
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = in_array('current-menu-item', $item->classes)
            ? 'block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white'
            : 'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent';

        $output .= '<li>';
        $output .= '<a href="' . esc_url($item->url) . '" class="' . $classes . '">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '</li>';
    }
}
