<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HeartOnFire
 */

    $socialMedia    = get_field('settings_social_media', 'options');
    $footerLogoUrl  = get_field('settings_logo', 'options')['settings_logo_footer'] ?:get_stylesheet_directory_uri() . '/assets/dist/image/logo/logo--white.png';
    $footerMenu     = heartonfire_generate_nav_menu('menu-footer');
    $workMenu       = heartonfire_generate_nav_menu('menu-work');
    $servicesMenu   = heartonfire_generate_nav_menu('menu-services');
?>

    <?php 
        if (is_page('contact') || is_404() ) {

        } else {
    ?>

        <footer class="hof-footer">
            <div class="hof-container">

                <div class="hof-section-padding hof-bg-brown">
                    <div class="d-flex flex-column flex-xl-row justify-content-between hof-color-white">

                        <?php /* Footer Logo */ ?>
                        <a href="<?php echo get_home_url(); ?>" class="order-1 order-xl-1 mb-5 mb-xl-auto mx-auto mx-xl-0 hof-header__nav--logo">
                            <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/logo/logo--white.svg'); ?>
                        </a>

                        <div class="order-3 order-xl-2 mb-5 mb-xl-0 mx-auto mx-xl-0 text-center text-xl-left d-flex flex-column">
                            <p class="hof-footer--link-heading">Quick Links</p>
                            <?php foreach ($footerMenu as $index => $item) : ?>
                                <a href="<?php echo $item['url']; ?>" class="hof-footer--link">
                                    <?php echo $item['title']; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>

                        <div class="order-4 order-xl-3 mb-5 mb-xl-0 mx-auto mx-xl-0 text-center text-xl-left d-flex flex-column">
                            <p class="hof-footer--link-heading">Services</p>
                            <?php foreach ($servicesMenu as $index => $item) : ?>
                                <a href="<?php echo $item['url']; ?>" class="hof-footer--link">
                                    <?php echo $item['title']; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>

                        <div class="order-5 order-xl-4 mb-5 mb-xl-0 mx-auto mx-xl-0 text-center text-xl-left d-flex flex-column">
                            <p class="hof-footer--link-heading">Work</p>
                            <?php foreach ($workMenu as $index => $item) : ?>
                                <a href="<?php echo $item['url']; ?>" class="hof-footer--link">
                                    <?php echo $item['title']; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>

                        <div class="order-2 order-xl-5 mb-5 mb-xl-0 mx-auto mx-xl-0 text-center text-xl-left d-flex flex-column">
                            <p class="hof-footer--link-heading">NEWSLETTER</p>
                            <p class="hof-footer--text">
                                Want to receive love letters &<br>free advice?
                                <br>
                                <br>
                                Join the club...
                            </p>

                            <div class="">
                                <form action="https://byablo.us8.list-manage.com/subscribe/post?u=966a983115dc44d6768748ad7&amp;id=711248dc13&amp;f_id=007403e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div class="d-flex">
                                        <input type="email" value="" placeholder="Email Address" name="EMAIL" class="hof-footer__lower--input required email text-center text-lg-left mb-3" id="mce-EMAIL" required>
                                        
                                        <span id="mce-EMAIL-HELPERTEXT" class="hof-footer__lower--text helper_text"></span>
                                        <!-- <div id="mce-responses" class="clear foot">
                                            <div class="response hof-footer__lower--text" id="mce-error-response" style="display:none"></div>
                                            <div class="response hof-footer__lower--text" id="mce-success-response" style="display:none"></div>
                                        </div>  -->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_966a983115dc44d6768748ad7_711248dc13" tabindex="-1" value=""></div>
                                        
                                        <div class="optionalParent">
                                            <div class="clear foot hof-footer__lower--btn-container">
                                                <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="hof-footer__lower--btn">
                                                <div class="hof-footer__lower--btn-icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.7111 17.7099L17.7111 12.7099C17.8021 12.6148 17.8735 12.5027 17.9211 12.3799C18.0211 12.1365 18.0211 11.8634 17.9211 11.6199C17.8735 11.4972 17.8021 11.385 17.7111 11.2899L12.7111 6.28994C12.6178 6.1967 12.5072 6.12274 12.3853 6.07228C12.2635 6.02182 12.1329 5.99585 12.0011 5.99585C11.7348 5.99585 11.4794 6.10164 11.2911 6.28994C11.1028 6.47824 10.997 6.73364 10.997 6.99994C10.997 7.26624 11.1028 7.52164 11.2911 7.70994L14.5911 10.9999L7.00108 10.9999C6.73586 10.9999 6.48151 11.1053 6.29397 11.2928C6.10644 11.4804 6.00108 11.7347 6.00108 11.9999C6.00108 12.2652 6.10644 12.5195 6.29397 12.707C6.48151 12.8946 6.73586 12.9999 7.00108 12.9999L14.5911 12.9999L11.2911 16.2899C11.1974 16.3829 11.123 16.4935 11.0722 16.6154C11.0214 16.7372 10.9953 16.8679 10.9953 16.9999C10.9953 17.132 11.0214 17.2627 11.0722 17.3845C11.123 17.5064 11.1974 17.617 11.2911 17.7099C11.384 17.8037 11.4946 17.8781 11.6165 17.9288C11.7384 17.9796 11.8691 18.0057 12.0011 18.0057C12.1331 18.0057 12.2638 17.9796 12.3857 17.9288C12.5075 17.8781 12.6181 17.8037 12.7111 17.7099Z" fill="#372120"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="mce-responses" class="clear foot text-center text-lg-left" style="max-width:266px">
                                        <div class="response hof-footer__lower--text" id="mce-error-response" style="display:none"></div>
                                        <div class="response hof-footer__lower--text" id="mce-success-response" style="display:none"></div>
                                    </div> 

                                </form>
                                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                            </div>

                        </div>
                        
                    </div>

                </div> 

                <?php /* Footer Lower */ ?>
                <div class="hof-footer__lower hof-section-padding-x hof-bg-dark-brown py-3">
                    <div class="d-flex flex-column flex-xl-row justify-content-between">
                        
                        <?php /* Copyright & Email */ ?>
                        <div class="d-flex flex-column flex-xl-row mx-auto mx-xl-0 mb-0 text-center text-xl-left order-2 order-xl-1">
                            <p class="hof-footer--text mr-xl-5 order-2 order-xl-1 mb-0">© Copyright by ABLO</p>
                            <a href="mailto:hello@byablo.com.au" class="hof-footer--link mb-3 mb-xl-0 order-1 order-xl-2">hello@byablo.com.au</a>
                        </div>

                        <?php /* Social Links */ ?>
                        <div class="hof-footer__lower--socials mx-auto mr-xl-0 mb-4 my-xl-auto d-flex order-1 order-xl-2">

                            <a href="https://osh.studio/" target="_blank" class="mx-auto ml-xl-3 mr-xl-1">
                                <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-osh.svg'); ?>
                            </a>

                            <?php if (! empty($socialMedia['settings_instagram'])) { ?>
                                <a href="<?php echo $socialMedia['settings_instagram']['url']; ?>" class="mx-auto ml-xl-3 mr-xl-0"
                                    <?php echo ($socialMedia['settings_instagram']['target']) ? 'target="_blank"' : ''; ?>>
                                    <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-instagram.svg'); ?>
                                </a>
                            <?php } ?>
                            <?php if (! empty($socialMedia['settings_facebook'])) { ?>
                                <a href="<?php echo $socialMedia['settings_facebook']['url']; ?>" class="mx-auto ml-xl-3 mr-xl-0"
                                    <?php echo ($socialMedia['settings_facebook']['target']) ? 'target="_blank"' : ''; ?>>
                                    <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-facebook.svg'); ?>
                                </a>
                            <?php } ?>
                            <?php if (! empty($socialMedia['settings_tiktok'])) { ?>
                                <a href="<?php echo $socialMedia['settings_tiktok']['url']; ?>" class="mx-auto ml-xl-3 mr-xl-0"
                                    <?php echo ($socialMedia['settings_tiktok']['target']) ? 'target="_blank"' : ''; ?>>
                                    <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-tiktok.svg'); ?>
                                </a>
                            <?php } ?>
                            <?php if (! empty($socialMedia['settings_linkedin'])) { ?>
                                <a href="<?php echo $socialMedia['settings_linkedin']['url']; ?>" class="mx-auto ml-xl-3 mr-xl-0"
                                    <?php echo ($socialMedia['settings_linkedin']['target']) ? 'target="_blank"' : ''; ?>>
                                    <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-linkedin.svg'); ?>
                                </a>
                            <?php } ?>
                            
                        </div>

                    </div>
                </div>

            </div>
        </footer>
    <?php
        }
    ?>
<?php wp_footer(); ?>
</body>
</html>
