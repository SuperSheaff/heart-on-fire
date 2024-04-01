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

    <footer class="hof-footer">
        <div class="hof-container">

            <div class="hof-section-padding hof-bg-brown">
                <div class="d-flex justify-content-between hof-color-white">

                    <?php /* Footer Logo */ ?>
                    <a href="<?php echo get_home_url(); ?>" class="mb-auto hof-header__nav--logo">
                        <?php echo file_get_contents(get_stylesheet_directory_uri() . '/assets/src/image/logo/logo--white.svg'); ?>
                    </a>

                    <div class="d-flex flex-column">
                        <p class="hof-footer--link-heading">Quick Links</p>
                        <a href="#" class="hof-footer--link">Home</a>
                        <a href="#" class="hof-footer--link">About us</a>
                        <a href="#" class="hof-footer--link">Work</a>
                        <a href="#" class="hof-footer--link">Services</a>
                        <a href="#" class="hof-footer--link">Journal</a>
                        <a href="#" class="hof-footer--link mb-0">Contact</a>
                    </div>

                    <div class="d-flex flex-column">
                        <p class="hof-footer--link-heading">Services</p>
                        <a href="#" class="hof-footer--link">Social Media Management</a>
                        <a href="#" class="hof-footer--link">Content Creation</a>
                        <a href="#" class="hof-footer--link">Strategy</a>
                        <a href="#" class="hof-footer--link">Copywriting</a>
                        <a href="#" class="hof-footer--link">Email Marketing</a>
                        <a href="#" class="hof-footer--link mb-0">Influencer Marketing / UGC</a>
                    </div>

                    <div class="d-flex flex-column">
                        <p class="hof-footer--link-heading">Work</p>
                        <a href="#" class="hof-footer--link">Super Bowl</a>
                        <a href="#" class="hof-footer--link">What’s doing App</a>
                        <a href="#" class="hof-footer--link">Kindred Skincare</a>
                        <a href="#" class="hof-footer--link">Brisbane Skin</a>
                        <a href="#" class="hof-footer--link mb-0">Take Bioactives</a>
                    </div>

                    <div class="d-flex flex-column">
                        <p class="hof-footer--link-heading">NEWSLETTER</p>
                        <p class="hof-footer--text">
                            Want to receive love letters &<br>free advice?
                            <br>
                            <br>
                            Join the club...
                        </p>
                    </div>
                    
                </div>

            </div> 

            <div class="hof-section-padding-x hof-bg-dark-brown py-3 py-xl-4">
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <p class="hof-footer--text mr-5 mb-0">© Copyright by ABLO</p>
                        <a href="mailto:hello@byablo.com.au" class="hof-footer--link mb-0">hello@byablo.com.au</a>
                    </div>
                </div>
            </div>

        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>
