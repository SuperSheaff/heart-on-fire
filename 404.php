<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HeartOnFire
 */

get_header();
?>

    <?php /* Page for components */ ?>
    <div id="primary" class="content-area content-area--contact">
        <main id="main" class="site-main">
            <div class="hof-container text-center">
                <div class="hof-navigation-offset"></div>
                <section class="hof-404">
                    <div class="hof-section-padding hof-color-white">
                        <h1 class="h2">404 - Page Not Found!</h1>
                        <p>Looks like this page doesn't exist, maybe this photo of my dog will help make you feel better :)</p>
                        <div class="d-flex">
                            <a href="<?php echo get_site_url();?>" class="hof-btn-white--outline mx-auto mb-4">TAKE ME TO THE HOMEPAGE</a>
                        </div>
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/dist/image/components/image-kingston.jpg" alt="My dog Kingston" class="hof-404--image">
                    </div>
                </section>
            </div>
        </main>
    </div>

<?php
get_footer();
