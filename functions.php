<?php

// 资源文件注册
function arkfeel_enqueue_assets() {

    /**
     * CSS 注册
     */

    // 主样式表
    wp_enqueue_style(
        'arkfeel-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // 加载动画样式表
    wp_enqueue_style(
        'arkfeel-loader-style',
        get_template_directory_uri() . '/assets/css/loader.css',
        array(),
        '1.0.0',
    );

    /**
     * JS 注册
     */

    // 加载动画脚本
    wp_enqueue_script(
        'arkfeel-loader-script',
        get_template_directory_uri() . '/assets/js/loader.js',
        array(),
        '1.0.0',
        true
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