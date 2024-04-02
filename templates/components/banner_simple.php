<?php
    // General.
    $componentId        = get_sub_field('component_banner_simple_id') ?: 'random_' . rand();
    $componentClass     = get_sub_field('component_banner_simple_class');
    $enableComponent    = get_sub_field('component_banner_simple_enable');
    $globalComponent    = get_sub_field('component_banner_simple_global_component');

    //Settings.
    $heading            = heartonfire_get_the_field_values($globalComponent, 'banner_simple', 'heading');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="hof-banner-simple <?php echo $componentClass; ?>">
        <div class="hof-navigation-offset"></div>
        <div class="hof-section-padding">
            <div class="row">
                <div class="col-xl-8">
                    <?php if ($heading) : ?>
                        <h1 class="h2 mb-0 hof-color-brown">
                            <?php echo $heading; ?>
                        </h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
