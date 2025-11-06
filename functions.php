<?php

// 样式文件注册
function arkfeel_enqueue_assets() {
    wp_enqueue_style(
        'arkfeel-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'arkfeel_enqueue_assets');

// 注册导航栏菜单
function arkfeel_theme_setup() {
    register_nav_menus( array(
        'primary' => __('Primary Menu', 'arkfeel'),
    ));
}
add_action('after_setup_theme', 'arkfeel_theme_setup');