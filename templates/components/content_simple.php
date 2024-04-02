<?php
    // General.
    $componentId        = get_sub_field('component_content_simple_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_content_simple_class');
    $enableComponent    = get_sub_field('component_content_simple_enable');
    $globalComponent    = get_sub_field('component_content_simple_global_component');

    //Settings.
    $tagline            = heartonfire_get_the_field_values($globalComponent, 'content_simple', 'tagline');
    $heading            = heartonfire_get_the_field_values($globalComponent, 'content_simple', 'heading');
    $content            = heartonfire_get_the_field_values($globalComponent, 'content_simple', 'content');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-content-simple <?php echo $componentClass; ?>">
        <div class="hof-section-padding">
            <div class="row">
                <div class="col-lg-8 col-xl-6 mx-auto text-center hof-color-brown">

                    <?php if ($tagline) : ?>
                        <p class="hof-tagline hof-color-brown text-center">
                            <?php echo $tagline; ?>
                        </p>
                    <?php endif; ?>

                    <?php if ($heading) : ?>
                        <h2 class="hof-content-simple__heading mb-xl-4">
                            <?php echo $heading; ?>
                        </h2>
                    <?php endif; ?>

                    <?php if ($content) : ?>
                        <?php echo $content; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
