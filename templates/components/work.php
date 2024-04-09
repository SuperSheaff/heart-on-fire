<?php
    // General.
    $componentId        = get_sub_field('component_work_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_work_class');
    $enableComponent    = get_sub_field('component_work_enable');
    $globalComponent    = get_sub_field('component_work_global_component');

    //Settings.
    $workRepeater       = heartonfire_get_the_field_values($globalComponent, 'work', 'work_repeater');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-work <?php echo $componentClass; ?>">
        <div class="p-3 p-xl-4">
            <div class="row">

                <?php foreach ($workRepeater as $work) :

                    $workLink       = $work['item'];
                    $workID         = url_to_postid($workLink);
                    $workTitle      = get_the_title($workID);
                    $workTags       = $work['tag_repeater'];
                ?>

                <div class="col-12 col-xl-6 mb-4">
                    <a href="<?php echo $workLink; ?>" class="hof-work--item d-flex flex-column">

                        <?php if (has_post_thumbnail( $workID ) ): ?>
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $workID ), 'single-post-thumbnail' ); ?>
                            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>" class="hof-work--img">
                        <?php endif; ?>

                        <div class="hof-work--item-text">

                            <div class="hof-work--item-text-container d-flex flex-column">
                                <h4><?php echo $workTitle; ?></h4>
                                <div class="hof-work--item-text-view">View work</div>
                            </div>

                            <div class="hof-work--tag-container">
                                <?php foreach ($workTags as $tag) :
                                    $tagName       = $tag['tag'];
                                ?>

                                    <div class="hof-work--tag">
                                        <?php echo $tagName; ?>
                                    </div>

                                <?php endforeach; ?>
                            </div>

                        </div>
                    </a>
                </div>

                    

                <?php endforeach; ?>

            </div>
        </div>
    </section>
<?php endif; ?>
