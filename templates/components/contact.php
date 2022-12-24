<?php
    // General.
    $componentId        = get_sub_field('component_contact_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_contact_class');
    $enableComponent    = get_sub_field('component_contact_enable');
    $globalComponent    = get_sub_field('component_contact_global_component');

    //Settings.
    $heading            = heartonfire_get_the_field_values($globalComponent, 'contact', 'heading');
    $content            = heartonfire_get_the_field_values($globalComponent, 'contact', 'content');
    $shortcode          = heartonfire_get_the_field_values($globalComponent, 'contact', 'shortcode');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-contact <?php echo $componentClass; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto hof-color-dark-green">
                    <?php if ($heading) : ?>
                        <h1 class="hof-contact__heading">
                            <?php echo $heading; ?>
                        </h1>
                    <?php endif; ?>
                    <div class="hof-contact__content">
                        <?php if ($content) : ?>
                            <?php echo $content; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 my-auto">
                <?php echo do_shortcode($shortcode); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
