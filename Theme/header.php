<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <meta name="description" content="Strona na praktyki, odtworzony projekt strony: https://symu.co/freebies/templates-4/tanatos-psd-template/">
    <meta name="author" content="Tymoteusz Dombrowski">
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<script>
    function openMenu() {
        document.getElementById("menu").style.visibility = "visible";
        console.log("openMenu()");
    }
    function closeMenu() {
        document.getElementById("menu").style.visibility = "collapse";
        console.log("closeMenu()");
    }
    function openHire_us() {
        document.getElementById("hire_us").style.visibility = "visible";
        console.log("openHire_us()");
    }
    function closeHire_us() {
        document.getElementById("hire_us").style.visibility = "collapse";
        console.log("closeHire_us()");
   }
</script>
<body <?php body_class(); ?>>
    <div class="container">
        <div id="menu" onclick="closeMenu()">
                <div id="menu_content"">
                    <div id="menu_canncel">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cancel.png" alt="cancel" class="invert" onclick="closeMenu()">
                    </div>
                    <div id="menu_items">
                        <a href="#slider" class="menu_item">HOME</a>
                        <a href="#team" class="menu_item">ABOUT US</a>
                        <a href="#services" class="menu_item">SERVICES</a>
                        <a href="#works" class="menu_item">OUR WORKS</a>
                        <a href="#contact" class="menu_item">CONTACT</a>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/orange_bar.png" alt="bar" id="menu_items_bar">
                        <div id="menu_social_media">
                            <a href="https://facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook_logo.png" alt="facebook_logo"></a>
                            <a href="https://twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter_logo.png" alt="twitter_logo"></a>
                            <a href="mailto:example@gmail.com"><img src="<?php echo get_template_directory_uri(); ?>/img/gmail_logo.png" alt="gmail_logo"></a>
                            <a href="https://dribbble.com"><img src="<?php echo get_template_directory_uri(); ?>/img/dribbble_logo.png" alt="dribble_logo"></a>
                            <a href="https://behance.net"><img src="<?php echo get_template_directory_uri(); ?>/img/behance_logo.png" alt="behance_logo"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hire_us"">
                <div id="hire_us_container"">
                    <div id="hire_us_cancel" onclick="closeHire_us()">X</div>
                    <div id="hire_us_flex">
                        <p id="hire_us_title">HIRE <span class="orange">US</span></p>
                        <p id="hire_us_text">Excepteur sint occaecat cupidatat non proident, sunt in culpa <br>qui officia deserunt mollit anim id est laborum</p>
                        <input type="text" placeholder="Your Email" id="hire_us_email">
                        <input type="text " placeholder="Subject" id="hire_us_subject">
                        <textarea placeholder="Your Message" id="hire_us_message"></textarea>
                        <input type="submit" id="hire_us_button" value="SEND MESSAGE">
                    </div>
                </div>
            </div>
            <header>
                <p id="header_title">
                    Tanatos<b><span class="orange">Studio</span></b>
                </p>
                <p id="header_menu" onclick="openMenu()">
                    Menu &nbsp;&nbsp;
                    <img class="invert" src="<?php echo get_template_directory_uri(); ?>/img/hamburger.png" alt="hamburger">
                </p>
            </header>