<?php get_header(); ?>
<main>
    <!-- SLIDER -->
    <div id="slider">
        <div id="slider_title">
            <p id="slider_text"><b>WE DESIGN <span class="orange">THINGS</span></b></p>
            <p id="slider_subtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod tempor incidunt ut labore et dolore magna aliqua</p>
            <div id="button_container">
                <button class="slider_button">HIRE US</button>
                <button class="slider_button">OUR WORKS</button>
            </div>
            <img id="slider_button_more" class="invert" src="<?php echo get_template_directory_uri(); ?>/img/circle_bottom.png" alt="button">
        </div>
    </div>

    <!-- SERVICES -->
    <div id="services">
        <div id="services_flex_container">
            <div class="service">
                <div class="service_logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/printer_logo.png" alt="printer logo">
                </div>
                <div class="service_text">
                    <div class="service_text_title">PRINT DESIGN</div>
                    <div class="service_text_text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</div>
                </div>
            </div>
            <div class="service">
                <div class="service_logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/web_design_logo.png" alt="web logo">
                </div>
                <div class="service_text">
                    <div class="service_text_title">PRINT DESIGN</div>
                    <div class="service_text_text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</div>
                </div>
            </div>
            <div class="service">
                <div class="service_logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/app_logo.png" alt="app logo">
                </div>
                <div class="service_text">
                    <div class="service_text_title">PRINT DESIGN</div>
                    <div class="service_text_text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</div>
                </div>
            </div>
            <div class="service">
                <div class="service_logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/design_logo.png" alt="design logo">
                </div>
                <div class="service_text">
                    <div class="service_text_title">PRINT DESIGN</div>
                    <div class="service_text_text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</div>
                </div>
            </div>
        </div>
    </div>

    <!-- NEWSLETTER -->
    <div id="newsletter">
        <div id="newsletter_container">
            <input type="text" placeholder="Enter Your email address for newsletter" id="newsletter_input">
            <input type="button" value="SUBSCRIBE" id="newsletter_button">
        </div>
    </div>

    <!-- WORKS -->
    <div id="works">
        <div id="works_title">
            <div id="works_title_title">OUR <span class="orange">WORKS</span></div>
            <div id="works_title_text">Ut enim ad minim veniam, Quis nostrud exercitation ullamco<br> laboris nisi ut aliquip ex ea commodo consequat</div>
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
</main>
<?php get_footer(); ?>