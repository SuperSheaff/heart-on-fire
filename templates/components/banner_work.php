<?php
    // General.
    $componentId        = get_sub_field('component_banner_work_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_banner_work_class');
    $enableComponent    = get_sub_field('component_banner_work_enable');
    $globalComponent    = get_sub_field('component_banner_work_global_component');

    //Settings.
    $industry           = heartonfire_get_the_field_values($globalComponent, 'banner_work', 'industry');
    $type               = heartonfire_get_the_field_values($globalComponent, 'banner_work', 'type');
    $content            = heartonfire_get_the_field_values($globalComponent, 'banner_work', 'content');
    $statisticRepeater  = heartonfire_get_the_field_values($globalComponent, 'banner_work', 'banner_work_repeater');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-banner-work <?php echo $componentClass; ?>">
        <div class="hof-navigation-offset"></div>
        <div class="px-3 px-lg-4 pb-3 pb-lg-4 pt-0">

            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>" class="hof-banner-work--img">
            <?php endif; ?>

            

            <div class="row pt-3 pt-xl-4">
                <div class="col-md-6 col-xl-4 hof-color-brown mb-4 mb-md-0">

                    <h1 class="h2 ff-manrope mb-3 mb-xl-4">
                        <?php echo get_the_title(); ?>
                    </h1>

                    <p class="mb-0"><strong>Industry</strong></p>
                    <?php if ($industry) : ?>
                        <p class="hof-opacity-50">
                            <?php echo $industry; ?>
                        </p>
                    <?php endif; ?>

                    <p class="mb-0"><strong>What We Did</strong></p>
                    <?php if ($type) : ?>
                        <p class="hof-opacity-50">
                            <?php echo $type; ?>
                        </p>
                    <?php endif; ?>

                    <?php foreach ($statisticRepeater as $statistic) :
                        $statisticStat      = $statistic['statistic'];
                        $statisticLabel     = $statistic['label'];
                        $statisticInfo      = $statistic['info'];
                        ?>

                        <h3 class="ff-manrope mt-4 mb-2 fw-500"><?php echo $statisticStat; ?></h3>
                        <p class="mb-2"><strong><?php echo $statisticLabel; ?></strong></p>
                        <p class="hof-opacity-50 mb-0"><?php echo $statisticInfo; ?></p>
                        
                    <?php endforeach; ?>

                </div>

                <div class="col-md-6 offset-xl-2">
                    <?php if ($content) : ?>
                        <div class="">
                            <?php echo $content; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </section>
<?php endif; ?>
