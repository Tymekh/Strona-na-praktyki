<?php get_header(); ?>
<!-- -----------------------------------------MAIN----------------------------------------- -->
<main>
    <!-- -----------------------------------------SLIDER----------------------------------------- -->
    <div id="slider">
        <div id="slider_title">
            <p id="slider_text"><b>WE DESIGN <span class="orange">THINGS</span></b></p>
            <p id="slider_subtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod tempor incidunt ut labore et dolore magna aliqua</p>
            <div id="button_container">
                <button class="slider_button" onclick="openHire_us()">HIRE US</button>
                <button class="slider_button">OUR WORKS</button>
            </div>
            <img id="slider_button_more" class="invert" src="<?php echo get_template_directory_uri(); ?>/img/circle_bottom.png" alt="button">
        </div>
    </div>
    <!-- -----------------------------------------SERVICES----------------------------------------- -->
    <div id="services">
        <div id="services_flex_container">
            <div class="service">
                <div class="service_logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/printer_logo.png" alt="printer logo">
                </div>
                <div class="service_text">
                    <div class="service_text_title">
                        PRINT DESIGN
                    </div>
                    <div class="service_text_text">
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="service_logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/web_design_logo.png" alt="printer logo">
                </div>
                <div class="service_text">
                    <div class="service_text_title">
                        WEB DESIGN
                    </div>
                    <div class="service_text_text">
                        Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="service_logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/app_logo.png" alt="printer logo">
                </div>
                <div class="service_text">
                    <div class="service_text_title">
                        APP DESIGN
                    </div>
                    <div class="service_text_text">
                        Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="service_logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/design_logo.png" alt="printer logo">
                </div>
                <div class="service_text">
                    <div class="service_text_title">
                        LOGO DESIGN
                    </div>
                    <div class="service_text_text">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!-- -----------------------------------------NEWSLETER----------------------------------------- -->
    <div id="newsletter">
        <div id="newsletter_container">
            <input type="text" placeholder="Enter Your email adress for newsletter" id="newsletter_input">
            <input type="button" value="SUBSCRIBE" id="newsletter_button">
        </div>
    </div>
    <!-- -----------------------------------------WORKS----------------------------------------- -->
    <div id="works">
        <div id="works_title">
            <div id="works_title_title">
                OUR <span class="orange">WORKS</span>
            </div>
            <div id="works_title_text">
                Ut enim ad minim veniam, Quis nostrud exercitation ullamco<br> laboris nisi ut aliquip ex ea commodo consequat
            </div>

        </div>
        <div id="works_container">
            <div class="work">
                <div class="work_item_container">
                    <p class="work_item_title">ABAZOO WEBSITE</p>
                    <p class="work_item_text">Quis nostrud exercitation ullamco<br> laboris nisi ut aliquip ex ea commodo</p>
                    <button class="work_item_button">SHOW PROJECT</button>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/our_works1.png" alt="work1">
            </div>
            <div class="work">
                <div class="work_item_container">
                    <p class="work_item_title">ABAZOO WEBSITE</p>
                    <p class="work_item_text">Quis nostrud exercitation ullamco<br> laboris nisi ut aliquip ex ea commodo</p>
                    <button class="work_item_button">SHOW PROJECT</button>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/our_works2.png" alt="work2">
            </div>
            <div class="work">
                <div class="work_item_container">
                    <p class="work_item_title">ABAZOO WEBSITE</p>
                    <p class="work_item_text">Quis nostrud exercitation ullamco<br> laboris nisi ut aliquip ex ea commodo</p>
                    <button class="work_item_button">SHOW PROJECT</button>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/our_works3.png" alt="work3">
            </div>
            <div class="work">
                <div class="work_item_container">
                    <p class="work_item_title">ABAZOO WEBSITE</p>
                    <p class="work_item_text">Quis nostrud exercitation ullamco<br> laboris nisi ut aliquip ex ea commodo</p>
                    <button class="work_item_button">SHOW PROJECT</button>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/our_works4.png" alt="work4">
            </div>
            <div class="work">
                <div class="work_item_container">
                    <p class="work_item_title">ABAZOO WEBSITE</p>
                    <p class="work_item_text">Quis nostrud exercitation ullamco<br> laboris nisi ut aliquip ex ea commodo</p>
                    <button class="work_item_button">SHOW PROJECT</button>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/our_works5.png" alt="work5">
            </div>
            <div class="work">
                <div class="work_item_container">
                    <p class="work_item_title">ABAZOO WEBSITE</p>
                    <p class="work_item_text">Quis nostrud exercitation ullamco<br> laboris nisi ut aliquip ex ea commodo</p>
                    <button class="work_item_button">SHOW PROJECT</button>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/our_works6.png" alt="work6">
            </div>
        </div>
        <button id="works_button">SHOW MORE</button>
    </div>
    <!-- -----------------------------------------CLIENT----------------------------------------- -->
    <div id="client">
        <div id="client_container"> 
            <div id="client_left_arrow">
                <img src="<?php echo get_template_directory_uri(); ?>/img/left_arrow.png" alt="left arrow" class="arrow">
            </div>
            <div id="client_text_container">
                <div id="client_image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/avatar_client.png" alt="client1">
                </div>
                <p id="client_text"><i>These guys are incredible! I get my project in 10 days and it was awesome!<br>Very good service! Highly recommended!</i></p>
                <p id="client_name">John Smith</p>
            </div>
            <div id="client_right_arrow">
                <img src="<?php echo get_template_directory_uri(); ?>/img/right_arrow.png" alt="right arrow" class="arrow">  
            </div>
        </div>
    </div>
    <!-- -----------------------------------------TEAM----------------------------------------- -->
    <div id="team">
        <div id="team_title">
            <p id="team_title_title">OUR <span class="orange">TEAM</span></p>
            <p id="team_title_text">Sed ut perspiciatis unde omnis iste natus error sit<br>
                voluptatem accusantium doloremque laudantium totam rem</p>
        </div>
        <div id="team_container">
            <div class="team_member">
                <div>
                    <img class="team_member_photo" src="<?php echo get_template_directory_uri(); ?>/img/photo1.png" alt="team member">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/orange_bar.png" alt="orange bar" class="orange_bar">
                </div> 
                <p class="team_member_name">CATHERINA GAIL</p>
                <div class="team_member_social_media">
                    <a href="https://facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook_logo.png" alt="facebook_logo"></a>
                    <a href="https://twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter_logo.png" alt="twitter_logo"></a>
                    <a href="mailto:example@gmail.com"><img src="<?php echo get_template_directory_uri(); ?>/img/gmail_logo.png" alt="gmail_logo"></a>
                </div>
                <p class="team_member_text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>        
            </div>

            <div class="team_member">
                <div>
                    <img class="team_member_photo" src="<?php echo get_template_directory_uri(); ?>/img/photo2.png" alt="team member">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/orange_bar.png" alt="orange bar" class="orange_bar">
                </div>
                <p class="team_member_name">HARVEY RUBE</p>
                <div class="team_member_social_media">
                    <a href="https://facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook_logo.png" alt="facebook_logo"></a>
                    <a href="https://twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter_logo.png" alt="twitter_logo"></a>
                    <a href="mailto:example@gmail.com"><img src="<?php echo get_template_directory_uri(); ?>/img/gmail_logo.png" alt="gmail_logo"></a>
                </div>
                <p class="team_member_text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut</p>
            </div>

            <div class="team_member">
                <div>
                    <img class="team_member_photo" src="<?php echo get_template_directory_uri(); ?>/img/photo3.png" alt="team member">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/orange_bar.png" alt="orange bar" class="orange_bar">
                </div>
                <p class="team_member_name">JANET PRIS</p>
                <div class="team_member_social_media">
                    <a href="https://facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook_logo.png" alt="facebook_logo"></a>
                    <a href="https://twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter_logo.png" alt="twitter_logo"></a>
                    <a href="mailto:example@gmail.com"><img src="<?php echo get_template_directory_uri(); ?>/img/gmail_logo.png" alt="gmail_logo"></a>
                </div>
                <p class="team_member_text">Commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
            </div>

            <div class="team_member">
                <div>
                    <img class="team_member_photo" src="<?php echo get_template_directory_uri(); ?>/img/photo4.png" alt="team member">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/orange_bar.png" alt="orange bar" class="orange_bar">
                </div>
                <p class="team_member_name">KEVIN WARD</p>
                <div class="team_member_social_media">
                    <a href="https://facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook_logo.png" alt="facebook_logo"></a>
                    <a href="https://twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter_logo.png" alt="twitter_logo"></a>
                    <a href="mailto:example@gmail.com"><img src="<?php echo get_template_directory_uri(); ?>/img/gmail_logo.png" alt="gmail_logo"></a>
                </div>
                <p class="team_member_text">Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
            </div>

        </div>
        
        <div id="team_dots">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bullets.png" alt="bullets">
        </div>
    </div>
    <!-- -----------------------------------------CONTACT----------------------------------------- -->
    <div id="contact">
        <div id="contact_title">
            <p id="contact_title_title">SAY <span class="orange">HELLO</span></p>
            <p id="contact_title_text">Excepteur sint occaecat cupidatat non proident, sunt in culpa<br>qui officia deserunt mollit anim id est laborum</p>
        </div>
        <form id="contact_form">
            <div id="contact_form_first_row">
                <input type="text" placeholder="Your Email" id="contact_form_email">
                <input type="text" placeholder="Subject" id="contact_form_subject">
            </div>
            <div id="contact_form_second_row">
                <textarea type="text" placeholder="Your Message" id="contact_form_message"></textarea>
            </div>
            <div id="contact_form_third_row">
                <button type="submit" id="contact_form_button">HIRE US</button>
                <div id="contact_from_social_media">
                    <a href="https://facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook_logo.png" alt="facebook_logo"></a>
                    <a href="https://twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter_logo.png" alt="twitter_logo"></a>
                    <a href="mailto:example@gmail.com"><img src="<?php echo get_template_directory_uri(); ?>/img/gmail_logo.png" alt="gmail_logo"></a>
                    <a href="https://dribbble.com"><img src="<?php echo get_template_directory_uri(); ?>/img/dribbble_logo.png" alt="dribble_logo"></a>
                    <a href="https://behance.net"><img src="<?php echo get_template_directory_uri(); ?>/img/behance_logo.png" alt="behance_logo"></a>
                </div>
            </div>
        </form>
    </div>
</main>
<?php get_footer(); ?>