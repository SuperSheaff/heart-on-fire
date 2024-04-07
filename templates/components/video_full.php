<?php
    // General.
    $componentId        = get_sub_field('component_video_full_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_video_full_class');
    $enableComponent    = get_sub_field('component_video_full_enable');
    $globalComponent    = get_sub_field('component_video_full_global_component');

    //Settings.
    $video              = heartonfire_get_the_field_values($globalComponent, 'video_full', 'video');
 
?>
<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-video-full <?php echo $componentClass; ?>">
        <div class="px-3 px-lg-4 pb-3 pb-lg-4 pt-0">
            <video class="hof-video-full--video" autoplay controls muted>
                <source src="<?php echo $video; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>
<?php endif; ?>
