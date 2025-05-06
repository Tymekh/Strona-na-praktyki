<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="side"></div>
    <div class="container">
        <header>
            <p id="header_title">
                Tanatos<b><span class="orange">Studio</span></b>
            </p>
            <p id="header_menu">
                Menu &nbsp;&nbsp;
                <img class="invert" src="<?php echo get_template_directory_uri(); ?>//img/hamburger.png" alt="hamburger">
            </p>
        </header>