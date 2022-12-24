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
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>
                        <section>
                            <div class="container">
                                <?php
                                    if (is_single()) {
                                        the_title('<h1>', '</h1>');
                                    }
                                ?>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                                <div class="hof-general__txt-img-content">
                                <?php
                                    the_content(
                                        sprintf(
                                            /* translators: %s: Post title. */
                                            __(
                                                'Continue reading<span class="screen-reader-text">
                                                "%s"</span>',
                                                'heartonfire'
                                            ),
                                            get_the_title()
                                        )
                                    );

                                    wp_link_pages(
                                        array(
                                            'before'      => '<div class="page-links">' . esc_html__(
                                                'Pages:',
                                                'heartonfire'
                                            ),
                                            'after'       => '</div>',
                                            'link_before' => '<span class="page-number">',
                                            'link_after'  => '</span>',
                                        )
                                    );
                                ?>
                                </div>
                            </div>
                        </section>
                    <?php
                endwhile;
            endif;
            ?>
        </main>
    </div>

<?php
get_footer();
