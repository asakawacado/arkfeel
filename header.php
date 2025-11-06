<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="site-branding">
    </div>
    <nav class="main-navigation">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
            ));
        ?>
    </nav>
</header>

<main class="site-content">