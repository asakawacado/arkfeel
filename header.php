<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<?php wp_body_open(); ?>

<div id="loader-wrapper">
    <div id="loader-progress">
        <span id="loader-counter">0%</span>
    </div>
</div>

<header class="site-sidebar">
    <div class="sidebar-container">
        <div class="sidebar-branding">
        </div>
        <nav class="main-navigation">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                ));
            ?>
        </nav>
        <div class="sidebar-functions">
        </div>
    </div>
</header>

<main class="site-content">