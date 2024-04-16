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

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="hof-container hof-bg-beige">
                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        ?>
                            <div class="hof-navigation-offset"></div>
                            <section class="hof-image-full">
                                <div class="px-3 px-lg-4 py-3 pb-lg-4 pt-lg-0">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $heading; ?>" class="hof-image-full--img">
                                </div>
                            </section>
                            <section class="hof-simple-content hof-color-brown">
                                <div class="px-3 px-lg-4 pb-3 pb-lg-4 pt-0">
                                    <div class="row">
                                        <div class="col-12 col-lg-8 mx-auto">
                                            <p class="fw-700"><?php echo get_the_date(); ?></p>
                                            <h1 class="h2 ff-manrope mb-5"><?php echo the_title(); ?></h1>
                                            <?php echo the_content(); ?>
                                        </div>
                                    </div>
                                    
                                </div>
                            </section>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
        </main>
    </div>
<?php
get_footer();
