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
        <div class="container">
            <div class="row">
                <?php 
                    if ($query->have_posts()) :
                        $postCount = 0;
                        while ($query->have_posts()) :
                            $postCount++;
                            $query->the_post();

                            // Trimming Excerpt
                            $excerpt = get_the_excerpt();
                            $excerpt = substr($excerpt, 0, 320);
                            $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                            $result .= ' ...';

                            if ($postCount == 1) :
                                ?>
                                    <div class="col-12">
                                        <a href="<?php echo get_the_permalink(); ?>">
                                            <div class="hof-blog__card--top">
                                                <div class="row">
                                                    <div class="col-lg-6 d-flex mb-3 mb-lg-0">
                                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                                                    </div>
                                                    <div class="col-lg-5 offset-lg-1 hof-blog__card--content my-auto">
                                                        <p class="mb-0"><?php echo get_the_date('d / m / Y'); ?></p>
                                                        <h2 class="ff-p90"><?php echo the_title(); ?></h2>
                                                        <p><?php echo $result; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <hr class="my-3 my-lg-4">
                                <div class="row">
                                <?php
                            else :
                                ?>
                                    <div class="col-md-6 col-lg-4 mb-3 mb-lg-4">
                                        <a href="<?php echo get_the_permalink(); ?>">
                                            <div class="hof-blog__card">
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" class="mb-3">
                                                <div class="hof-blog__card--content">
                                                    <p class="mb-0"><?php echo get_the_date('d / m / Y'); ?></p>
                                                    <h2 class="ff-p90"><?php echo the_title(); ?></h2>
                                                    <p><?php echo $result; ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                            endif; 
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
