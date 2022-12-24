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
?>

    <footer class="hof-footer hof-bg-dark-green position-relative">
        <div class="container px-lg-0">

            <?php /* Footer Upper */ ?>
            <div class="hof-footer__upper d-flex flex-column flex-lg-row justify-content-between">
                
                <?php /* Footer Logo */ ?>
                <a href="<?php echo get_home_url(); ?>" class="mb-4 my-lg-auto mx-auto mx-lg-0 hof-footer__upper--logo">
                    <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/logo/logo--white.svg'); ?>
                </a>

                <?php /* Social Links */ ?>
                <div class="hof-footer__upper--socials mt-auto mx-auto mx-lg-0 d-lg-flex">

                    <?php if (! empty($socialMedia['settings_facebook'])) { ?>
                        <a href="<?php echo $socialMedia['settings_facebook']['url']; ?>" class="mt-auto mx-3 mr-lg-0"
                            <?php echo ($socialMedia['settings_facebook']['target']) ? 'target="_blank"' : ''; ?>>
                            <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-facebook.svg'); ?>
                        </a>
                    <?php } ?>
                    <?php if (! empty($socialMedia['settings_instagram'])) { ?>
                        <a href="<?php echo $socialMedia['settings_instagram']['url']; ?>" class="mt-auto mx-3 ml-lg-4 mr-lg-0"
                            <?php echo ($socialMedia['settings_instagram']['target']) ? 'target="_blank"' : ''; ?>>
                            <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-instagram.svg'); ?>
                        </a>
                    <?php } ?>
                    <?php if (! empty($socialMedia['settings_linkedin'])) { ?>
                        <a href="<?php echo $socialMedia['settings_linkedin']['url']; ?>" class="mt-auto mx-3 ml-lg-4 mr-lg-0"
                            <?php echo ($socialMedia['settings_linkedin']['target']) ? 'target="_blank"' : ''; ?>>
                            <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-pinterest.svg'); ?>
                        </a>
                    <?php } ?>
                    <?php if (! empty($socialMedia['settings_twitter'])) { ?>
                        <a href="<?php echo $socialMedia['settings_twitter']['url']; ?>" class="mt-auto mx-3 ml-lg-4 mr-lg-0"
                            <?php echo ($socialMedia['settings_twitter']['target']) ? 'target="_blank"' : ''; ?>>
                            <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/icons/icon-mail.svg'); ?>
                        </a>
                    <?php } ?>
                    
                </div>

            </div>

            <?php /* Footer Lower */ ?>
            <div class="d-flex flex-column flex-lg-row">

                <div class="d-flex flex-column text-center text-lg-left mb-4 mb-lg-0">
                    <a href="mailto:hello@byablo.com.au" class="hof-footer__lower--text">hello@byablo.com.au</a>
                    <a href="tel:0407853635" class="hof-footer__lower--text">0407 853 635</a>
                </div>

                <div class="d-flex flex-column mx-lg-auto text-center text-lg-left  mb-4 mb-lg-0">
                    <p class="hof-footer__lower--text">Want to receive love letters & free advice?</p>
                    <p class="hof-footer__lower--text">Join the club...</p>
                </div>

                <div class="d-flex flex-column">
                    <form action="https://byablo.us8.list-manage.com/subscribe/post?u=966a983115dc44d6768748ad7&amp;id=711248dc13&amp;f_id=007403e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate d-flex flex-column" target="_blank" novalidate>
                        
                        <input type="email" value="" placeholder="Email Address" name="EMAIL" class="hof-footer__lower--input required email mb-3" id="mce-EMAIL" required>
                        
                        <span id="mce-EMAIL-HELPERTEXT" class="hof-footer__lower--text helper_text"></span>
                        <div id="mce-responses" class="clear foot">
                            <div class="response hof-footer__lower--text" id="mce-error-response" style="display:none"></div>
                            <div class="response hof-footer__lower--text" id="mce-success-response" style="display:none"></div>
                        </div> 
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_966a983115dc44d6768748ad7_711248dc13" tabindex="-1" value=""></div>
                        
                        <div class="optionalParent mx-auto mr-lg-0">
                            <div class="clear foot">
                                <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="hof-btn-white">
                            </div>
                        </div>

                    </form>
                    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                </div>

            </div>
        </div>

    </footer>
<?php wp_footer(); ?>
</body>
</html>
