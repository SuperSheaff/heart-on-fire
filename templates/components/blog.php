<?php
    // General.
    $componentId            = get_sub_field('component_blog_id') ?: 'random_' . rand();
    $componentClass         = get_sub_field('component_blog_class');
    $enableComponent        = get_sub_field('component_blog_enable');
    $globalComponent        = get_sub_field('component_blog_global_component');

    $args = array('post_type'   => 'post',
                  'orderby'     => 'date',
                  'order'       => 'DESC');

    $query = new WP_Query($args);
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-blog <?php echo $componentClass; ?>">
        <div class="hof-navigation-offset"></div>
        <div class="px-3 px-lg-4 pb-3 pb-lg-4 pt-0">
            <div class="row">
                <?php 
                    if ($query->have_posts()) :
                        $postCount = 0;
                        while ($query->have_posts()) :
                            $postCount++;
                            $query->the_post();
                                ?>
                                    <div class="col-md-6 col-xl-4 mb-3 mb-lg-4">
                                        <a href="<?php echo get_the_permalink(); ?>">
                                            <div class="hof-blog__card">
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" class="mb-3">
                                                <div class="hof-blog__card--content">
                                                    <p class="mb-0"><?php echo get_the_date(); ?></p>
                                                    <h4 class="mb-0"><?php echo the_title(); ?></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                        endwhile; 
                    else :
                ?>
                    <h2>Sorry... No posts were found</h2>
                <?php
                    endif; 
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>
