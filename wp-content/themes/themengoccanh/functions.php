<?php
/**
* @ Thiết lập các hằng dữ liệu quan trọng
* @ THEME_URL = get_stylesheet_directory() - đường dẫn tới thư mục theme
* @ CORE = thư mục /core của theme, chứa các file nguồn quan trọng.
**/
define( 'THEME_URL', get_stylesheet_directory() );
define( 'CORE', THEME_URL . '/core' );
require_once( CORE . '/init.php' ); // import file init.php
if (isset($content_width)) { // setup width if not exist
    $content_width = 600;
}
if (function_exists('themeSetup')) {
    function themeSetup() {
        $languageFolder = THEME_URL . "/language";
        load_theme_textdomain('demo_wordpress', $languageFolder); // setup text domain
        add_theme_support('automatic-feed-links'); // insert RSS feed
        add_theme_support('post-thumbnails'); // add post-thumnail
        add_theme_support('title-tag'); // auto add title
        add_theme_support('post-formats',
            array(
               'image',
               'video',
               'gallery',
               'quote',
               'link'
            )
        );
        $default_background = array(
           'default-color' => '#e8e8e8',
        );
        add_theme_support('custom-background', $default_background);
        // create for theme
        register_nav_menu ('primary-menu', __('Primary Menu', 'demo_wordpress'));
        // create slider bả
        $sidebar = array(
                        'name' => __('Main Sidebar', 'thachpham'),
                        'id' => 'main-sidebar',
                        'description' => 'Main sidebar for Thachpham theme',
                        'class' => 'main-sidebar',
                        'before_title' => '<h3 class="widgettitle">',
                        'after_title' => '</h3>'
        );
        register_sidebar( $sidebar );
    } 
    add_action('init', 'themeSetup');
}
