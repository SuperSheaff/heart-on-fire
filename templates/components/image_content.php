<?php
    // General.
    $componentId        = get_sub_field('component_image_content_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_image_content_class');
    $enableComponent    = get_sub_field('component_image_content_enable');
    $globalComponent    = get_sub_field('component_image_content_global_component');

    //Settings.
    $layout             = heartonfire_get_the_field_values($globalComponent, 'image_content', 'layout');
    $image              = heartonfire_get_the_field_values($globalComponent, 'image_content', 'image');
    $content            = heartonfire_get_the_field_values($globalComponent, 'image_content', 'content');
    $cta                = heartonfire_get_the_field_values($globalComponent, 'image_content', 'cta');

    $imageColumnClass   = '';
    $contentColumnClass = '';

    switch ($layout) {
        case 'image-left':
            $imageColumnClass   = 'hof-image-content--left';
            $contentColumnClass = 'hof-image-content--left offset-lg-6';
            break;

        case 'image-right':
            $imageColumnClass   = 'hof-image-content--right';
            $contentColumnClass = 'hof-image-content--right';
            break;
    }
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-image-content py-0 <?php echo $componentClass; ?>">
        <img src="<?php echo $image; ?>" alt="<?php echo $heading; ?>" class="hof-image-content--image <?php echo $imageColumnClass; ?>">
        <div class="container">
            <div class="row hof-image-content--height">
                <div class="col-lg-6 <?php echo $contentColumnClass; ?> my-auto">
                    <div class="hof-image-content__content">
                        <?php if ($content) : ?>
                            <?php echo $content; ?>
                        <?php endif; ?>
                        <?php if ($cta) : ?>
                            <a href="<?php echo $cta['url']; ?>" class="hof-btn-black--outline mt-4" target="<?php echo $cta['target']; ?>">
                                <?php echo $cta['title']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
