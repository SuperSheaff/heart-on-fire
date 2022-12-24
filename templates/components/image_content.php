<?php
    // General.
    $componentId        = get_sub_field('component_image_content_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_image_content_class');
    $enableComponent    = get_sub_field('component_image_content_enable');
    $globalComponent    = get_sub_field('component_image_content_global_component');

    //Settings.
    $layout             = heartonfire_get_the_field_values($globalComponent, 'image_content', 'layout');
    $image              = heartonfire_get_the_field_values($globalComponent, 'image_content', 'image');
    $subheading         = heartonfire_get_the_field_values($globalComponent, 'image_content', 'subheading');
    $heading            = heartonfire_get_the_field_values($globalComponent, 'image_content', 'heading');
    $content            = heartonfire_get_the_field_values($globalComponent, 'image_content', 'content');

    $imageColumnClass   = '';
    $contentColumnClass = '';

    switch ($layout) {
        case 'image44content':
            $imageColumnClass   = 'col-lg-5 col-xl-4 offset-lg-1';
            $contentColumnClass = 'col-lg-5 col-xl-4 offset-xl-2';
            break;

        case 'image54content':
            $imageColumnClass   = 'col-lg-5 offset-lg-1';
            $contentColumnClass = 'col-lg-5 col-xl-4 offset-lg-1';
            break;

        case 'content44image':
            $imageColumnClass   = 'col-lg-5 col-xl-4 offset-xl-2 order-lg-2';
            $contentColumnClass = 'col-lg-5 col-xl-4 offset-lg-1 order-lg-1';
            break;

        case 'content45image':
            $imageColumnClass   = 'col-lg-5 offset-lg-1 order-lg-2';
            $contentColumnClass = 'col-lg-5 col-xl-4 offset-lg-1 order-lg-1';
            break;
    }
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-image-content <?php echo $componentClass; ?>">
        <div class="container">
            <div class="row">
                <div class="<?php echo $imageColumnClass; ?> my-auto">
                    <img src="<?php echo $image; ?>" alt="<?php echo $heading; ?>" class="img-fluid w-100">
                </div>
                <div class="<?php echo $contentColumnClass; ?> my-auto">
                    <?php if ($subheading) : ?>
                        <h5 class="mb-3">
                            <?php echo $subheading; ?>
                        </h5>
                    <?php endif; ?>
                    <?php if ($heading) : ?>
                        <h2>
                            <?php echo $heading; ?>
                        </h2>
                    <?php endif; ?>
                    <?php if ($content) : ?>
                        <div class="hof-image-content__content">
                            <?php echo $content; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
