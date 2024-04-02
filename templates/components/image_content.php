<?php
    // General.
    $componentId        = get_sub_field('component_image_content_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_image_content_class');
    $enableComponent    = get_sub_field('component_image_content_enable');
    $globalComponent    = get_sub_field('component_image_content_global_component');

    //Settings.
    $tagline            = heartonfire_get_the_field_values($globalComponent, 'image_content', 'tagline');
    $heading            = heartonfire_get_the_field_values($globalComponent, 'image_content', 'heading');
    $content            = heartonfire_get_the_field_values($globalComponent, 'image_content', 'content');
    $cta                = heartonfire_get_the_field_values($globalComponent, 'image_content', 'cta');
    $image              = heartonfire_get_the_field_values($globalComponent, 'image_content', 'image');
 
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-image-content <?php echo $componentClass; ?>">
        <div class="hof-section-padding">
            <div class="row">

                <div class="col-12 col-md-6 col-xl-5 offset-xl-1 my-md-auto mb-4 mb-xl-0 text-center text-md-left">

                    <?php if ($tagline) : ?>
                        <p class="hof-tagline hof-color-brown">
                            <?php echo $tagline; ?>
                        </p>
                    <?php endif; ?>

                    <?php if ($heading) : ?>
                        <h3 class="hof-color-brown">
                            <?php echo $heading; ?>
                        </h3>
                    <?php endif; ?>

                    <?php if ($content) : ?>
                        <?php echo $content; ?>
                    <?php endif; ?>

                    <?php if ($cta) : ?>
                        <a href="<?php echo $cta['url']; ?>" class="hof-btn-brown--outline mt-4" target="<?php echo $cta['target']; ?>">
                            <?php echo $cta['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="col-12 col-md-5 col-xl-4 offset-md-1">
                    <img src="<?php echo $image; ?>" alt="<?php echo $heading; ?>" class="hof-image-content--image img-fluid <?php echo $imageColumnClass; ?>">
                </div>

            </div>
        </div>

    </section>
<?php endif; ?>
