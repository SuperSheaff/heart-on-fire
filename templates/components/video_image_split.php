<?php
    // General.
    $componentId        = get_sub_field('component_video_image_split_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_video_image_split_class');
    $enableComponent    = get_sub_field('component_video_image_split_enable');
    $globalComponent    = get_sub_field('component_video_image_split_global_component');

    //Settings.
    $layout             = heartonfire_get_the_field_values($globalComponent, 'video_image_split', 'layout');
    $video              = heartonfire_get_the_field_values($globalComponent, 'video_image_split', 'video');
    $choiceOne          = heartonfire_get_the_field_values($globalComponent, 'video_image_split', 'choice_one');
    $image              = heartonfire_get_the_field_values($globalComponent, 'video_image_split', 'image');
    $choiceTwo          = heartonfire_get_the_field_values($globalComponent, 'video_image_split', 'choice_two');
 
    $imageLayoutClass        = '';
    $videoLayoutClass        = '';

    switch ($layout) {

        case 'video-first':
            $imageLayoutClass   = '';
            $videoLayoutClass   = '';
            break;

        case 'video-second':
            $imageLayoutClass  = 'order-1';
            $videoLayoutClass  = 'order-2';
            break;
    }

    $videoClass         = '';
    $imageClass         = '';
    $sectionClass       = '';

    switch ($choiceOne . ' ' . $choiceTwo) {

        case 'desktop desktop':
            $sectionClass   = 'd-none d-lg-block';
            break;

        case 'desktop both':
            $videoClass  = 'd-none d-lg-block';
            break;

        case 'desktop mobile':
            $videoClass  = 'd-none d-lg-block';
            $imageClass  = 'd-lg-none';
            break;

        case 'mobile mobile':
            $sectionClass   = 'd-lg-none';
            break;
        
        case 'mobile both':
            $videoClass  = 'd-lg-none';
            break;

        case 'mobile desktop':
            $videoClass  = 'd-lg-none';
            $imageClass  = 'd-none d-lg-block';
            break;

        case 'both mobile':
            $imageClass  = 'd-lg-none';
            break;

        case 'both desktop':
            $imageClass  = 'd-none d-lg-block';
            break;
    }
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-video-image-split <?php echo $componentClass; ?> <?php echo $sectionClass; ?>">
        <div class="px-3 px-lg-4 pb-3 pb-lg-4">
            <div class="d-flex flex-column flex-lg-row">
                <video class="hof-video-image-split--video <?php echo $videoClass; ?> <?php echo $videoLayoutClass; ?>" autoplay loop muted>
                    <source src="<?php echo $video; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="<?php echo $image; ?>" class="hof-video-image-split--img <?php echo $imageClass; ?> <?php echo $imageLayoutClass; ?>">
            </div>
        </div>
    </section>
<?php endif; ?>
