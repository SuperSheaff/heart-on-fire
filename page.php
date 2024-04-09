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
    <div id="primary" class="content-area <?php if (is_page('contact')) { echo 'content-area--contact'; } ?>">
        <main id="main" class="site-main">
            <div class="hof-container hof-bg-beige">
                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        if (have_rows('components')) {
                            while (have_rows('components')) {
                                the_row();
                                $layoutName = get_row_layout();
                                get_template_part('/templates/components/' . $layoutName);
                            }
                        }
                    endwhile;
                endif;
                ?>
            </div>
        </main>
    </div>

<?php
get_footer();
